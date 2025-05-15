<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Services\AnnouncementService;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    protected $announcementService;
    public function __construct(AnnouncementService $announcementService){
        $this->announcementService = $announcementService;
    }
    public function index(){
        $announcements = $this->announcementService->paginate(5);
        return view('announcement.index', compact('announcements'));
    }
}
