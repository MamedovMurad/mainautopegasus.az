
    @extends('front.Layout.master')
    @section('content')



@section('css')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>


@endsection

@section('script')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>
{{-- <script src="{{asset('front/dropzone/dist/')}}/dropzone.js"></script> --}}


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
                            <ul class="nav" role="tablist">
                                <li>
                                    <a class="active" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false">Avtomobilin informasiyası</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#sheet" role="tab" aria-controls="sheet" aria-selected="false">Avtomobilin vəziyyəti</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Əlaqə</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="info" role="tabpanel">
                                <div class="product_info_content">
                                    <form >
                                        <div class="row">
                                        <div class="mb-3 col-lg-4">
                                          <label for="make" class="form-label">Make</label>
                                          <input type="text" class="form-control" id="make" >

                                        </div>
                                        <div class="mb-3 col-lg-4">
                                          <label for="model" class="form-label">Model</label>
                                          <input type="text" class="form-control" id="model">
                                        </div>
                                        <div class="mb-3 col-lg-4">
                                            <label for="year" class="form-label">Year</label>
                                            <input type="date" class="form-control" id="year" >

                                          </div>
                                          <div class="mb-3 col-lg-4">
                                            <label for="Transmission" class="form-label">Transmission</label>
                                            <input type="text" class="form-control" id="Transmission">
                                          </div>
                                          <div class="mb-3 col-lg-4">
                                            <label for="Mileage" class="form-label">Mileage</label>
                                            <input type="number" class="form-control" id="Mileage">
                                          </div>
                                          <div class="mb-3 col-lg-4">
                                            <label for="Vin" class="form-label">VIN</label>
                                            <input type="number" class="form-control" id="Vin">
                                          </div>
                                          <div class=" col-lg-6">
                                            <input type="file" name="file" />
                                          </div>
                                          <div class="mb-3 col-lg-6">
                                            <label for="prov" class="form-label">Provide a hosted video url of your car</label>
                                            <input type="text" class="form-control" id="prov">
                                          </div>

                                          <div class="mb-3 col-lg-4">
                                            <label for="color" class="form-label">Exterior color</label>
                                            <input type="text" class="form-control" id="color">
                                          </div>
                                          <div class="mb-3 col-lg-4">
                                            <label for="interior" class="form-label">Interior color</label>
                                            <input type="number" class="form-control" id="interior">
                                          </div>
                                          <div class="mb-3 col-lg-4">
                                            <label for="Owner" class="form-label">Owner</label>
                                            <input type="number" class="form-control" id="Owner">
                                          </div>
                                        <button type="submit" class="btn btn-primary">Save and continue</button>
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
                                  <label for="name" class="form-label">First name</label>
                                  <input type="text" class="form-control" id="name" aria-describedby="emailHelp">

                                </div>
                                <div class="mb-3 col-lg-6">
                                  <label for="Last-name" class="form-label">Last name</label>
                                  <input type="text" class="form-control" id="last-name">
                                </div>
                                <div class="mb-3 col-lg-6">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                  </div>
                                  <div class="mb-3 col-lg-6">
                                    <label for="number" class="form-label">Phone number</label>
                                    <input type="number" class="form-control" id="number">
                                  </div>
                                  <div class="mb-3 col-lg-12">
                                    <label for="text" class="form-label">Comments</label>
                                   <textarea class="form-control" name="" id="text" ></textarea>
                                  </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
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
