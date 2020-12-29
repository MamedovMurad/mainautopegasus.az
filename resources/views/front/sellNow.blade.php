@extends('front.Layout.master')
@section('content')


<section class="header-banner-service" style="background-image: url('{{asset('/front/autima/')}}/assets/img/fast-sell/2.png')">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="service-title" style="display: flex; justify-content:flex-end">
                    <h2>Elə İNDİSAT <span>   <img src="{{asset('/front/autima/')}}/assets/img/fast-sell/banner-logo.png"</span></h2>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mt-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
             <h4>Avtomobilini İndiSat!</h4>
             <p> Anketimizi doldurun və avtomobilinizə qiymət təklifini ən qısa zamanda və əziyyətsiz alın.</p>
            </div>
            <div class="col-lg-3">
                <hr>
                <ul class=" tab-link-indisat ">
                    <li onclick="openCity(event, 'melumat','image')" class=" indi-sat-default active-indiSat "> <span>1</span> Avtomobilinizin Məlumatı </li>
                    <li class="indi-sat-default "  onclick="openCity(event, 'techizat','image')"> <span >2</span>Avtomobilin Təchizatı   </li>
                    <li class="indi-sat-default " onclick="openCity(event, 'veziyyet','image')"> <span>3</span>Avtomobilin Vəziyyəti  </li>
                    <li class="indi-sat-default " onclick="openCity(event, 'teklifal','image')"><span>4</span>Təklif Al</li>
                </ul>
            </div>


            <div class="col-lg-9">
                <div class="indisat-component mt-3 tabcontent" id="melumat">
                   <div class="row">
                    <form >
                     <div class="row">
                        <div class="mb-4 col-lg-4">
                          <label for="make" class="form-label">Marka</label>
                          <select type="text" class="form-select" id="make" >
                              <option value="">Audi</option>
                              <option value="">chevralet</option>
                              <option value="">Volvo</option>
                              <select>

                        </div>
                        <div class="mb-4 col-lg-4">
                          <label for="model" class="form-label">Model</label>
                          <select type="text" class="form-select" id="model">
                              <option value="">A5</option>
                              <option value="">Cruze</option>
                              <option value="">Santafe</option>
                            <select>
                        </div>
                        <div class="mb-4 col-lg-4">
                            <label for="year" class="form-label">Buraxılış ili</label>
                            <input type="date" class="form-control" id="year" >

                          </div>
                          <div class="mb-4 col-lg-4">
                            <label for="Transmission" class="form-label">Sürətlər qutusu</label>
                            <select type="text" class="form-select" id="Transmission">
                        <option value="">Avtomatika</option>
                    <option value="">Mexanika</option>
                                                </select>
                          </div>
                          <div class="mb-4 col-lg-4">
                            <label for="Mileage" class="form-label">Yürüş, km</label>
                            <input type="number" class="form-control" id="Mileage">
                          </div>

                          <div class="mb-4 col-lg-4">
                            <label for="Owner" class="form-label">Yanacaq Növü</label>
                            <select type="number" class="form-select" id="Owner">
                                <option value="">Benzin</option>
                                <option value="">Dizel</option>
                                <option value="">Qaz</option>
                            </select>
                          </div>


                          <div class="mb-4 col-lg-4">
                            <label for="color" class="form-label">Rəng</label>
                            <select type="text" class="form-select" id="color">
                                <option value="">Ağ</option>
                                <option value="">Qara</option>
                                <option value="">Qırmızı</option>
                            </select>
                          </div>

                          <div class="mb-3 col-lg-4">
                            <label for="Ban" class="form-label">Ban Növü</label>
                            <select type="number" class="form-select" id="Ban">
                                <option value="">
                                    Sedan
                                </option>
                            </select>
                          </div>
                          <div class="mb-4 .col-lg-12">
                            <div class="panel panel-primary" >
                                <div class="panel-heading">
                                    <h3 class="panel-title">Avtomobilin fotolarını yükləyin.</h3>
                                </div>
                                <div class="panel-body">
                                 <div class="row ">
                                    <div class="col-md-8">
                                        <div class="form-group  ">
                                            <input type="file" class="form-control datepicker" placeholder="Pick the date">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <button class="btn  add_field_button" style="background: rgba(87, 167, 179, 1);color:white">+ daha çox</button>
                                    </div>
                                    <div class="input_fields_wrap">

                                    </div>
                                 </div>

                                </div>
                            </div>
                          </div>


                        <button type="submit" class="btn" style="  background-color: rgba(205, 0, 0, 1); color:white ">Davam et</button>
                    </div>
                    </form>
                </div>
            </div>


            <div class="indisat-component mt-3 tabcontent" id="techizat">

                 <form >

                 </form>

         </div>

         <div class="indisat-component mt-3 tabcontent" id="veziyyet">
            <div class="row">
             <form >

             </form>
         </div>
     </div>

     <div class="indisat-component mt-3 tabcontent" id="teklifal">
        <div class="row">
         <form >

         </form>
     </div>
 </div>
        </div>
    </div>
</section>

@include('front.widget.indi_sat_footer')

@section('script')
<script>
    $(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID

    var x = 1; //initlal text box count
    $('.add_field_button').click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){
            //max input box allowed
            x++; //text box increment
            $(wrapper).append(' <div class="removeMe row"> <div class="col-md-8 ">'+
                                        '<div class="form-group  ">'+
                                          '  <input type="file" class="form-control datepicker " placeholder="Pick the date">'+
                                        '</div>'+' </div>'+
                                    '<div class="col-md-4">'+
                                       ' <button class="btn remove-date add_field_button" style="width:48%;background-color: rgba(205, 0, 0, 1);color:white"> Sil</button>'+
                                    '</div></div>'); //add input box
        }
    });

    $(wrapper).on("click",".remove-date", function(e){ //user click on remove text
        e.preventDefault(); $(this).closest('div.removeMe').remove(); x--;
    })
});
</script>
<script>

    function openCity(evt, cityName) {

      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("indi-sat-default");



      for (i = 0; i < tablinks.length; i++) {

        tablinks[i].className = tablinks[i].className.replace("active-indiSat", "");

         }

      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += "active-indiSat";




    }
    </script>
@endsection
@endsection
