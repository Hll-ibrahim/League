<?php

namespace App\Repositories;

use App\Models\League;
use App\Models\LeagueType;
use App\Models\Season;
use App\Models\Sport;
use App\Models\Team;
use App\Repositories\Contracts\LeagueRepositoryInterface;

class LeagueRepository implements LeagueRepositoryInterface {
    public function createLeague($data){
        return League::create($data);
    }
    public function getLeagues(){
        return League::all();
    }
    public function getLeagueBySportId($id) {
        return League::where('sport_id', $id)->get(); // sport_id'ye göre tüm ligleri döndür
    }

    public function getLeagueTypes(){
        return LeagueType::all();
    }
    public function getLeagueById($id){
        return League::findOrFail($id);
    }

    public function getLeagueNameById($id) {
        $season = LeagueType::find($id);
        return $season ? $season->name : null;
    }
    public function getSeasons(){
        return Season::all();
    }
    public function update(League $league,$data){
        return $league->update($data);
    }
    public function delete($id){
        return League::destroy($id);
    }
    public function getTeamsFromSport(int $sport_id, int $league_id){
        return Team::where('sport_id', $sport_id)
            ->whereNotIn('id', function ($query) use ($league_id) {
                $query->select('team_id')
                    ->from('leagues_teams')
                    ->where('league_id', $league_id);
            })
            ->get();    }

}
