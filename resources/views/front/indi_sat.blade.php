
    @extends('front.Layout.master')
    @section('content')



@section('css')




@endsection

@section('script')
<style>
a{
    justify-content: space-between
}
</style>


<script>
    $(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID

    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div class="input-line-control removeMe mt-2" style="display:flex; justify-content: space-between "><div class="col-md-10"><div class="form-group"><input type="file" class="form-control datepicker" placeholder="Pick the date"></div></div><div class="col-md-2"><button style="padding:10px;margin-left:10px" class="btn btn-danger remove-date " ><i class="fa fa-remove"></i> sil</button></div></div>'); //add input box
        }
    });

    $(wrapper).on("click",".remove-date", function(e){ //user click on remove text
        e.preventDefault(); $(this).closest('div.removeMe').remove(); x--;
    })
});
</script>
<script type="text/javascript">
    Dropzone.options.dropzone =
        {
            maxFilesize: 12,
            renameFile: function(file) {
                var dt = new Date();
                var time = dt.getTime();
                return time+file.name;
            },
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            timeout: 5000,
            addRemoveLinks: true,
            removedfile: function(file)
            {
                var name = file.upload.filename;
                $.ajax({
                    headers: {'XSRF-TOKEN': $('meta[name="_token"]').attr('content')},

                    type: 'POST',

                    data: {filename: name},
                    success: function (data){
                        console.log("File deleted successfully!!");
                    },
                    error: function(e) {
                        console.log(e);
                    }});
                var fileRef;
                return (fileRef = file.previewElement) != null ?
                    fileRef.parentNode.removeChild(file.previewElement) : void 0;
            },
            success: function(file, response)
            {
                console.log(response);
            },
            error: function(file, response)
            {
                return false;
            }
        };
</script>


