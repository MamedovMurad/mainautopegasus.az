
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
                                <div class="product_d_table">

                                </div>
                                <div class="product_info_content">
                                    <p>Fashion has been creating well-designed collections since 2010. The brand offers feminine designs delivering stylish separates and statement dresses which have since evolved into a full ready-to-wear collection in which every item is a vital part of a woman's wardrobe. The result? Cool, easy, chic looks with youthful elegance and unmistakable signature style. All the beautiful pieces are made in Italy and manufactured with the greatest attention. Now Fashion extends to a range of accessories including shoes, hats, belts and more!</p>
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
<section class="indi-sat mt-20 mb-20 " style="background-color: rgba(236, 236, 236, 0.6); padding:29px;">
<div class="container">
    <div class="row">
    <div class="text-custom text-center mb-20">
        <h3 class="arac_title">
            Avtomobilini İndiSat!
        </h3>
        <p class="arac_desc">
            Anketimizi doldurun və avtomobilinizə qiymət təklifini ən qısa zamanda və əziyyətsiz alın.
        </p>
    </div>
<style>
    .custom-arac>h4>i{
color: red
    }
    .custom-arac{
        padding: 10px 0;
        list-style: none;
    }
</style>
     <div class="custom_arac_box mt-20">
         <div class="row">
        <div class="col-lg-3"><li class="custom-arac"> <h4> <i class="fas fa-check"></i> Ödəniş </h4> <p>Sürətli, etibarlı və əziyyətsiz ödəniş</p> </li></div>
        <div class="col-lg-3"> <li class="custom-arac"><h4> <i class="fas fa-check"></i> Əziyyətsiz</h4> <p>Vaxtınızı qənaət edin, gəlin, sürətli avtomobil satış təcrübəsini bizimlə yaşayın</p></li></div>
        <div class="col-lg-3"><li class="custom-arac"> <h4> <i class="fas fa-check"></i> Ödənişsiz </h4> <p>Xidmətimiz tamamilə ödənişsizdir.</p> </li></div>
        <div class="col-lg-3"> <li class="custom-arac"><h4> <i class="fas fa-check"></i> Qərar Sizindir</h4> <p>Bizdən təklif, sizdən təsdiq. Ortaq məxrəcə gələ bilməsək, imtina edə bilərsiniz.</p></li></div>
    </div>
     </div>



    </div>
</div>
</section>
    <!--slider area end-->
    @endsection
