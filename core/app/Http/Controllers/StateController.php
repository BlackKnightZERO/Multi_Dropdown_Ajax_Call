<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Division;
use App\District;
use App\Thana;

class StateController extends Controller
{
    //
    public function index()
    {
    	// $request = 'message';
    	// $request->session()->put('message','message');
    	//$divisions = DB::table('divisions')->get();
    	$divisions = Division::all();
    	return view('welcome')->with(['divisions'=>$divisions]);
    }
    public function getDist($id)
    {
    	//return response()->json(array('district'=> $districts), 200);
    	//$districts = District::where('parent_id', $id)->get();
    	$division = Division::find($id);
    	return $division->district;
    }
    public function getTha($id)
    {
    	//return response()->json(array('district'=> $districts), 200);
    	//$thanas = Thana::where('parent_id', $id)->get();
    	$district = District::find($id);
    	return $district->thana;
    }
}
