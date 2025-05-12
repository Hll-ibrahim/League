<?php

namespace App\Http\Controllers;

use App\Http\Requests\SportRequest;
use App\Services\RequestService;
use App\Services\SportService;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class SportController extends Controller
{
    protected $sportService;
    public function __construct(SportService $sportService) {
        $this->sportService = $sportService;
    }

    public function index(){
        return view('sport.index');
    }

    public function fetch(){

        $sports = $this->sportService->all();
        return DataTables::of($sports)
            ->addColumn('process',function($sport){
                $detail =  '<a href="'.route('sport.detail',$sport->id).'" class="btn btn-info btn-xs mx-1">Detail</a>';

                if(auth()->user() && auth()->user()->hasRole('admin')){
                    $detail .= '<button onclick="openUpdateModal('.$sport->id.', \''.$sport->name.'\', \''.$sport->description.'\')" class="btn btn-warning btn-xs mx-1">Update</button>';
                    $detail .= '<button onclick="deleteSport('.$sport->id.')" class="btn btn-danger btn-xs mx-1">Delete</button>';
                }
                return $detail;
            })
            ->addIndexColumn()
            ->rawColumns(['process'])
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