@endsection



    <!--slider area start-->
    <section class="slider_section mt-20 mb-20">
        <div class="container">
         {{--    <div class="row">
                <div class="col-lg-3 col-md-12">
                    <div class="categories_menu">
                        <div class="categories_title">
                            <h2 class="categori_toggle">Browse categories</h2>
                        </div>
                        <div class="categories_menu_toggle">
                            <ul>
                                <li class="menu_item_children categorie_list"><a href="#">Brake Parts <i class="fa fa-angle-right"></i></a>
                                    <ul class="categories_mega_menu">
                                        <li class="menu_item_children"><a href="#">Wheel Bearings</a>
                                            <ul class="categorie_sub_menu">
                                                <li><a href="#">Bower</a></li>
                                                <li><a href="#">Flipbac</a></li>
                                                <li><a href="#">Gary Fong</a></li>
                                                <li><a href="#">GigaPan</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu_item_children"><a href="#">Wheel Rim Screws</a>
                                            <ul class="categorie_sub_menu">
                                                <li><a href="#">Accessories</a></li>
                                                <li><a href="#">2-Stroke</a></li>
                                                <li><a href="#">Handbag</a></li>
                                                <li><a href="#">Clothing</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu_item_children last_child"><a href="#">Wheel Simulators</a>
                                            <ul class="categorie_sub_menu">
                                                <li><a href="#">Bags & Cases</a></li>
                                                <li><a href="#">Binoculars & Scopes</a></li>
                                                <li><a href="#">Film Photography</a></li>
                                                <li><a href="#">Lighting & Studio</a></li>
                                            </ul>
                                            <div class="categorie_banner">
                                                <a href="#"><img src="{{asset('/front/autima/')}}/assets/img/bg/banner2.jpg" alt=""></a>
                                            </div>
                                        </li>

                                    </ul>
                                </li>
                                <li class="menu_item_children"><a href="#"> Wheels & Tires <i class="fa fa-angle-right"></i></a>
                                    <ul class="categories_mega_menu">
                                        <li class="menu_item_children"><a href="#">Dresses</a>
                                            <div class="categorie_sub_menu">
                                                <ul>
                                                    <li><a href="#">Sweater</a></li>
                                                    <li><a href="#">Evening</a></li>
                                                    <li><a href="#">Day</a></li>
                                                    <li><a href="#">Sports</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="menu_item_children"><a href="#">Handbags</a>
                                            <div class="categorie_sub_menu">
                                                <ul>
                                                    <li><a href="#">Shoulder</a></li>
                                                    <li><a href="#">Satchels</a></li>
                                                    <li><a href="#">kids</a></li>
                                                    <li><a href="#">coats</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="menu_item_children"><a href="#">shoes</a>
                                            <div class="categorie_sub_menu">
                                                <ul>
                                                    <li><a href="#">Ankle Boots</a></li>
                                                    <li><a href="#">Clog sandals </a></li>
                                                    <li><a href="#">run</a></li>
                                                    <li><a href="#">Books</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="menu_item_children"><a href="#">Clothing</a>
                                            <div class="categorie_sub_menu">
                                                <ul>
                                                    <li><a href="#">Coats Jackets </a></li>
                                                    <li><a href="#">Raincoats</a></li>
                                                    <li><a href="#">Jackets</a></li>
                                                    <li><a href="#">T-shirts</a></li>
                                                </ul>
                                            </div>
                                        </li>

                                    </ul>
                                </li>
                                <li class="menu_item_children"><a href="#"> Furnitured & Decor <i class="fa fa-angle-right"></i></a>
                                    <ul class="categories_mega_menu column_3">
                                        <li class="menu_item_children"><a href="#">Chair</a>
                                            <div class="categorie_sub_menu">
                                                <ul>
                                                    <li><a href="#">Dining room</a></li>
                                                    <li><a href="#">bedroom</a></li>
                                                    <li><a href="#"> Home & Office</a></li>
                                                    <li><a href="#">living room</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="menu_item_children"><a href="#">Lighting</a>
                                            <div class="categorie_sub_menu">
                                                <ul>
                                                    <li><a href="#">Ceiling Lighting</a></li>
                                                    <li><a href="#">Wall Lighting</a></li>
                                                    <li><a href="#">Outdoor Lighting</a></li>
                                                    <li><a href="#">Smart Lighting</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="menu_item_children"><a href="#">Sofa</a>
                                            <div class="categorie_sub_menu">
                                                <ul>
                                                    <li><a href="#">Fabric Sofas</a></li>
                                                    <li><a href="#">Leather Sofas</a></li>
                                                    <li><a href="#">Corner Sofas</a></li>
                                                    <li><a href="#">Sofa Beds</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu_item_children"><a href="#"> Turbo System <i class="fa fa-angle-right"></i></a>
                                    <ul class="categories_mega_menu column_2">
                                        <li class="menu_item_children"><a href="#">Brake Tools</a>
                                            <div class="categorie_sub_menu">
                                                <ul>
                                                    <li><a href="#">Driveshafts</a></li>
                                                    <li><a href="#">Spools</a></li>
                                                    <li><a href="#">Diesel </a></li>
                                                    <li><a href="#">Gasoline</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="menu_item_children"><a href="#">Emergency Brake</a>
                                            <div class="categorie_sub_menu">
                                                <ul>
                                                    <li><a href="#">Dolls for Girls</a></li>
                                                    <li><a href="#">Girls' Learning Toys</a></li>
                                                    <li><a href="#">Arts and Crafts for Girls</a></li>
                                                    <li><a href="#">Video Games for Girls</a></li>
                                                </ul>
                                            </div>
                                        </li>

                                    </ul>
                                </li>
                                <li class="menu_item_children"><a href="#"> Lighting <i class="fa fa-angle-right"></i></a>
                                    <ul class="categories_mega_menu column_2">
                                        <li class="menu_item_children"><a href="#">Check Trousers</a>
                                            <div class="categorie_sub_menu">
                                                <ul>
                                                    <li><a href="#">Building</a></li>
                                                    <li><a href="#">Electronics</a></li>
                                                    <li><a href="#">action figures </a></li>
                                                    <li><a href="#">specialty & boutique toy</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="menu_item_children"><a href="#">Calculators</a>
                                            <div class="categorie_sub_menu">
                                                <ul>
                                                    <li><a href="#">Dolls for Girls</a></li>
                                                    <li><a href="#">Girls' Learning Toys</a></li>
                                                    <li><a href="#">Arts and Crafts for Girls</a></li>
                                                    <li><a href="#">Video Games for Girls</a></li>
                                                </ul>
                                            </div>
                                        </li>

                                    </ul>
                                </li>
                                <li><a href="#"> Accessories</a></li>
                                <li><a href="#">Body Parts</a></li>
                                <li><a href="#">Perfomance Filters</a></li>
                                <li><a href="#"> Engine Parts</a></li>
                                <li class="hidden"><a href="shop-left-sidebar.html">New Sofas</a></li>
                                <li class="hidden"><a href="shop-left-sidebar.html">Sleight Sofas</a></li>
                                <li><a href="#" id="more-btn"><i class="fa fa-plus" aria-hidden="true"></i> More Categories</a></li>
                            </ul>
                        </div>
                    </div>
                </div> --}}
                <div class="col-lg-12 col-md-12">
                    <div class="slider_area owl-carousel">
                        <div class="single_slider d-flex align-items-center" data-bgimg="{{asset('/front/autima/')}}/assets/img/auto-logo/banner4.png">
                            <div class="slider_content">
                               {{--  <h2>Top Quality</h2>
                                <h1>Aftermarket Turbocharger Specialist</h1> --}}
                                {{-- <a class="button" href="shop.html">shopping now</a> --}}
                            </div>

                        </div>
                        <div class="single_slider d-flex align-items-center" data-bgimg="{{asset('/front/autima/')}}/assets/img/auto-logo/banner3.png">
                            <div class="slider_content">
                            {{--     <h2>Height - Quality</h2>
                                <h1>The Parts Of shock Absorbers & Brake Kit</h1> --}}
                               {{--  <a class="button" href="shop.html">shopping now</a> --}}
                            </div>
                        </div>
                        <div class="single_slider d-flex align-items-center" data-bgimg="{{asset('/front/autima/')}}/assets/img/auto-logo/banner2.png">
                            <div class="slider_content">
                                {{-- <h2>Engine Oils</h2>
                                <h1>Top Quality Oil For Every Vehicle</h1> --}}
                               {{--  <a class="button" href="shop.html">shopping now</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
<div class="container" >
    <div class="row">
        <div class="col-lg-3">

    <h2>
    Elə İNDİSAT!
        </h2>
    <p class="desc">Avtomobilinizi sürət, sərfəli qiymətlə və əziyyətsiz satın.
     "İndiSat!" sizlər üçün hazırladığımız Azərbaycanın ən müasir ikinci əl avtomobil satış sistemidir.</p>


        </div>

            <div class="col-lg-9 col-md-12">

                <div class="product_d_info sidebar">
                    <div class="product_d_inner ">
                        <div class="product_info_button">
                            <ul class="nav" role="tablist" style="padding: 0">
<style>
    .nav>li{
        width: 176px;
    }
</style>
                                <li>
                                    <a class="active" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false" >Avtomobilinizin Məlumatı</a>
                                </li>
                                <li>
                                    <a  data-toggle="tab" href="#avto" role="tab" aria-controls="avto" aria-selected="false" > Avtomobilin Təchizatı</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#sheet" role="tab" aria-controls="sheet" aria-selected="false" >Avtomobilin vəziyyəti</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false" >Təklif al</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="info" role="tabpanel">
                                <div class="product_info_content">
                                    <form >
                                        <div class="row">
                                        <div class="mb-3 col-lg-4">
                                          <label for="make" class="form-label">Marka</label>
                                          <select type="text" class="form-select" id="make" >
                                              <option value="">Audi</option>
                                              <option value="">chevralet</option>
                                              <option value="">Volvo</option>
                                              <select>

                                        </div>
                                        <div class="mb-3 col-lg-4">
                                          <label for="model" class="form-label">Model</label>
                                          <select type="text" class="form-select" id="model">
                                              <option value="">A5</option>
                                              <option value="">Cruze</option>
                                              <option value="">Santafe</option>
                                            <select>
                                        </div>
                                        <div class="mb-3 col-lg-4">
                                            <label for="year" class="form-label">Buraxılış ili</label>
                                            <input type="date" class="form-control" id="year" >

                                          </div>
                                          <div class="mb-3 col-lg-4">
                                            <label for="Transmission" class="form-label">Sürətlər qutusu</label>
                                            <select type="text" class="form-select" id="Transmission">
<option value="">Avtomatika</option>
<option value="">Mexanika</option>
                                            </select>
                                          </div>
                                          <div class="mb-3 col-lg-4">
                                            <label for="Mileage" class="form-label">Yürüş, km</label>
                                            <input type="number" class="form-control" id="Mileage">
                                          </div>

                                          <div class="mb-3 col-lg-4">
                                            <label for="Owner" class="form-label">Yanacaq Növü</label>
                                            <select type="number" class="form-select" id="Owner">
                                                <option value="">Benzin</option>
                                                <option value="">Dizel</option>
                                                <option value="">Qaz</option>
                                            </select>
                                          </div>


                                          <div class="mb-3 col-lg-4">
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
                                          <div class="mb-3 .col-lg-12">
                                            <div class="panel panel-primary" >
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">Avtomobilin fotolarını yükləyin.</h3>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <input type="file" class="form-control datepicker" placeholder="Pick the date">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <button class="btn btn-primary add_field_button"><i class="fa fa-plus"></i> daha çox</button>
                                                    </div>
                                                    <div class="input_fields_wrap">
                                                        <!-- Dynamic Fields go here -->
                                                    </div>
                                                </div>
                                            </div>
                                          </div>


                                        <button type="submit" class="btn btn-primary">Davam et</button>
                                    </div>
                                    </form>
                                    <form method="POST" action="{{route('cars_add')}}" enctype="multipart/form-data"
                                    class="dropzone" id="dropzone">
                                  @csrf
                                  <input type="hidden" id="car_id_drop" value="" name="car_id_drop">

                              </form>

                                    </div>
                            </div>
                            <div class="tab-pane fade" id="sheet" role="tabpanel">

                                <div class="product_info_content" style="height: 500px">
                              <div class="row">
                                  <div class="col-lg-6">
                                    <form action="">
                                        <style>
                                            p.form-control{
                                                display: flex;
                                                justify-content: space-between;
                                                margin: 0;
                                                padding: 0;
                                            }
                                            p.form-control>span>input{
                                                margin-left: 35px
                                            }
                                          p.form-control>span:nth-child(2){
                                            margin-left: 10px
                                          }
                                          .deger{

                                              font-size: 14px;
                                          }

                                        </style>
                                        <p class="form-control"><span></span><span class="deger">Orijinal  Rəngli  Dəyişdirilib</span></p>
<p class="form-control">
    <span>Sağ arxa qanad</span>
    <span> <input class="form-check-input" type="radio" value="" name="saq-arka-camurluk"  id="saq-arka-camurluk">
        <input class="form-check-input" type="radio" value="" name="saq-arka-camurluk" id="saq-arka-camurluk">
        <input class="form-check-input" type="radio" value="" name="saq-arka-camurluk" id="saq-arka-camurluk"></span>
</p>
     <p class="form-control"><span>Arxa kapot</span>
      <span>
        <input class="form-check-input" type="radio" value="" name="arka-kaput"  id="saq-arka-camurluk">
        <input class="form-check-input" type="radio" value="" name="arka-kaputk" id="saq-arka-camurluk">
        <input class="form-check-input" type="radio" value="" name="arka-kaput" id="saq-arka-camurluk"></span></p>
        <p class="form-control"><span>Sol arxa qanad</span>
         <span>
            <input class="form-check-input" type="radio" value="" name="sol-arka-camurluk"  id="saq-arka-camurluk">
            <input class="form-check-input" type="radio" value="" name="sol-arka-camurluk" id="saq-arka-camurluk">
            <input class="form-check-input" type="radio" value="" name="sol-arka-camurluk" id="saq-arka-camurluk"></span></p>
            <p class="form-control"><span>Sağ arxa qapı</span>
           <span>     <input class="form-check-input" type="radio" value="" name="saq-arka-camurluk"  id="saq-arka-camurluk">
            <input class="form-check-input" type="radio" value="" name="saq-arka-camurluk" id="saq-arka-camurluk">
            <input class="form-check-input" type="radio" value="" name="saq-arka-camurluk" id="saq-arka-camurluk"></span></p>
            <p class="form-control"><span>Sağ ön qapı</span>
                <span>     <input class="form-check-input" type="radio" value="" name="saq-arka-camurluk"  id="saq-arka-camurluk">
                 <input class="form-check-input" type="radio" value="" name="saq-arka-camurluk" id="saq-arka-camurluk">
                 <input class="form-check-input" type="radio" value="" name="saq-arka-camurluk" id="saq-arka-camurluk"></span></p>
                 <p class="form-control"><span>Dam</span>
                    <span>     <input class="form-check-input" type="radio" value="" name="saq-arka-camurluk"  id="saq-arka-camurluk">
                     <input class="form-check-input" type="radio" value="" name="saq-arka-camurluk" id="saq-arka-camurluk">
                     <input class="form-check-input" type="radio" value="" name="saq-arka-camurluk" id="saq-arka-camurluk"></span></p>
                     <p class="form-control"><span>Sol arxa qapı</span>
                        <span>     <input class="form-check-input" type="radio" value="" name="saq-arka-camurluk"  id="saq-arka-camurluk">
                         <input class="form-check-input" type="radio" value="" name="saq-arka-camurluk" id="saq-arka-camurluk">
                         <input class="form-check-input" type="radio" value="" name="saq-arka-camurluk" id="saq-arka-camurluk"></span></p>
                         <p class="form-control"><span>Sol ön qapı</span>
                            <span>     <input class="form-check-input" type="radio" value="" name="saq-arka-camurluk"  id="saq-arka-camurluk">
                             <input class="form-check-input" type="radio" value="" name="saq-arka-camurluk" id="saq-arka-camurluk">
                             <input class="form-check-input" type="radio" value="" name="saq-arka-camurluk" id="saq-arka-camurluk"></span></p>
                             <p class="form-control"><span>Sağ ön qanad</span>
                                <span>     <input class="form-check-input" type="radio" value="" name="saq-arka-camurluk"  id="saq-arka-camurluk">
                                 <input class="form-check-input" type="radio" value="" name="saq-arka-camurluk" id="saq-arka-camurluk">
                                 <input class="form-check-input" type="radio" value="" name="saq-arka-camurluk" id="saq-arka-camurluk"></span></p>
                                 <p class="form-control"><span>Ön kapot</span>
                                    <span>     <input class="form-check-input" type="radio" value="" name="saq-arka-camurluk"  id="saq-arka-camurluk">
                                     <input class="form-check-input" type="radio" value="" name="saq-arka-camurluk" id="saq-arka-camurluk">
                                     <input class="form-check-input" type="radio" value="" name="saq-arka-camurluk" id="saq-arka-camurluk"></span></p>
                                     <p class="form-control"><span>Sol ön qanad</span>
                                        <span>     <input class="form-check-input" type="radio" value="" name="saq-arka-camurluk"  id="saq-arka-camurluk">
                                 <input class="form-check-input" type="radio" value="" name="saq-arka-camurluk" id="saq-arka-camurluk">
                                         <input class="form-check-input" type="radio" value="" name="saq-arka-camurluk" id="saq-arka-camurluk"></span></p>
                               <p class="form-control"><span>Ön bufer</span>
                                            <span>     <input class="form-check-input" type="radio" value="" name="saq-arka-camurluk"  id="saq-arka-camurluk">
                                  <input class="form-check-input" type="radio" value="" name="saq-arka-camurluk" id="saq-arka-camurluk">
                                             <input class="form-check-input" type="radio" value="" name="saq-arka-camurluk" id="saq-arka-camurluk"></span></p>
                                   <p class="form-control"><span>Arxa bufer</span>
                                                <span>     <input class="form-check-input" type="radio" value="" name="saq-arka-camurluk"  id="saq-arka-camurluk">
                                      <input class="form-check-input" type="radio" value="" name="saq-arka-camurluk" id="saq-arka-camurluk">
                                                 <input class="form-check-input" type="radio" value="" name="saq-arka-camurluk" id="saq-arka-camurluk"></span></p>
                                    </form>
                                  </div>
                                  <div class="col-lg-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="92.295mm" height="100.01mm" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                    viewBox="0 0 4898.45 5271.54"
                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <defs>
                                    <style type="text/css">
                                    <![CDATA[
                                        .fil1 {fill:#B3B3B3}
                                        .fil0 {fill:#B3B3B3;fill-rule:nonzero}
                                    ]]>
                                    </style>
                                    </defs>
                                    <g id="Слой_x0020_1">
                                    <metadata id="CorelCorpID_0Corel-Layer"/>
                                    <path class="fil0" d="M2220.74 4378.3c100.2,0 360.91,-14.66 446.07,0.03 176.17,4.5 325.99,-22.93 443.37,-89.58 117,-66.44 201.99,-172.08 248.93,-324.19 27.41,-88.83 27.1,-145.35 26.66,-228.43l-0.15 -34.81 0 -711.79c0,-35.46 -0.97,-58.73 -4.15,-81.47 -3.2,-22.85 -8.65,-45.51 -17.59,-79.59l-0.15 -0.81c-5.33,-41.4 -9.43,-76.91 -12.15,-112.19 -2.75,-35.65 -4.18,-71.33 -4.18,-112.85l0 -1047.38 20.42 14.67c46.21,33.26 107.18,77.15 148.64,80.86 11.36,1.02 19.36,-0.48 24.84,-3.47 6.07,-3.32 9.14,-8.74 10.41,-14.51 6.62,-29.98 -5.15,-58.48 -25.13,-84.72 -20.62,-27.07 -49.92,-51.77 -77.22,-73.35l-101.96 -76.69 0 -837.3c0,-88.67 -10.71,-154.79 -41.17,-211.33 -30.49,-56.6 -80.97,-104.09 -160.49,-155.5 -113.99,-73.7 -224.45,-116.29 -338.81,-140.45 -114.5,-24.19 -233.13,-29.92 -363.24,-29.92 -130.1,0 -248.74,5.74 -363.24,29.92 -114.36,24.16 -224.82,66.75 -338.82,140.45 -79.52,51.41 -130,98.9 -160.49,155.5 -30.46,56.54 -41.17,122.65 -41.17,211.33l0 837.3 -101.96 76.69c-27.3,21.59 -56.61,46.29 -77.22,73.35 -19.98,26.24 -31.75,54.74 -25.13,84.72 1.28,5.76 4.34,11.19 10.41,14.51 5.49,2.99 13.48,4.49 24.84,3.47 41.46,-3.71 102.43,-47.6 148.64,-80.86l20.43 -14.67 0 1040.58c0,16.51 0.23,30.43 0.45,44.15 0.99,60.35 1.92,117.11 -14.64,178.3 -7.07,26.14 -13.11,49.64 -17.34,74.32 -4.22,24.57 -6.69,50.51 -6.69,81.66 0,262.12 0.67,524.32 -0.04,786.43 -0.09,66.42 -0.15,106.36 18.45,175.69 43.62,162.59 127.97,275.36 246.52,346.25 118.9,71.1 272.4,100.35 453.89,95.72l0.15 -0.03zm825.3 -44.47l0 60.94c0,14.87 -6.07,28.86 -15.85,39.44 -9.77,10.56 -23.27,17.73 -38.14,18.93l-20.69 1.69c-1.51,0.12 -3,0.18 -4.43,0.18 -13.33,0 -25.39,-4.96 -34.4,-13.24 -9,-8.27 -14.93,-19.88 -16.01,-33.15 -0.12,-1.48 -0.18,-2.93 -0.18,-4.36l0 -32.16c-75.94,15.29 -159.42,21.32 -249.68,19.02l-167.32 0.02 -278.6 0c-183.8,4.65 -339.56,-25.16 -460.62,-97.55 -121.45,-72.62 -207.8,-187.9 -252.34,-353.92 -19,-70.83 -18.94,-111.45 -18.85,-179 0.27,-262.14 -0.01,-524.29 -0.01,-786.43 0,-31.85 2.55,-58.49 6.9,-83.82 4.33,-25.25 10.44,-49.05 17.59,-75.47 16.12,-59.59 15.21,-115.43 14.24,-174.79 -0.25,-15.28 -0.5,-30.81 -0.5,-44.35l0 -1015.6 -0.1 0.07c-47.43,34.13 -110.01,79.18 -155.02,83.21 -14.12,1.27 -24.51,-0.86 -32.06,-4.98 -9.86,-5.39 -14.78,-13.94 -16.78,-22.98 -7.58,-34.33 5.35,-66.24 27.44,-95.26 21.44,-28.15 51.58,-53.56 79.61,-75.71l96.91 -72.9 0 -830.95c0,-90.78 11.12,-158.73 42.72,-217.4 31.58,-58.61 83.42,-107.5 164.86,-160.16 115.48,-74.66 227.34,-117.8 343.13,-142.26 115.64,-24.43 235.04,-30.22 365.85,-30.22 130.81,0 250.2,5.8 365.84,30.22 115.78,24.46 227.64,67.6 343.13,142.26 81.44,52.65 133.28,101.55 164.86,160.16 31.6,58.67 42.72,126.62 42.72,217.4l0 830.95 96.91 72.9c28.03,22.15 58.17,47.57 79.61,75.71 22.1,29.01 35.03,60.93 27.44,95.26 -2,9.04 -6.92,17.6 -16.78,22.98 -7.55,4.12 -17.95,6.24 -32.06,4.98 -45.01,-4.04 -107.59,-49.08 -155.02,-83.21l-0.1 -0.07 0 1022.4c0,41.32 1.41,76.68 4.13,111.89 2.74,35.44 6.76,70.51 11.98,111.08 9.02,34.39 14.54,57.34 17.81,80.71 3.3,23.58 4.3,47.32 4.3,83.22l0 711.79 0.1 34.76c0.44,84.26 0.75,141.58 -27.22,232.24 -47.98,155.46 -134.99,263.5 -254.85,331.57 -22.36,12.7 -45.86,23.99 -70.46,33.94zm-116.86 35.59l0 34.84 0.13 3.35c0.81,9.93 5.21,18.58 11.9,24.73 6.69,6.14 15.7,9.83 25.72,9.83l3.37 -0.14 20.74 -1.69c11.57,-0.93 22.11,-6.55 29.77,-14.82 7.64,-8.26 12.39,-19.19 12.39,-30.76l0 -55.9c-32.82,12.46 -67.53,22.61 -104.02,30.56z"/>
                                    <path class="fil0" d="M1903.96 3333.24l-101.76 205.22c-4.43,11.29 -6.07,21.32 -4.59,29.91 1.42,8.23 5.86,15.34 13.65,21.18 46.24,34.65 334.69,52.54 625.41,53.63 296.02,1.11 593.47,-15.19 639.17,-48.9 8.91,-6.58 14.4,-16.41 14.49,-31.33 0.1,-16.31 -5.97,-38.47 -20.5,-68.59 -17.23,-33.31 -67.18,-137.15 -76.82,-169.11 -4.82,-15.93 -14.72,-31.74 -31.31,-40.8 -13.37,-7.29 -31.31,-10.33 -54.76,-5.76 -126.3,24.64 -285.16,34.8 -442.21,34.4 -178.89,-0.46 -355.53,-14.66 -479.07,-36.78 -20.51,-3.67 -36.16,2.92 -48.82,13.93 -13.24,11.53 -23.62,28.01 -32.88,43.01zm-113.31 199.68c30.68,-61.88 67.94,-149.57 102.22,-206.08 9.84,-15.93 20.86,-33.5 35.55,-46.27 15.39,-13.36 34.42,-21.34 59.5,-16.85 122.89,22 298.68,36.12 476.82,36.58 156.19,0.4 314.17,-9.7 439.75,-34.2 26.68,-5.2 47.5,-1.52 63.33,7.12 19.87,10.84 31.64,29.35 37.36,47.94l76.27 167.8c15.37,31.9 21.8,55.88 21.67,74.05 -0.12,19.59 -7.59,32.67 -19.69,41.59 -47.94,35.37 -348.56,52.5 -646.77,51.39 -292.96,-1.1 -584.56,-19.83 -633.09,-56.19 -10.57,-7.93 -16.62,-17.75 -18.61,-29.26 -1.9,-11.04 0.07,-23.49 5.48,-37.14l0.2 -0.48z"/>
                                    <path class="fil0" d="M2452.26 1325.21c-216.14,-0.75 -435.14,34.62 -657.13,108.4 -19.81,6.58 -41.87,15.57 -57.2,27.72 -14.04,11.13 -22.27,25.07 -16.83,42.45l141 450.18c6.22,19.87 14.99,41.21 27.09,56.12 11.22,13.84 25.47,22.08 43.44,17.71 166.48,-40.48 335.58,-58.86 506.93,-57.94 171.31,0.93 344.86,21.16 520.26,57.88 15.77,3.3 28.67,-2.39 39.11,-12.83 14.66,-14.66 24.83,-38.46 31.59,-60.87l135.9 -450.18c5.27,-17.47 -2.97,-31.41 -16.98,-42.52 -15.28,-12.12 -37.25,-21.08 -57.06,-27.73 -210.7,-70.75 -424.02,-107.65 -640.11,-108.4zm-661.15 96.26c223.32,-74.21 443.66,-109.8 661.15,-109.05 217.53,0.75 432.22,37.87 644.17,109.05 20.93,7.03 44.26,16.59 60.96,29.84 17.98,14.25 28.43,32.56 21.3,56.21l-135.9 450.18c-7.27,24.11 -18.4,49.9 -34.79,66.3 -13.38,13.38 -30.09,20.62 -50.8,16.29 -174.66,-36.57 -347.36,-56.72 -517.7,-57.64 -170.32,-0.92 -338.39,17.35 -503.87,57.58 -23.77,5.78 -42.18,-4.56 -56.38,-22.07 -13.33,-16.43 -22.78,-39.26 -29.39,-60.39l-141 -450.18c-7.4,-23.63 3.05,-41.99 21.09,-56.29 16.74,-13.26 40.2,-22.86 61.16,-29.83z"/>
                                    <path class="fil0" d="M1761.06 1843.33c29.25,89.98 53.37,187.46 68.12,298.57l0.05 843.66c-1.78,50.52 -22.26,111.16 -53.08,177.36 -30.58,65.68 -71.44,137.1 -114.28,209.6l-11.93 20.2 0 -1831.24 12.29 28.3c35.27,81.24 69.66,163.75 98.84,253.55zm55.35 299.65c-14.62,-109.88 -38.54,-206.44 -67.55,-295.68 -25.71,-79.09 -55.37,-152.33 -86.1,-223.98l0 1722.41c38.22,-65.12 74.18,-129 101.74,-188.22 30.13,-64.72 50.15,-123.67 51.92,-172.17l-0.01 -842.36z"/>
                                    <path class="fil0" d="M3140.32 1847.3c-29.01,89.24 -52.92,185.8 -67.54,295.68l0 842.36c1.75,48.5 21.77,107.46 51.9,172.17 27.56,59.22 63.52,123.11 101.74,188.22l0 -1722.41c-30.73,71.64 -60.39,144.88 -86.1,223.98zm-80.31 294.6c14.74,-111.11 38.87,-208.59 68.12,-298.57 29.19,-89.8 63.57,-172.31 98.84,-253.55l12.29 -28.3 0 1831.24 -11.93 -20.2c-42.85,-72.5 -83.71,-143.91 -114.28,-209.6 -30.82,-66.2 -51.3,-126.84 -53.08,-177.36l0.05 -843.66z"/>
                                    <path class="fil1" d="M1706.42 1386.77l0.01 0c245.76,-77.82 491.52,-118.18 737.27,-118.91 245.76,0.73 491.52,41.09 737.28,118.91l0 0 0 -791.64 -0.03 -1.36c-0.01,-3.8 -0.08,-7.59 -0.2,-11.36 -4.18,-149.05 -81.63,-248.2 -187.65,-312.97 -239.81,-155.91 -858.99,-155.92 -1098.79,0 -106.01,64.78 -183.47,163.92 -187.65,312.97 -0.12,3.77 -0.19,7.56 -0.2,11.36l-0.03 1.36 0 791.64z"/>
                                    <path class="fil1" d="M1903.48 2086.67c360.15,-64.22 720.29,-62.63 1080.44,0 0,351.08 0,702.17 0,1053.25 -360.15,107.36 -720.29,110.09 -1080.44,0 0,-351.08 0,-702.17 0,-1053.25z"/>
                                    <path class="fil1" d="M1705.01 3652.96c487.88,100.77 980.44,98.55 1477.38,0l0 408.5c0,104.33 -85.36,189.69 -189.69,189.69l-1107.62 0c-99.04,0 -180.07,-81.03 -180.07,-180.07 0,-139.37 0,-278.74 0,-418.12z"/>
                                    <path class="fil0" d="M1508.58 4613.16l1861.89 0c40.08,0 76.52,16.39 102.93,42.8 26.4,26.4 42.8,62.84 42.8,102.92l0 366.94c0,40.08 -16.4,76.52 -42.8,102.93 -26.41,26.4 -62.85,42.8 -102.93,42.8l-1861.89 0c-40.08,0 -76.52,-16.39 -102.93,-42.8 -26.4,-26.41 -42.8,-62.85 -42.8,-102.93l0 -366.94c0,-40.08 16.4,-76.52 42.8,-102.92 26.41,-26.41 62.85,-42.8 102.93,-42.8zm1861.89 12.84l-1861.89 0c-36.53,0 -69.76,14.96 -93.84,39.04 -24.08,24.08 -39.03,57.3 -39.03,93.84l0 366.94c0,36.53 14.95,69.75 39.03,93.84 24.09,24.09 57.31,39.04 93.84,39.04l1861.89 0c36.53,0 69.75,-14.95 93.84,-39.04 24.08,-24.09 39.03,-57.31 39.03,-93.84l0 -366.94c0,-36.53 -14.96,-69.76 -39.03,-93.84 -24.09,-24.09 -57.31,-39.04 -93.84,-39.04z"/>
                                    <path class="fil1" d="M1523.06 4661.59l1832.93 0c49.08,0 89.23,40.15 89.23,89.22l0 383.08c0,49.07 -40.15,89.22 -89.23,89.22l-1832.93 0c-49.07,0 -89.22,-40.15 -89.22,-89.22l0 -383.08c0,-49.07 40.15,-89.22 89.22,-89.22zm66.22 71.81l642.15 0c41.11,0 74.75,33.63 74.75,74.75l0 57.76c0,41.11 -33.63,74.75 -74.75,74.75l-642.15 0c-41.11,0 -74.75,-33.63 -74.75,-74.75l0 -57.76c0,-41.11 33.64,-74.75 74.75,-74.75zm1058.35 0l642.15 0c41.11,0 74.75,33.63 74.75,74.75l0 57.76c0,41.11 -33.64,74.75 -74.75,74.75l-642.15 0c-41.11,0 -74.75,-33.63 -74.75,-74.75l0 -57.76c0,-41.11 33.63,-74.75 74.75,-74.75z"/>
                                    <path class="fil0" d="M26.03 179.32l-2.22 193.66 -0.26 11.93c-0.85,32.81 -2.2,84.73 20.8,95.39 12.2,5.65 25.34,4.58 49.14,2.65l0.98 -0.06c55.66,-2.69 107.88,-0.37 155.96,6.95 47.98,7.31 91.92,19.6 131.12,36.86 65.25,28.74 115.13,73.83 149.89,126.5 38.66,58.57 58.62,126.55 60.28,191.84 1.66,65.41 -15.03,128.44 -49.63,185.14 -33.49,54.89 -83.75,103.8 -150.33,143.09 -41.71,24.62 -88.77,44.46 -139.86,58.23 -48.91,13.18 -101.63,20.84 -157.03,21.84l-82.02 0.03 0 1923.79 98.91 0c158.98,-1.99 266.63,40.14 339.09,99.44 110.58,90.52 138.95,220.89 142.8,295.88 0.57,11.2 0.73,22.23 0.48,33.06 -2.56,111.33 -48.3,197.16 -122.96,256.68 -74.25,59.2 -177.08,92.2 -294.31,98.22 -16.89,0.86 -34.14,1.17 -51.69,0.91 0.75,21.15 1.72,42.3 3.55,63.42 1.98,22.96 4.99,45.39 9.87,66.79 24.93,109.27 75,131.56 132.26,157.02 36.28,16.14 75.34,33.51 113.26,73.53 19.13,20.19 31.18,35.31 40.19,46.61 11.25,14.13 17.51,21.96 26.46,25.63 11.76,4.82 30.44,4.08 72.31,2.4 11.19,-0.44 24.05,-0.97 39.3,-1.47 50.06,-1.64 89.18,-6.48 118.52,-14.14 28.47,-7.44 47.42,-17.41 57.98,-29.6l1.77 -2.05 45.19 -2.74c215.22,-12.74 215.87,-12.78 217.74,-301.96 0.67,-106.56 8.32,-116.25 45.25,-163.01 12.28,-15.55 27.96,-35.41 48.13,-65.27 48.8,-72.27 94.66,-150.95 135.48,-240.42 40.83,-89.52 76.71,-189.95 105.55,-305.74 39.58,-158.88 41.44,-260.09 44.26,-414.27l0.51 -27.66c2.11,-110.61 3.8,-224.36 -0.2,-335.38 -3.99,-110.79 -13.66,-218.86 -34.22,-318.32 -6.5,-31.46 -13.46,-61.2 -20.8,-89.45 -7.29,-28.04 -15.03,-54.83 -23.14,-80.53 -48.41,-153.34 -128.55,-304.21 -208.07,-453.91 -82.49,-155.3 -164.35,-309.38 -209.92,-464.53 -26.34,-89.7 -43.66,-183.51 -60.76,-276.2 -4.81,-26.09 -9.61,-52.08 -14.88,-79.34 -23.92,-123.67 -53.43,-268.07 -86.6,-391.94 -32.99,-123.18 -69.47,-225.83 -107.33,-266.76 -19.62,-21.22 -41.71,-36.85 -66.3,-46.71 -24.53,-9.83 -51.68,-13.94 -81.46,-12.16l-301.77 40.69 -89.19 18.77c-51.62,10.86 -51.76,42.68 -51.97,92.82l-0.09 13.82zm-15.01 193.56l2.22 -193.66 0.09 -13.77c0.22,-56.48 0.39,-92.32 62.14,-105.31 129.59,-27.28 260.94,-45.54 392.65,-59.7 31.76,-1.92 60.79,2.49 87.15,13.06 26.35,10.56 49.98,27.26 70.92,49.92 39.52,42.73 76.88,147.23 110.34,272.14 33.27,124.23 62.85,268.93 86.81,392.85 4.89,25.3 9.88,52.34 14.88,79.43 17.04,92.34 34.29,185.81 60.45,274.9 45.16,153.75 126.75,307.34 208.97,462.12 79.79,150.2 160.19,301.56 208.96,456.07 8.06,25.54 15.85,52.51 23.29,81.17 7.4,28.47 14.41,58.44 20.95,90.11 20.71,100.2 30.45,208.97 34.46,320.43 4,111.23 2.32,225.21 0.2,336.04l-0.51 27.66c-2.84,155.14 -4.71,256.97 -44.61,417.13 -29.04,116.58 -65.19,217.76 -106.35,308 -41.19,90.28 -87.37,169.54 -136.48,242.27 -20.15,29.83 -36.17,50.12 -48.72,66.02 -34.67,43.9 -41.85,52.99 -42.5,155.14 -1.95,301.2 -2.63,301.25 -229.78,314.7l-39.89 2.41c-12.49,13.21 -33.01,23.86 -62.59,31.58 -30.22,7.89 -70.28,12.86 -121.34,14.54 -14.65,0.48 -27.77,1.02 -39.19,1.47 -43.78,1.75 -63.32,2.53 -77.68,-3.36 -12.06,-4.95 -19.04,-13.7 -31.63,-29.5 -8.9,-11.17 -20.79,-26.1 -39.42,-45.76 -36.19,-38.19 -74.05,-55.03 -109.21,-70.67 -60.37,-26.85 -113.17,-50.34 -139.53,-165.91 -5.06,-22.19 -8.16,-45.15 -10.17,-68.5 -1.99,-22.96 -2.96,-46.83 -3.78,-70.84l-0.23 -6.75 6.75 0.16c19.45,0.44 38.68,0.18 57.54,-0.78 114.59,-5.88 214.87,-37.96 286.99,-95.47 71.72,-57.18 115.67,-139.73 118.13,-246.89 0.24,-10.43 0.08,-21.16 -0.48,-32.17 -3.73,-72.7 -31.18,-199.05 -138.14,-286.59 -70.4,-57.62 -175.37,-98.54 -330.89,-96.56 -4.38,1.46 -96.8,0.03 -111.83,0.03l0 -1949.48 94.76 0c54.18,-0.97 105.83,-8.49 153.83,-21.42 49.96,-13.47 95.93,-32.84 136.65,-56.88 64.74,-38.21 113.52,-85.62 145.92,-138.72 33.3,-54.57 49.36,-115.23 47.77,-178.17 -1.6,-62.97 -20.86,-128.55 -58.17,-185.07 -33.46,-50.7 -81.5,-94.13 -144.36,-121.82 -38.16,-16.81 -81.01,-28.78 -127.86,-35.92 -47.28,-7.2 -98.6,-9.49 -153.25,-6.86l-0.78 0.07c-25.93,2.11 -40.25,3.27 -55.51,-3.8 -30.65,-14.2 -29.16,-71.27 -28.22,-107.33l0.26 -11.74z"/>
                                    <path class="fil1" d="M853.14 1387.53c-244.21,-84.9 -461.02,-44.42 -687.02,7.21 -1.13,-33.41 -2.26,-66.82 -3.4,-100.23 580.29,-41.36 619.24,-668.79 210.11,-819.03 -70.42,-25.86 -159.27,-41.8 -271.26,-42.27 -2.83,-93.44 -3.97,-203.85 -6.79,-297.29 45.66,8.19 87.18,10.46 125.71,8.45 136.35,-7.12 266.24,-61.11 361.25,26.02 34.76,31.88 61.31,78.63 77.93,131.21 90.28,285.63 147.68,771.92 193.48,1085.92z"/>
                                    <path class="fil1" d="M778.62 1456.65c-193.46,-61.79 -397.14,-57.83 -609.09,-0.75 0,327.31 0,654.6 0,981.91 379.36,-26.66 752.06,-3.44 1104.22,96.83 -7.06,-301.85 -67.42,-604.25 -221.81,-856 -87.18,-142.15 -112.49,-170.62 -273.33,-221.99zm-11.57 75.25c8.67,1.93 11.79,-1.77 11.58,7.34 -3.08,131.8 -13.58,214.88 63.92,231.41 25.72,5.48 97.29,3.63 88.06,-177.13 193.37,230.55 281.16,533.34 302.38,881.68 -89.47,-19.25 -178.94,-38.5 -268.41,-57.75 -59.9,-15.88 -82.22,-54.9 -83.24,-107.03 -6.79,-172.15 -13.58,-344.29 -20.38,-516.44 -111.84,-14.71 -104.81,-116.53 -93.91,-262.08z"/>
                                    <path class="fil1" d="M168.2 2492.07c378.62,-33.63 750.51,-15.07 1111.01,91.74 21.15,477.44 -76.59,726.51 -227.64,873.19 -47.54,34.56 -97.43,26.6 -149.5,-20.39 -87.37,-55.98 -174.74,-111.98 -262.11,-167.96 -91.24,-58.47 -76.62,-64.41 -143.03,-129.39 -49.79,-48.72 -110.02,-74.83 -169.05,-103.57 -86.5,-33.1 -135.03,-88.45 -149.93,-163.51 -17.18,-86.52 -7.47,-282.65 -9.75,-380.11zm882.54 862.98c104.77,-118.65 194.05,-282.82 185.17,-735.58 -102.33,-38.82 -221.5,-51.9 -343.16,-61.16 0,199.04 0,398.08 0,597.12 0,90.18 16.71,345.04 157.99,199.62z"/>
                                    <path class="fil1" d="M185.65 3989.55c346.99,-31.37 497.32,-220.05 436.59,-577.59 124.58,77.58 249.16,155.16 373.74,232.73 94.43,48.73 108.9,125.09 -45.87,259.92 0,97.4 0,194.8 0,292.19 2.27,81.89 -37.86,94.89 -90.04,88.34 -106.87,-7.37 -91.14,1.13 -186.87,22.4 -62.89,13.99 -110.07,8.75 -159.68,6.48 -12.28,-2.64 -51.54,-14.54 -94.06,-46.48 -61.02,-45.84 -145.15,-84.71 -158.48,-96.9 -51.86,-47.36 -76.86,-107.85 -75.33,-181.09z"/>
                                    <path class="fil0" d="M4872.43 179.32l2.22 193.66 0.26 11.93c0.85,32.81 2.2,84.73 -20.8,95.39 -12.2,5.65 -25.34,4.58 -49.14,2.65l-0.98 -0.06c-55.66,-2.69 -107.88,-0.37 -155.96,6.95 -47.98,7.31 -91.92,19.6 -131.12,36.86 -65.25,28.74 -115.13,73.83 -149.89,126.5 -38.66,58.57 -58.62,126.55 -60.28,191.84 -1.66,65.41 15.03,128.44 49.63,185.14 33.49,54.89 83.75,103.8 150.33,143.09 41.71,24.62 88.77,44.46 139.86,58.23 48.91,13.18 101.63,20.84 157.03,21.84l82.02 0.03 0 1923.79 -98.91 0c-158.98,-1.99 -266.63,40.14 -339.09,99.44 -110.58,90.52 -138.95,220.89 -142.8,295.88 -0.57,11.2 -0.73,22.23 -0.48,33.06 2.56,111.33 48.3,197.16 122.96,256.68 74.24,59.2 177.08,92.2 294.31,98.22 16.89,0.86 34.14,1.17 51.69,0.91 -0.75,21.15 -1.72,42.3 -3.55,63.42 -1.98,22.96 -4.99,45.39 -9.87,66.79 -24.93,109.27 -75,131.56 -132.26,157.02 -36.28,16.14 -75.34,33.51 -113.27,73.53 -19.13,20.19 -31.17,35.31 -40.18,46.61 -11.25,14.13 -17.51,21.96 -26.46,25.63 -11.76,4.82 -30.44,4.08 -72.31,2.4 -11.19,-0.44 -24.05,-0.97 -39.3,-1.47 -50.06,-1.64 -89.18,-6.48 -118.52,-14.14 -28.47,-7.44 -47.42,-17.41 -57.98,-29.6l-1.77 -2.05 -45.19 -2.74c-215.22,-12.74 -215.87,-12.78 -217.74,-301.96 -0.67,-106.56 -8.32,-116.25 -45.25,-163.01 -12.28,-15.55 -27.96,-35.41 -48.13,-65.27 -48.8,-72.27 -94.66,-150.95 -135.48,-240.42 -40.84,-89.52 -76.71,-189.95 -105.55,-305.74 -39.58,-158.88 -41.44,-260.09 -44.26,-414.27l-0.51 -27.66c-2.11,-110.61 -3.8,-224.36 0.2,-335.38 3.99,-110.79 13.66,-218.86 34.22,-318.32 6.5,-31.46 13.46,-61.2 20.8,-89.45 7.29,-28.04 15.03,-54.83 23.14,-80.53 48.41,-153.34 128.55,-304.21 208.07,-453.91 82.49,-155.3 164.35,-309.38 209.92,-464.53 26.34,-89.7 43.66,-183.51 60.76,-276.2 4.82,-26.09 9.62,-52.08 14.89,-79.34 23.92,-123.67 53.43,-268.07 86.6,-391.94 32.99,-123.18 69.47,-225.83 107.33,-266.76 19.62,-21.22 41.71,-36.85 66.31,-46.71 24.53,-9.83 51.68,-13.94 81.46,-12.16l301.77 40.69 89.19 18.77c51.62,10.86 51.76,42.68 51.96,92.82l0.1 13.82zm15.01 193.56l-2.22 -193.66 -0.09 -13.77c-0.22,-56.48 -0.39,-92.32 -62.14,-105.31 -129.59,-27.28 -260.94,-45.54 -392.65,-59.7 -31.75,-1.92 -60.79,2.49 -87.15,13.06 -26.35,10.56 -49.98,27.26 -70.92,49.92 -39.52,42.73 -76.88,147.23 -110.34,272.14 -33.27,124.23 -62.85,268.93 -86.81,392.85 -4.89,25.3 -9.88,52.34 -14.88,79.43 -17.04,92.34 -34.29,185.81 -60.45,274.9 -45.16,153.75 -126.75,307.34 -208.97,462.12 -79.79,150.2 -160.19,301.56 -208.96,456.07 -8.06,25.54 -15.85,52.51 -23.29,81.17 -7.4,28.47 -14.41,58.44 -20.95,90.11 -20.71,100.2 -30.45,208.97 -34.46,320.43 -4,111.23 -2.32,225.21 -0.2,336.04l0.51 27.66c2.84,155.14 4.71,256.97 44.61,417.13 29.04,116.58 65.19,217.76 106.35,308 41.19,90.28 87.37,169.54 136.48,242.27 20.15,29.83 36.17,50.12 48.72,66.02 34.67,43.9 41.85,52.99 42.5,155.14 1.95,301.2 2.63,301.25 229.78,314.7l39.89 2.41c12.49,13.21 33.01,23.86 62.59,31.58 30.22,7.89 70.28,12.86 121.34,14.54 14.65,0.48 27.77,1.02 39.19,1.47 43.78,1.75 63.32,2.53 77.68,-3.36 12.06,-4.95 19.04,-13.7 31.62,-29.5 8.9,-11.17 20.8,-26.1 39.43,-45.76 36.19,-38.19 74.05,-55.03 109.21,-70.67 60.37,-26.85 113.17,-50.34 139.53,-165.91 5.06,-22.19 8.16,-45.15 10.17,-68.5 1.99,-22.96 2.96,-46.83 3.78,-70.84l0.23 -6.75 -6.75 0.16c-19.45,0.44 -38.68,0.18 -57.55,-0.78 -114.58,-5.88 -214.86,-37.96 -286.99,-95.47 -71.72,-57.18 -115.67,-139.73 -118.13,-246.89 -0.24,-10.43 -0.08,-21.16 0.48,-32.17 3.73,-72.7 31.18,-199.05 138.14,-286.59 70.4,-57.62 175.37,-98.54 330.89,-96.56 4.38,1.46 96.8,0.03 111.83,0.03l0 -1949.48 -94.76 0c-54.18,-0.97 -105.83,-8.49 -153.82,-21.42 -49.96,-13.47 -95.93,-32.84 -136.65,-56.88 -64.74,-38.21 -113.52,-85.62 -145.92,-138.72 -33.3,-54.57 -49.36,-115.23 -47.77,-178.17 1.6,-62.97 20.86,-128.55 58.17,-185.07 33.47,-50.7 81.51,-94.13 144.37,-121.82 38.16,-16.81 81.01,-28.78 127.86,-35.92 47.28,-7.2 98.6,-9.49 153.25,-6.86l0.78 0.07c25.93,2.11 40.25,3.27 55.51,-3.8 30.65,-14.2 29.16,-71.27 28.22,-107.33l-0.26 -11.74z"/>
                                    <path class="fil1" d="M4045.31 1387.53c244.21,-84.9 461.01,-44.42 687.02,7.21 1.13,-33.41 2.26,-66.82 3.4,-100.23 -580.29,-41.36 -619.24,-668.79 -210.11,-819.03 70.42,-25.86 159.27,-41.8 271.26,-42.27 2.83,-93.44 3.97,-203.85 6.79,-297.29 -45.66,8.19 -87.18,10.46 -125.71,8.45 -136.35,-7.12 -266.24,-61.11 -361.25,26.02 -34.76,31.88 -61.31,78.63 -77.93,131.21 -90.28,285.63 -147.68,771.92 -193.48,1085.92z"/>
                                    <path class="fil1" d="M4119.82 1456.65c193.46,-61.79 397.14,-57.83 609.09,-0.75 0,327.31 0,654.6 0,981.91 -379.36,-26.66 -752.06,-3.44 -1104.22,96.83 7.06,-301.85 67.42,-604.25 221.81,-856 87.18,-142.15 112.49,-170.62 273.32,-221.99zm11.57 75.25c-8.67,1.93 -11.79,-1.77 -11.58,7.34 3.08,131.8 13.58,214.88 -63.93,231.41 -25.71,5.48 -97.28,3.63 -88.06,-177.13 -193.37,230.55 -281.16,533.34 -302.38,881.68 89.47,-19.25 178.94,-38.5 268.41,-57.75 59.9,-15.88 82.22,-54.9 83.24,-107.03 6.79,-172.15 13.58,-344.29 20.38,-516.44 111.84,-14.71 104.81,-116.53 93.91,-262.08z"/>
                                    <path class="fil1" d="M4730.25 2492.07c-378.62,-33.63 -750.51,-15.07 -1111.01,91.74 -21.15,477.44 76.58,726.51 227.64,873.19 47.54,34.56 97.43,26.6 149.5,-20.39 87.37,-55.98 174.74,-111.98 262.11,-167.96 91.24,-58.47 76.62,-64.41 143.03,-129.39 49.79,-48.72 110.02,-74.83 169.05,-103.57 86.5,-33.1 135.03,-88.45 149.93,-163.51 17.18,-86.52 7.47,-282.65 9.75,-380.11zm-882.54 862.98c-104.77,-118.65 -194.05,-282.82 -185.17,-735.58 102.33,-38.82 221.5,-51.9 343.16,-61.16 0,199.04 0,398.08 0,597.12 0,90.18 -16.71,345.04 -157.99,199.62z"/>
                                    <path class="fil1" d="M4712.8 3989.55c-346.99,-31.37 -497.32,-220.05 -436.59,-577.59 -124.58,77.58 -249.16,155.16 -373.74,232.73 -94.43,48.73 -108.9,125.09 45.87,259.92 0,97.4 0,194.8 0,292.19 -2.27,81.89 37.86,94.89 90.04,88.34 106.87,-7.37 91.14,1.13 186.87,22.4 62.89,13.99 110.07,8.75 159.68,6.48 12.28,-2.64 51.54,-14.54 94.06,-46.48 61.02,-45.84 145.15,-84.71 158.48,-96.9 51.86,-47.36 76.86,-107.85 75.33,-181.09z"/>
                                    </g>
                            </svg>
                                  </div>
                              </div>

                                </div>
                            </div>


                            <div class="tab-pane fade" id="reviews" role="tabpanel">

                            <form>
                                <div class="row">
                                <div class="mb-3 col-lg-6">
                                  <label for="name" class="form-label">Ad, soyad</label>
                                  <input type="text" class="form-control" id="name" aria-describedby="emailHelp">

                                </div>

                                <div class="mb-3 col-lg-6">
                                    <label for="number" class="form-label">Əlaqə nömrəsi</label>
                              <p class="form-control">     <span>(+994)</span> <input type="number"  id="number"></p>
                                  </div>
                                <div class="mb-3 col-lg-12">
                                  <p class="form-control">
                                    <input type="checkbox">
                                    <span>Avtomobilim haqqında daxil etmiş olduğum məlumatların Auto Pegasus şirkəti tərəfindən dəyərləndirilib alqı-satqı proseslərindən istifadəsinə icazə verirəm.</span>

                                  </p>
                                  </div>

                                  <div class="mb-3 col-lg-12">

                           <p class="form-control">
                            <input type="checkbox">
                            <span>
                                Yeni avtomobil və kampaniyalardan məni xəbərdar et.
                             </span>
                           </p>
                                  </div>

                                <button type="submit" class="btn btn-primary">Qiymət təklifi al</button>
                            </div>
                            </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
@include('front.widget.indi_sat_footer')

    @endsection
