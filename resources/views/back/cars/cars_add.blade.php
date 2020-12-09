@extends('back.layouts.master')
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0 font-size-18">Cars Models</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Utility</a></li>
                                    <li class="breadcrumb-item active">Starter Page</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
                                 <div class="row">
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{$error}}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                    <div class="col-lg-6" id="car_part">
                        <div class="card">
                            <div class="card-body">
                                <form  method="POST" id="cars_form" >
                                    <div class="form-group">
                                        <label for="formrow-firstname-input">Car Name</label>
                                        @csrf
                                        <input type="text" id="car_name" class="form-control" name="car_name" >
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="formrow-firstname-input">Car make</label>
                                                <select id="make_select" name="make_id" class="form-control">
                                                    @foreach($makes as $make)
                                                    <option value="{{$make->id}}">{{$make->make_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 model_select " >
                                            <div class="form-group ">

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="formrow-firstname-input">Car Price</label>
                                            <input type="text" class="form-control" name="car_price" id="car_price">
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="formrow-firstname-input">Motor size</label>
                                            <input type="text" class="form-control" name="motor_size" id="motor_size">
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="formrow-firstname-input">Start production year</label>
                                            <input type="text" class="form-control" name="start_production_year" id="start_production_year">
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="formrow-firstname-input">Used km</label>
                                                <input type="text" class="form-control" name="used_km" id="used_km">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="formrow-firstname-input">Fuel type</label>
                                            <select  name="fuel_type_id" id="fuel_type_id" class="form-control">
                                                @foreach($fuel_types as $fuel)
                                                <option value="{{$fuel->id}}">{{$fuel->fuel_type_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="formrow-firstname-input">Gear boxes</label>
                                                <select  name="gear_box_id" id="gear_box_id" class="form-control">
                                                    @foreach($gear_boxes as $gear_box)
                                                        <option value="{{$gear_box->id}}">{{$gear_box->gear_box_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="formrow-firstname-input">City</label>
                                                <select  name="city_id" id="city_id" class="form-control">
                                                    @foreach($cities as $city)
                                                        <option value="{{$city->id}}">{{$city->city_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="formrow-firstname-input">Differencial</label>
                                                <select  name="differ_id" id="differ_id" class="form-control">
                                                    @foreach($differ as $diff)
                                                        <option value="{{$diff->id}}">{{$diff->differ_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="formrow-firstname-input">Bans</label>
                                                <select  name="ban_id" id="ban_id" class="form-control">
                                                    @foreach($bans as $ban)
                                                        <option value="{{$ban->id}}">{{$ban->ban_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="formrow-firstname-input">Car color</label>
                                                <select  name="color_id" id="color_id" class="form-control">
                                                    @foreach($colors as $color)
                                                        <option value="{{$color->id}}">{{$color->color_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="formrow-firstname-input">Sell type</label>
                                                <select  name="sell_type_id" id="sell_type_id" class="form-control">
                                                    @foreach($sell_types as $sell)
                                                        <option value="{{$sell->id}}">{{$sell->sell_type_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="formrow-firstname-input">Hours Power</label>
                                                <input type="number" id="hours_power" class="form-control" name="hours_power" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="formrow-firstname-input">Discount</label>
                                                <input type="text" class="form-control" id="discount" name="discount" >
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="formrow-firstname-input">Car Detail</label>
                                                <textarea rows="3" id="car_detail" name="car_detail"  {{--class="ckeditor"--}} class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                     {{--   <button type="button" id="cars_click" class="btn btn-primary w-md">Submit</button>--}}
                                        <button class="btn btn-success" id="next" type="button">Next</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                                            <div class="col-lg-6 d-none" id="car_part_form">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <form  method="POST" id="car_part_form" >
                                                            @csrf
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="formrow-firstname-input">Right_Rear_Fender </label>
                                                                <br>
                                                                <select  name="Right_Rear_Fender" id="Right_Rear_Fender" class="form-control">
                                                                    @foreach($car_part_status as $c_p_s)
                                                                        <option value="{{$c_p_s->id}}">{{$c_p_s->car_part_status_name}}</option>
                                                                        <br>
                                                                    @endforeach
                                                                </select>
                                                                <input type="hidden" id="car_id_hidden" value="">
                                                            </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="formrow-firstname-input">Left_Rear_Fender </label>
                                                                        <br>
                                                                        <select  name="Left_Rear_Fender" id="Left_Rear_Fender" class="form-control">
                                                                        @foreach($car_part_status as $c_p_s)
                                                                            <option value="{{$c_p_s->id}}">{{$c_p_s->car_part_status_name}}</option>
                                                                            <br>
                                                                        @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="formrow-firstname-input">Right_Rear_Door</label>
                                                                        <br>
                                                                        <select name="Right_Rear_Door" id="Right_Rear_Door" class="form-control">
                                                                            @foreach($car_part_status as $c_p_s)
                                                                                <option value="{{$c_p_s->id}}">{{$c_p_s->car_part_status_name}}</option>
                                                                                <br>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="formrow-firstname-input">Right_Front_Door</label>
                                                                        <br>

                                                                        <select name="Right_Front_Door" id="Right_Front_Door" class="form-control">
                                                                            @foreach($car_part_status as $c_p_s)
                                                                                <option value="{{$c_p_s->id}}">{{$c_p_s->car_part_status_name}}</option>
                                                                                <br>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="formrow-firstname-input">Ceiling</label>
                                                                        <br>

                                                                        <select name="Ceiling" id="Ceiling" class="form-control">
                                                                            @foreach($car_part_status as $c_p_s)
                                                                                <option value="{{$c_p_s->id}}">{{$c_p_s->car_part_status_name}}</option>
                                                                                <br>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="formrow-firstname-input">Left_Rear_Door</label>
                                                                        <br>

                                                                        <select name="Left_Rear_Door" id="Left_Rear_Door" class="form-control">
                                                                            @foreach($car_part_status as $c_p_s)
                                                                                <option value="{{$c_p_s->id}}">{{$c_p_s->car_part_status_name}}</option>
                                                                                <br>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="formrow-firstname-input">Left_Front_Door</label>
                                                                        <br>
                                                                        <select name="Left_Front_Door" id="Left_Front_Door" class="form-control">
                                                                            @foreach($car_part_status as $c_p_s)
                                                                                <option value="{{$c_p_s->id}}">{{$c_p_s->car_part_status_name}}</option>
                                                                                <br>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="formrow-firstname-input">Right_Front_Fender</label>
                                                                        <br>

                                                                        <select name="Right_Front_Fender" id="Right_Front_Fender" class="form-control">
                                                                            @foreach($car_part_status as $c_p_s)
                                                                                <option value="{{$c_p_s->id}}">{{$c_p_s->car_part_status_name}}</option>
                                                                                <br>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="formrow-firstname-input">Engine_bonnet</label>
                                                                        <br>

                                                                        <select name="Right_Front_Fender" id="Engine_bonnet" class="form-control">
                                                                            @foreach($car_part_status as $c_p_s)
                                                                                <option value="{{$c_p_s->id}}">{{$c_p_s->car_part_status_name}}</option>
                                                                                <br>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="formrow-firstname-input">Left_Front_Fender</label>
                                                                        <br>
                                                                        <select name="Left_Front_Fender" id="Left_Front_Fender" class="form-control">
                                                                            @foreach($car_part_status as $c_p_s)
                                                                                <option value="{{$c_p_s->id}}">{{$c_p_s->car_part_status_name}}</option>
                                                                                <br>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="formrow-firstname-input">Front_bumper</label>
                                                                        <br>
                                                                        <select name="Front_bumper" id="Front_bumper" class="form-control">
                                                                            @foreach($car_part_status as $c_p_s)
                                                                                <option value="{{$c_p_s->id}}">{{$c_p_s->car_part_status_name}}</option>
                                                                                <br>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="formrow-firstname-input">Rear_Hood</label>
                                                                        <br>
                                                                        <select name="Rear_Hood" id="Rear_Hood" class="form-control">
                                                                            @foreach($car_part_status as $c_p_s)
                                                                                <option value="{{$c_p_s->id}}">{{$c_p_s->car_part_status_name}}</option>
                                                                                <br>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="formrow-firstname-input">Rear_Bumper</label>
                                                                        <br>
                                                                        <select name="Rear_Bumper" id="Rear_Bumper" class="form-control">
                                                                            @foreach($car_part_status as $c_p_s)
                                                                                <option value="{{$c_p_s->id}}">{{$c_p_s->car_part_status_name}}</option>
                                                                                <br>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div>
                                                                <button type="button" id="car_part_click" class="btn btn-primary w-md">Submit</button>
                                                            </div>
                                                        </form>

                                                    </div>
                                                </div>
                                            </div>
                </div> <!-- end row -->
            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
    @endsection
    @section('style')
            <script src="{{asset('admin')}}/ckeditor/ckeditor.js"></script>
    @endsection
    @section('script')
                <script>
                $(document).ready(function(){


                    $("#make_select").change(function(){
                       make=$("#make_select").val();
           $.ajax({
               type:'GET',
               url:"{{route('make_model_select')}}",
               data:{
                   make:make
               },
               success:function (models){
        $(".model_select").html(models);
               }
           })
                    });
                });
            </script>
      {{--  next click--}}
            <script>
                $(document).ready(function(){

                    $("#next").click(function(e){
                        var input1= document.querySelector('#car_name');
                        var input2= document.querySelector('#car_price');
                        var input3= document.querySelector('#motor_size');
                        var input4= document.querySelector('#start_production_year');
                        var input5= document.querySelector('#used_km');
                        var input6= document.querySelector('#fuel_type_id');
                        var input7= document.querySelector('#gear_box_id');
                        var input8= document.querySelector('#city_id');
                        var input9= document.querySelector('#gear_box_id');
                        var input10= document.querySelector('#gear_box_id');
                        var input11= document.querySelector('#gear_box_id');

                        if(input1.value=="" and ){
                            input1.addClass('form-control is-invalid')
                            e.preventDefault();


                        }else{
                            $.ajax({
                                type:'POST',
                                url: "{{route('cars_added')}}",
                                //  url:'http://127.0.0.1:8000/back/attributes',
                                data:$('#cars_form').serialize(),
                                success:function (e){
                                    $("#car_id_hidden").val(e.car_id);
                                }
                            });
                            $('#car_part').addClass('d-none');
                            $("#car_part_form").removeClass('d-none');
                        }



                    });
                });
            </script>
{{--checkboxes--}}
<script>
            $(document).ready(function(){
            $('.slectOne').on('change', function() {
            $('.slectOne').not(this).prop('checked', false);
            $('#result').html($(this).data( "id" ));
            if($(this).is(":checked"))
            $('#result').html($(this).data( "id" ));
            else
            $('#result').html('Empty...!');
            });
            });
</script>

   {{-- cars add script --}}

{{--            <script>
                $( document ).ready(function() {
                    var button = document.querySelector('#cars_click')
                    button.addEventListener('click', function (e){
                        e.preventDefault();
                        $.ajax({
                            type:'POST',
                            url: "{{route('cars_added')}}",
                            //  url:'http://127.0.0.1:8000/back/attributes',
                            data:$('#cars_form').serialize(),
                            success:function (e){
                                $("#car_id_hidden").val(e.car_id);
                            }
                        });
                    })

                });
            </script>--}}
    <script>
        $(document).ready(function (){

            $("#car_part_click").click(function (){
                Right_Rear_Fender=$("#Right_Rear_Fender").val();
                Left_Rear_Fender=$("#Left_Rear_Fender").val();
                Right_Rear_Door=$("#Right_Rear_Door").val();
                Right_Front_Door=$("#Right_Front_Door").val();
                Left_Rear_Door=$("#Left_Rear_Door").val();
                Left_Front_Door=$("#Left_Front_Door").val();
                Ceiling=$("#Ceiling").val();


                Right_Front_Fender=$("#Right_Front_Fender").val();
                Engine_bonnet=$("#Engine_bonnet").val();
                Left_Front_Fender=$("#Left_Front_Fender").val();
                Front_bumper=$("#Front_bumper").val();
                Rear_Hood=$("#Rear_Hood").val();
                Rear_Bumper=$("#Rear_Bumper").val();
             $.ajax({
             type:'POST',
              url:"{{route('cars_part_added')}}",
              data:{
                  Right_Rear_Fender:Right_Rear_Fender,
                  Left_Rear_Fender:Left_Rear_Fender,
                  Right_Rear_Door:Right_Rear_Door,
                  Right_Front_Door:Right_Front_Door,
                  Ceiling:Ceiling,
                  Left_Rear_Door:Left_Rear_Door,
                  Left_Front_Door:Left_Front_Door,
                  Right_Front_Fender:Right_Front_Fender,
                  Engine_bonnet:Engine_bonnet,
                  Left_Front_Fender:Left_Front_Fender,
                  Front_bumper:Front_bumper,
                  Rear_Hood:Rear_Hood,
                  Rear_Bumper:Rear_Bumper,
                  "_token": "{{ csrf_token() }}"
              },
              success:function (e){

              }
          })

            });

        });
    </script>
@endsection

