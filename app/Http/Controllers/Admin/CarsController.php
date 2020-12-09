<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cars;
use App\Models\Car_part;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CarsController extends Controller
{
    public function index(){
        $data['cars']=DB::table('cars')
            ->join('fuel_types','fuel_types.id','=','cars.fuel_type_id')
            ->join('models','models.id','=','cars.model_id')
            ->join('makes','makes.id','=','models.make_id')
            ->get();
        $data1['makes']=DB::table('makes')->get();
        return view('back.cars.cars',$data,$data1);
    }
    public function cars_add(){
       $fuel_types=DB::table('fuel_types')->get();
       $gear_boxes=DB::table('gear_boxes')->get();
       $cities=DB::table('cities')->get();
       $makes=DB::table('makes')->get();
       $differ=DB::table('differs')->get();
       $bans=DB::table('bans')->get();
       $colors=DB::table('car_colors')->get();
       $sell_types=DB::table('sell_types')->get();
       $car_part_status=DB::table('car_part_status')->get();


       return view('back.cars.cars_add')
           ->with('fuel_types',$fuel_types)
           ->with('gear_boxes',$gear_boxes)
           ->with('cities',$cities)
           ->with('makes',$makes)
           ->with('differ',$differ)
           ->with('bans',$bans)
           ->with('colors',$colors)
           ->with('sell_types',$sell_types)
           ->with('car_part_status',$car_part_status);




    }
    public function make_model_select(Request $request){
        $model=DB::table('models')
            ->where('make_id',$request->make)
            ->get();
$output='   <label for="formrow-firstname-input">Car model</label><div>
   <select name="model_id" class="form-control">';
        foreach ($model as $m){
             $output.='<option value="'.$m->id.'">'.$m->model_name.'</option>';
        }
        $output.='</select><div>';
        return $output;


    }

    public function cars_added(Request $request){
            $request->validate([
            'car_name'=>'required|min:3',
            'model_id'=>'required|integer',
            'discount'=>'required|integer',
            'car_price'=>'required|integer',
            'motor_size'=>'required|integer',
            'start_production_year'=>'required|integer',
            'used_km'=>'required|integer',
            'hours_power'=>'required|integer',
            'fuel_type_id'=>'required|integer',
            'gear_box_id'=>'required|integer',
            'city_id'=>'required|integer',
            'differ_id'=>'required|integer',
            'ban_id'=>'required|integer',
            'color_id'=>'required|integer',
            'sell_type_id'=>'required|integer',
            /*'car_detail'=>'required|min:20',*/
        ]);
        $cars=new Cars;
        $cars->car_name=$request->car_name;
        $cars->car_slug=Str::slug($request->car_name);
        $cars->model_id=$request->model_id;
        $cars->car_price=$request->car_price;
        $cars->discount=$request->discount;
        $cars->motor_size=$request->motor_size;
        $cars->start_production_year=$request->start_production_year;
        $cars->used_km=$request->used_km;
        $cars->hours_power=$request->hours_power;
        $cars->fuel_type_id=$request->fuel_type_id;
        $cars->gear_box_id=$request->gear_box_id;
        $cars->city_id=$request->city_id;
        $cars->differ_id=$request->differ_id;
        $cars->ban_id=$request->ban_id;
        $cars->color_id=$request->color_id;
        $cars->color_id=$request->color_id;
        $cars->sell_type_id=$request->sell_type_id;
        $cars->car_detail=$request->car_detail;
        $cars->save();
        return response()->json(['car_id' => $cars->id]);
    }
    public function cars_part_added(Request $request){
        $request->validate([
            'Right_Rear_Fender'=>'required|integer',
            'Left_Rear_Fender'=>'required|integer',
            'Right_Rear_Door'=>'required|integer',
            'Right_Front_Door'=>'required|integer',
            'Ceiling'=>'required|integer',
            'Left_Rear_Door'=>'required|integer',
            'Left_Front_Door'=>'required|integer',
            'Right_Front_Fender'=>'required|integer',
            'Engine_bonnet'=>'required|integer',
            'Left_Front_Fender'=>'required|integer',
            'Front_bumper'=>'required|integer',
            'Rear_Hood'=>'required|integer',
            'Rear_Bumper'=>'required|integer',
        ]);
        $car_part=new Car_part;
        $car_part->car_id=$request->car_id_hidden;
        $car_part->Right_Rear_Fender=$request->Right_Rear_Fender;
        $car_part->Left_Rear_Fender=$request->Left_Rear_Fender;
        $car_part->Right_Rear_Door=$request->Right_Rear_Door;
        $car_part->Right_Front_Door=$request->Right_Front_Door;
        $car_part->Ceiling=$request->Ceiling;
        $car_part->Left_Rear_Door=$request->Left_Rear_Door;
        $car_part->Left_Front_Door=$request->Left_Front_Door;
        $car_part->Right_Front_Fender=$request->Right_Front_Fender;
        $car_part->Front_bumper=$request->Front_bumper;
        $car_part->Rear_Hood=$request->Rear_Hood;
        $car_part->Rear_Bumper=$request->Rear_Bumper;
        $car_part->save();
    }
}
