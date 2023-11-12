<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PhpParser\Node\Expr\Cast\Object_;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@gmail.com',
        ]);

        $preset_data = [
            [
                'name' => 'Elegant',
                'file_name' => 'presets\elegant',
                'default_data' => [
                    'banner_section' => [
                        'banner_title' => 'you and someone wedding',
                        'banner_quote' => 'we are glad to invite you to our dream wedding'
                    ],
                    'cover_section' => [
                        'cover_title' => 'bride and groom',
                        'cover_wedding_date' => '17 November 2023'
                    ],
                    'customize' => [
                        'cover_title_font_style' => 'mono',
                        'cover_title_text_color' => 'text-indigo-700'
                    ]
                ],
                'data' => [
                    'banner_section' => [
                        'banner_title' => 'you and i wedding',
                        'banner_quote' => 'we are glad to invite you to our dream wedding'
                    ],
                    'cover_section' => [
                        'cover_title' => 'bride and groom',
                        'cover_wedding_date' => '17 November 2023'
                    ],
                    'customize' => [
                        'cover_title_font_style' => 'mono',
                        'cover_title_text_color' => 'text-indigo-700'
                    ]
                ],
            ],
            [
                'name' => 'Beautifull',
                'file_name' => 'presets\beautifull',
                'default_data' => [
                    'banner_section' => [
                        'banner_title' => 'you and someone dream wedding',
                        'banner_quote' => 'we are glad to invite you to our dream wedding, our pleasure'
                    ],
                    'cover_section' => [
                        'cover_title' => 'bride and groom',
                        'cover_wedding_date' => '08 November 2023'
                    ],
                    'customize' => [
                        'cover_title_font_style' => 'mono',
                        'cover_title_text_color' => 'text-teal-700'
                    ]
                ],
                'data' => [
                    'banner_section' => [
                        'banner_title' => 'you and i dream wedding',
                        'banner_quote' => 'we are glad to invite you to our dream wedding, our pleasure'
                    ],
                    'cover_section' => [
                        'cover_title' => 'bride and groom',
                        'cover_wedding_date' => '08 November 2023'
                    ],
                    'customize' => [
                        'cover_title_font_style' => 'mono',
                        'cover_title_text_color' => 'text-teal-700'
                    ]
                ],
            ],
            [
                'name' => 'Simple',
                'file_name' => 'presets\simple',
                'default_data' => [
                    'banner_section' => [
                        'banner_title' => 'name of me and name of my partner',
                        'banner_quote' => 'we are very happy to invite you to our dream wedding'
                    ],
                    'cover_section' => [
                        'cover_title' => 'bride and groom',
                        'cover_wedding_date' => '20 November 2023'
                    ],
                    'customize' => [
                        'cover_title_font_style' => 'mono',
                        'cover_title_text_color' => 'text-lime-700'
                    ]
                ],
                'data' => [
                    'banner_section' => [
                        'banner_title' => 'name of me and name of you',
                        'banner_quote' => 'we are very happy to invite you to our dream wedding'
                    ],
                    'cover_section' => [
                        'cover_title' => 'bride and groom',
                        'cover_wedding_date' => '20 November 2023'
                    ],
                    'customize' => [
                        'cover_title_font_style' => 'mono',
                        'cover_title_text_color' => 'text-lime-700'
                    ]
                ],
            ],
        ];
        foreach ($preset_data as $k => $d){
            \App\Models\Preset::factory()
            ->has(\App\Models\Invitation::factory()->state(
                function(array $attr) use($user){
                    return ['user_id' => $user->id];
                })
                ->has(\App\Models\Guest::factory()->count(5))
                ->has(\App\Models\Section::factory()->state(function(array $attr, \App\Models\Invitation $invitation) use($d){
                    return [
                        'preset_id' => $invitation->preset_id,
                        'data' => $d['data'],
                    ];
                })))
            ->create([
                'name' => $d['name'],
                'file_name' => $d['file_name'],
                'default_data' => $d['default_data'],
            ]);
        }
    }
}
