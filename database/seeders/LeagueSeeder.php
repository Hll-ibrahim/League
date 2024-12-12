<?php

namespace Database\Seeders;

use App\Models\League;
use App\Models\LeagueTeam;
use App\Models\LeagueType;
use App\Models\Nationality;
use App\Models\Player;
use App\Models\Season;
use App\Models\SeasonLeague;
use App\Models\Sport;
use App\Models\Team;
use App\Models\TeamPlayer;
use Carbon\Carbon;
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
            $league = League::create([
                'name' => $league,
                'sport_id' => $sport->id,
                'league_type_id' => $league_type->id,
                ]);

            SeasonLeague::create([
                'season_id' => $season->id,
                'league_id' => $league->id,
            ]);
        }
        $league = League::where('name','Süper Lig')->first();


        $teams = ['Galatasaray','Real Madrid','Bayern Munich', 'Manchester City','Liverpool'];
        foreach ($teams as $team) {
            $team_id = Team::create([
                'name' => $team,
                'sport_id' => $league->sport_id,
            ]);

            LeagueTeam::create([
                'season_league_id' => $league->id,
                'team_id' => $team_id->id,
            ]);
        }

        Team::create(['name'=>'Fenerbahçe','sport_id' => Sport::where('name', 'basketball')->first()->id]);
        Team::create(['name'=>'Beşiktaş','sport_id' => Sport::where('name', 'football')->first()->id]);

        $players_names = ['Halil İbrahim','Melih','Ekin','Sabri','Sneijder','Kerem'];
        $team = Team::where('name','Galatasaray')->first();
        $nationality = Nationality::create(['name'=>'Türk']);
        foreach ($players_names as $name) {
            $player = Player::create([
                'first_name'=>$name,
                'last_name' => 'Messi',
                'birth_date' => Carbon::now(),
                'gender' => 'male',
                'nationality_id' => $nationality->id,
            ]);

            TeamPlayer::create([
                'team_id' => $team->id,
                'player_id' => $player->id,
            ]);
        }


    }
}
