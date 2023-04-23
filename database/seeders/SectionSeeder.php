<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Section::factory()->create([
            'uri' => 'messages',
            'language_code' => 'da-DK',
            'name' => 'Beskeder',
            'position' => 0,
            'is_active' => true
        ]);

        \App\Models\Section::factory()->create([
            'uri' => 'messages',
            'language_code' => 'en-US',
            'name' => 'Messages',
            'position' => 0,
            'is_active' => true
        ]);

        \App\Models\Section::factory()->create([
            'uri' => 'health',
            'language_code' => 'da-DK',
            'name' => 'Sundhed',
            'position' => 1,
            'is_active' => true
        ]);

        \App\Models\Section::factory()->create([
            'uri' => 'health',
            'language_code' => 'en-US',
            'name' => 'Health',
            'position' => 1,
            'is_active' => true
        ]);

        \App\Models\Section::factory()->create([
            'uri' => 'consciousness',
            'language_code' => 'da-DK',
            'name' => 'Bevidsthed',
            'position' => 2,
            'is_active' => true
        ]);

        \App\Models\Section::factory()->create([
            'uri' => 'consciousness',
            'language_code' => 'en-US',
            'name' => 'Consciousness',
            'position' => 2,
            'is_active' => true
        ]);

        \App\Models\Section::factory()->create([
            'uri' => 'theater',
            'language_code' => 'da-DK',
            'name' => 'Teater',
            'position' => 3,
            'is_active' => true
        ]);

        \App\Models\Section::factory()->create([
            'uri' => 'theater',
            'language_code' => 'en-US',
            'name' => 'Theater',
            'position' => 3,
            'is_active' => true
        ]);

        \App\Models\Section::factory()->create([
            'uri' => 'funny',
            'language_code' => 'da-DK',
            'name' => 'sjov',
            'position' => 4,
            'is_active' => true
        ]);

        \App\Models\Section::factory()->create([
            'uri' => 'funny',
            'language_code' => 'en-US',
            'name' => 'Funny',
            'position' => 4,
            'is_active' => true
        ]);

        \App\Models\Section::factory()->create([
            'uri' => 'snooze',
            'language_code' => 'da-DK',
            'name' => 'Sover',
            'position' => 5,
            'is_active' => true
        ]);

        \App\Models\Section::factory()->create([
            'uri' => 'snooze',
            'language_code' => 'en-US',
            'name' => 'Snooze',
            'position' => 5,
            'is_active' => true
        ]);

        \App\Models\Section::factory()->create([
            'uri' => 'programming',
            'language_code' => 'da-DK',
            'name' => 'Programmering',
            'position' => 6,
            'is_active' => true
        ]);

        \App\Models\Section::factory()->create([
            'uri' => 'programming',
            'language_code' => 'en-US',
            'name' => 'Programming',
            'position' => 6,
            'is_active' => true
        ]);

        \App\Models\Section::factory()->create([
            'uri' => 'universe',
            'language_code' => 'da-DK',
            'name' => 'Univers',
            'position' => 7,
            'is_active' => true
        ]);

        \App\Models\Section::factory()->create([
            'uri' => 'universe',
            'language_code' => 'en-US',
            'name' => 'Universe',
            'position' => 7,
            'is_active' => true
        ]);

        \App\Models\Section::factory()->create([
            'uri' => 'science',
            'language_code' => 'da-DK',
            'name' => 'Videnskab',
            'position' => 8,
            'is_active' => true
        ]);

        \App\Models\Section::factory()->create([
            'uri' => 'science',
            'language_code' => 'en-US',
            'name' => 'Science',
            'position' => 8,
            'is_active' => true
        ]);

        \App\Models\Section::factory()->create([
            'uri' => 'national',
            'language_code' => 'da-DK',
            'name' => 'Nationalt',
            'position' => 9,
            'is_active' => true
        ]);

        \App\Models\Section::factory()->create([
            'uri' => 'national',
            'language_code' => 'en-US',
            'name' => 'National',
            'position' => 9,
            'is_active' => true
        ]);
    }
}
