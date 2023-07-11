<?php

namespace Database\Seeders;

use App\Models\SectionTitle;
use Illuminate\Database\Seeder;

class SectionTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SectionTitle::updateOrCreate([
            'title' => 'REGISTRATION',
            'sub_title' => 'WHAT YOU WILL GET WITH THE',
            'section'   => 'registration'
        ]);

        SectionTitle::updateOrCreate([
            'title' => 'SIX CATEGORIES',
            'sub_title' => 'SIX GROUPS FOR',
            'section'   => 'six categories'
        ]);

        SectionTitle::updateOrCreate([
            'title' => '10 SEGMENTS',
            'sub_title' => 'THERE WILL BE',
            'section'   => 'segments'
        ]);

        SectionTitle::updateOrCreate([
            'title' => 'Teacher List',
            'section'   => 'teacher list'
        ]);
    }
}
