<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Madel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class ModelController extends Controller
{
     public function index(){
        $data['makes']=DB::table('makes')->get();
        $data1['models']=DB::table('makes')->join('models','models.make_id','=','makes.id')->orderBy('make_id','desc')->get();
      return  view('back.model.model',$data,$data1);
    }
     public function model_add(Request $request){
        $request->validate([
            'model_name'=>'required|min:3'
        ]);
        $model=new Madel();
        $model->model_name=$request->model_name;
        $model->make_id=$request->make_id;
        $model->model_slug=Str::slug($request->model_name);
        $model->save();
    }
    public function get_model(Request $request){
     $get_model=Madel::findOrFail($request->id);
        return response()->json($get_model);
    }
    public function model_update(Request $request){
        $model=Madel::find($request->id);
        $model->model_name=$request->model_edit_name;
        $model->model_slug=Str::slug($request->model_edit_name);
        $model->make_id=Str::slug($request->make_id);
        $model->save();
        return response()->json($model);
    }
}
