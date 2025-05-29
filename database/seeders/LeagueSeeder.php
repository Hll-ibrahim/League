<?php

namespace Database\Seeders;

use App\Models\Announcement;
use App\Models\League;
use App\Models\LeagueTeam;
use App\Models\LeagueType;
use App\Models\Nationality;
use App\Models\Player;
use App\Models\Position;
use App\Models\Referee;
use App\Models\Season;
use App\Models\SeasonLeague;
use App\Models\Sport;
use App\Models\Stadium;
use App\Models\Team;
use App\Models\TeamPlayer;
use App\Models\User;
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
                'player_count' => 18,
                ]);

            SeasonLeague::create([
                'season_id' => $season->id,
                'league_id' => $league->id,
            ]);
        }
        $league = League::where('name','Süper Lig')->first();


        $teams = ['Galatasaray','Real Madrid','Bayern Munich', 'Manchester City','Liverpool'];
        $stadiums = ['Rams Park','Santiago Bernabau','Park Plaza','Etihad Stadium','Anfield']; // 'Stadion' yerine özgün adlar önerildi

        foreach (array_combine($teams, $stadiums) as $teamName => $stadiumName) {
            $team = Team::create([
                'name' => $teamName,
                'sport_id' => $league->sport_id,
            ]);

            LeagueTeam::create([
                'season_league_id' => $league->id,
                'team_id' => $team->id,
            ]);

            Stadium::create([
                'team_id' => $team->id,
                'name' => $stadiumName,
            ]);
        }


        Team::create(['name'=>'Fenerbahçe','sport_id' => Sport::where('name', 'basketball')->first()->id]);
        Team::create(['name'=>'Beşiktaş','sport_id' => Sport::where('name', 'football')->first()->id]);

        $players_names = ['Halil İbrahim','Melih','Ekin','Sabri','Sneijder','Kerem'];
        $team = Team::where('name','Galatasaray')->first();
        $season_league = SeasonLeague::where('league_id', $league->id)->where('season_id',$season->id)->first();
        $league_team = LeagueTeam::where('team_id',$team->id)->where('season_league_id',$season_league->id)->first();
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
                'league_team_id' => $league_team->id,
                'player_id' => $player->id,
            ]);
        }

        $other_team = Team::where('name','Real Madrid')->first();
        $other_league_team = LeagueTeam::where('team_id',$other_team->id)->where('season_league_id',$season_league->id)->first();
        $other_player_names = ['Diyar','Semih','Selim Han','Mertens','Hakan Hoca'];
        foreach ($other_player_names as $name) {
            $player = Player::create([
                'first_name'=>$name,
                'last_name' => 'Ronaldo',
                'birth_date' => Carbon::now(),
                'gender' => 'male',
                'nationality_id' => $nationality->id,
            ]);

            TeamPlayer::create([
                'league_team_id' => $other_league_team->id,
                'player_id' => $player->id,
            ]);
        }

        $title = 'Galatasaray is champion';
        $descriptions = ['Galatasaray Spor Kulübü (Turkish pronunciation: [galataˈsaɾaj spoɾ kuˈlyby], Galatasaray Sports Club), more commonly referred to as simply Galatasaray, is a Turkish professional football club based on the European side of the city of Istanbul. It is the association football branch of the larger Galatasaray Sports Club of the same name, itself a part of the Galatasaray Community Cooperation Committee which includes Galatasaray High School where the football club was founded in October 1905 consisting entirely of student members. The team traditionally play in dark shades of red and yellow at home, with the shirts split down the middle between the two colours.',
            'Goal night','today is a big day'];

        foreach ($descriptions as $decription) {
            Announcement::create(['title'=>$title,'description'=>$decription,'user_id'=>1,'team_id'=>1]);
        }

        $user = User::first();
        $sports = Sport::all();

        foreach($sports as $sport ) {
            Referee::create(['sport_id'=>$sport->id,'user_id'=>$user->id]);
        }

        $positions = ['forward','midfielder','defender','goalkeeper'];
        foreach ($positions as $position){
            Position::create([
                'name'=>$position,
                'sport_id'=>$sport->id
            ]);
        }



    }
}
