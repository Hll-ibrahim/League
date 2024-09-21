<?php

namespace App\Http\Controllers;

use App\Http\Requests\SportRequest;
use App\Models\League;
use App\Services\SportService;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class SportController extends Controller
{
    protected $sportService;
    public function __construct(SportService $sportService){
        $this->sportService = $sportService;
    }

    public function index(){
        return view('sport.index');
    }

    public function fetch(){
        $sports = $this->sportService->all();
        return DataTables::of($sports)
            ->addColumn('detail',function($sport){
                return '<a href="'.route('sport.detail',$sport->id).'" class="btn btn-info btn-xs">Detail</a>';
            })
            ->addColumn('delete',function($sport){
                return '<button onclick="deleteSport('.$sport->id.')" class="btn btn-danger btn-xs">Delete</button>';
            })
            ->addColumn('update',function($sport){
                return '<button onclick="updateSport('.$sport->id.')" class="btn btn-warning btn-xs">Update</button>';
            })
            ->addIndexColumn()
            ->rawColumns(['detail','delete','update'])
            ->make();
    }

    public function detail($id){
        $sport = $this->sportService->get($id);
        return view('sport.detail',compact('sport'));
    }

    public function create(SportRequest $request){
        $this->sportService->add($request->all());
        return response()->json(['success'=>'Data added successfully.']);
    }

    public function delete(Request $request){
        $this->sportService->delete($request->sport_id);
        return response()->json(['success'=>'Data deleted successfully.']);
    }

    public function get(Request $request){
        $sport = $this->sportService->get($request->sport_id);
        return response()->json($sport);
    }

    public function update(SportRequest $request){
        $this->sportService->update($request->all());
        return response()->json(['success'=>'Data updated successfully.']);
    }
}
