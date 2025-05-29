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
            ['name' => 'goal',              'sport_id' => 1, 'is_important' => true],
            ['name' => 'assist',            'sport_id' => 1, 'is_important' => false],
            ['name' => 'yellow_card',       'sport_id' => 1, 'is_important' => false],
            ['name' => 'red_card',          'sport_id' => 1, 'is_important' => true],
            ['name' => 'shot',              'sport_id' => 1, 'is_important' => false],
            ['name' => 'shot_on_goal',      'sport_id' => 1, 'is_important' => false],
            ['name' => 'pass',              'sport_id' => 1, 'is_important' => false],
            ['name' => 'accurate_pass',     'sport_id' => 1, 'is_important' => false],
            ['name' => 'foul',              'sport_id' => 1, 'is_important' => false],
            ['name' => 'offside',           'sport_id' => 1, 'is_important' => false],
            ['name' => 'corner',            'sport_id' => 1, 'is_important' => false],
            ['name' => 'save',              'sport_id' => 1, 'is_important' => false],
            ['name' => 'substitution_in',   'sport_id' => 1, 'is_important' => false],
            ['name' => 'substitution_out',  'sport_id' => 1, 'is_important' => false],
        ]);



    }
}
