<?php

namespace App\Http\Controllers;

use App\Http\Requests\SportRequest;
use App\Models\League;
use App\Services\Contracts\RequestServiceInterface;
use App\Services\Contracts\SportServiceInterface;
use App\Services\SportService;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class SportController extends Controller
{
    protected $sportService;
    protected $requestService;
    public function __construct(SportServiceInterface $sportService , RequestServiceInterface $requestService) {
        $this->sportService = $sportService;
        $this->requestService = $requestService;
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
                return '<button onclick="openUpdateModal('.$sport->id.', \''.$sport->name.'\', \''.$sport->description.'\')" class="btn btn-warning btn-xs">Update</button>';
            })
            ->addIndexColumn()
            ->rawColumns(['detail','delete','update'])
            ->make();
    }

    public function detail($id){
        $sport_id=$id;
        $sport_name = $this->sportService->getSportName($id);
        return view('sport.detail',compact('sport_id','sport_name'));
    }

    public function create(SportRequest $request){
        $this->sportService->add($request->all());
        return response()->json(['success'=>'Data added successfully.']);
    }

    public function delete(SportRequest $request){
        $this->sportService->delete($request['id']);
        return response()->json(['success'=>'Data deleted successfully.']);
    }

    public function get(Request $request){
        $sport = $this->sportService->get($request->sport_id);
        return response()->json($sport);
    }

    public function update(SportRequest $request){
        $this->sportService->update($request);
        return response()->json(['success'=>'Data updated successfully.']);
    }
}
