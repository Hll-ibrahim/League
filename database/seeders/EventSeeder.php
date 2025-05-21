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
            ['name' => 'goal', 'sport_id' => 1],
            ['name' => 'assist', 'sport_id' => 1],
            ['name' => 'yellow_card', 'sport_id' => 1],
            ['name' => 'red_card', 'sport_id' => 1],
            ['name' => 'shot', 'sport_id' => 1],
            ['name' => 'pass', 'sport_id' => 1],
            ['name' => 'foul', 'sport_id' => 1],
            ['name' => 'offside', 'sport_id' => 1],
            ['name' => 'save', 'sport_id' => 1],
            ['name' => 'substitution_in', 'sport_id' => 1],
            ['name' => 'substitution_out', 'sport_id' => 1],
        ]);

    }
}
