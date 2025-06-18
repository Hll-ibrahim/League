<?php

namespace App\Http\Controllers;

use App\Services\SeasonService;
use Illuminate\Http\Request;

class SeasonController extends Controller
{
    protected $seasonService;
    public function __construct(SeasonService $seasonService) {
        $this->seasonService = $seasonService;
    }

    public function getSeasons(Request $request){
        $seasons = $this->seasonService->all();

        if ($seasons) {
            return response()->json($seasons); // JSON formatında döndür
        }

        return response()->json(['error' => 'No seasons found'], 404);
    }

    public function getSeasonNameById(Request $request){
        $season = $this->seasonService->getSeasonNameById($request->get('id'));
    }
}
