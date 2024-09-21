<?php

namespace Database\Seeders;

use App\Models\League;
use App\Models\LeagueType;
use App\Models\Season;
use App\Models\Sport;
use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LeagueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sports = ['football','american football','basketball','volleyball'];
        foreach ($sports as $sport) {
            Sport::create(['name' => $sport]);
        }
        $sport = Sport::where('name', 'football')->first();

        $league_types = ['tournament','league'];
        foreach ($league_types as $type) {
            LeagueType::create(['name' => $type]);
        }
        $league_type = LeagueType::where('name', 'league')->first();


        $seasons = ['2022-2023','2024-2025'];
        foreach ($seasons as $season) {
            Season::create(['name' => $season]);
        }

        $season = Season::where('name', '2022-2023')->first();


        $leagues = ['Süper Lig','Premier League','La Liga', 'Serie A'];
        foreach ($leagues as $league) {
            League::create([
                'name' => $league,
                'sport_id' => $sport->id,
                'league_type_id' => $league_type->id,
                'season_id' => $season->id,]);
        }
        $league = League::where('name','Süper Lig')->first();

        $teams = ['Galatasaray','Real Madrid','Bayern Munich', 'Manchester City','Liverpool'];
        foreach ($teams as $team) {
            Team::create([
                'name' => $team,
                'league_id' => $league->id,
            ]);
        }
    }
}
