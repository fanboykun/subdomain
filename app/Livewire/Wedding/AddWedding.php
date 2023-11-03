<?php

namespace App\Livewire\Wedding;

use App\Models\Section;
use App\Models\Wedding;
use DateTime;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class AddWedding extends Component
{
    public string $bride, $groom;

    public $date;

    public bool $status = true;

    public int $preset_id = 1;

    public string $subdomain;

    // data attributes of section data
    public array $section_data;

    // rule : ["cover_section"]["cover_title"]
    public $cover_title;

    // rule : ["cover_section"]["cover_wedding_date"]
    public $cover_wedding_date;

    // rule : ["banner_section"]["banner_quote"]
    public $banner_quote;

    // rule : ["banner_section"]["banner_title"]
    public $banner_title;

    // rule: ["customize"]["cover_title_text_color"]
    // for cover title text-color
    public $cover_title_text_color;

    // rule: ["customize"]["cover_title_font_style"]
    // for cover title font-style
    public $cover_title_font_style;

    // for customizing text-color and font-style
    public array $customize = [
        'color' => ['text-indigo-700', 'text-green-600',],
        'font' => ['sans', 'serif', 'mono'],
    ];

    public $wedding_created;

    public function render() : View
    {
        return view('livewire.wedding.add-wedding');
    }

    public function save()
    {
        $this->validate([
            'bride' => 'required',
            'groom' => 'required',
            'subdomain' => 'required|unique:weddings,subdomain',
            'date' => 'required',
            'cover_title' => 'required',
            'cover_wedding_date' => 'required',
            'banner_quote' => 'required',
            'banner_title' => 'required'
        ]);

        $this->fillEmpty();
        DB::transaction( function(){
            $wedding_created = Wedding::create([
                'user_id' => auth()->id(),
                'preset_id' => $this->preset_id,
                'bride' => $this->bride,
                'groom' => $this->groom,
                'subdomain' => $this->subdomain,
                'date' => $this->date,
                'status' => $this->status
            ]);

            Section::create([
                'wedding_id' => $wedding_created->id,
                'preset_id' => $this->preset_id,
                'data' => $this->section_data,
            ]);
        } );

        return $this->redirect(route('dashboard'), navigate : true);

    }

    private function fillEmpty() : void
    {
        $this->section_data["cover_section"]["cover_title"] = $this->cover_title;
        $this->section_data["cover_section"]["cover_wedding_date"] = $this->cover_wedding_date;
        $this->section_data["banner_section"]["banner_quote"] = $this->banner_quote;
        $this->section_data["banner_section"]["banner_title"] = $this->banner_title;
        $this->section_data["customize"]["cover_title_text_color"] = $this->cover_title_text_color;
        $this->section_data["customize"]["cover_title_font_style"] = $this->cover_title_font_style;
    }
}
