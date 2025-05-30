<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('event_types')->insert([
            ['name' => 'goal',              'sport_id' => 1, 'is_important' => true,  'image' => 'icon-soccer-ball'],
            ['name' => 'assist',            'sport_id' => 1, 'is_important' => false, 'image' => null],
            ['name' => 'yellow_card',       'sport_id' => 1, 'is_important' => false, 'image' => null],
            ['name' => 'red_card',          'sport_id' => 1, 'is_important' => true,  'image' => 'icon-red-card'],
            ['name' => 'shot',              'sport_id' => 1, 'is_important' => false, 'image' => null],
            ['name' => 'shot_on_goal',      'sport_id' => 1, 'is_important' => false, 'image' => null],
            ['name' => 'pass',              'sport_id' => 1, 'is_important' => false, 'image' => null],
            ['name' => 'accurate_pass',     'sport_id' => 1, 'is_important' => false, 'image' => null],
            ['name' => 'foul',              'sport_id' => 1, 'is_important' => false, 'image' => null],
            ['name' => 'offside',           'sport_id' => 1, 'is_important' => false, 'image' => null],
            ['name' => 'corner',            'sport_id' => 1, 'is_important' => false, 'image' => null],
            ['name' => 'save',              'sport_id' => 1, 'is_important' => false, 'image' => null],
            ['name' => 'substitution_in',   'sport_id' => 1, 'is_important' => false, 'image' => null],
            ['name' => 'substitution_out',  'sport_id' => 1, 'is_important' => false, 'image' => null],
        ]);




    }
}
