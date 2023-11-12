<?php

namespace App\Livewire;

use App\Models\Invitation;
use App\Models\Wedding;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

class EditWeddingPreset extends Component
{
    // wedding data
    public Invitation $invitation;

    // before update
    public $section_data;

    // duplicate of section_data to be compared and update
    public $new_section_data;

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

    #[Layout('layouts.edit-wedding-preset-layout')]
    public function render() : View
    {
        $this->invitation->load(['user', 'preset', 'section']);

        $this->section_data = $this->invitation->section->data;
        $this->new_section_data = $this->section_data;

        $this->cover_title = $this->section_data["cover_section"]["cover_title"];
        $this->cover_wedding_date = $this->section_data["cover_section"]["cover_wedding_date"];
        $this->banner_quote = $this->section_data["banner_section"]["banner_quote"];
        $this->banner_title = $this->section_data["banner_section"]["banner_title"];
        // $this->cover_title_text_color = $this->section_data["customize"]["cover_title_text_color"];
        // $this->cover_title_font_style = $this->section_data["customize"]["cover_title_font_style"];


        return view('livewire.edit-wedding-preset');
    }

    public function updatedCoverTitle() :void
    {
        $this->new_section_data["cover_section"]["cover_title"] = $this->cover_title;
        $this->invitation->section->update([
            'data' => $this->new_section_data
        ]);
    }
    public function updatedCoverWeddingDate() :void
    {
        $this->new_section_data["cover_section"]["cover_wedding_date"] = $this->cover_wedding_date;
        $this->invitation->section->update([
            'data' => $this->new_section_data
        ]);
    }
    public function updatedBannerQuote() :void
    {
        $this->new_section_data["banner_section"]["banner_quote"] = $this->banner_quote;
        $this->invitation->section->update([
            'data' => $this->new_section_data
        ]);
    }
    public function updatedBannerTitle() :void
    {
        $this->new_section_data["banner_section"]["banner_title"] = $this->banner_title;
        $this->invitation->section->update([
            'data' => $this->new_section_data
        ]);
    }

    public function updatedCoverTitleFontStyle() :void
    {
        $this->new_section_data["customize"]["cover_title_font_style"] = $this->cover_title_font_style;
        $this->invitation->section->update([
            'data' => $this->new_section_data
        ]);
    }

    public function updatedCoverTitleTextColor() :void
    {
        $this->new_section_data["customize"]["cover_title_text_color"] = $this->cover_title_text_color;
        $this->invitation->section->update([
            'data' => $this->new_section_data
        ]);
    }

}
