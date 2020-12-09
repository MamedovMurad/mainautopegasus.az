<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Make;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AttributeController extends Controller
{
    public function index()
    {
        $make['makes']=DB::table('makes')->get();
        return view('back.attribute.make_list',$make);
    }
    public function make_list(){
        return view('back.attribute.make_add');
    }
    public function make_add(Request $request){
        $request->validate([
            /*'make_name'=>'required|min:3|alpha'*/
        ]);
        $make=new Make;
        $make->make_name=$request->make_name;
        $make->make_slug=Str::slug($request->make_name);
        $make->save();

/*        (toastr()->success('Have fun storming the castle!', 'Miracle Max Says'));*/

    }
    public function get_make(Request $request){
        $get_makes=Make::findOrFail($request->id);
        return response()->json($get_makes);
    }
    public function make_update(Request $request){
   $make=Make::find($request->id);
   $make->make_name=$request->make_edit_name;
   $make->make_slug=Str::slug($request->make_edit_name);
   $make->save();
   return response()->json($make);

    }
    public function make_delete($id){

    }
}
