<?php

namespace App\Http\Controllers;

use App\Services\RequestService;
use App\Services\SeasonService;
use Illuminate\Http\Request;

class SeasonController extends Controller
{
    protected $seasonService;
    protected $requestService;
    public function __construct(SeasonService $seasonService , RequestService $requestService) {
        $this->seasonService = $seasonService;
        $this->requestService = $requestService;
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
