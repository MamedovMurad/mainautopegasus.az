@extends('front.Layout.master')
@section('content')
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

    <!--slider area end-->

    <section class="filter-car mb-20" style=" background-color: #dbd7d78f; padding:20px 0">
        <div class="car-filter-section">
           <div class="container">


            <form>
                <style>
                    form>.form>.row>.col-lg-10>.row>.col-lg-2{
                        padding: 10px
                    }
                    form>.form>.row>.col-lg-10>.row>.col-lg-6{
                        padding: 10px
                    }
                    form>.form>.row>.col-lg-2>.row>.col-lg-12{
                        padding: 10px
                    }
                </style>

                <div class="form">
                    <div class="row">
                 <div class="col-lg-10">

                    <div class="row">
                        <div class="col-lg-2">

                            <select class="form-control " style="padding:0 2px">
                                <option value="" >Bütün Şəhərlər</option>
                                <option value="">Bakı</option>
                                <option value="">Sumqayıt</option>
                            </select>
                          </div>
                        <div class="col-lg-6">

                         <div class="row" style="padding:0">
                             <div class="col-3" style="padding: 0">
                                <div class="price_filter_area">
                                    <p class="form-control"  style="font-size: 15px; padding:5px 1px">Qiymət</p>

                                   </div>
                             </div>
                             <div class="col-3"  style="padding: 0">
                                <div class="price_filter_area">

                                    <select class="form-control" style="padding: 5px 0" placeholder="First name">
                                        <option value="">| Azn</option>
                                        <option value="">Usd</option>

                                    </select>
                                   </div>
                             </div>
                             <div class="col-3"  style="padding: 0">
                                <div class="price_filter_area">
                                    <input type="number" class="form-control" placeholder="min.">
                                   </div>
                             </div>
                             <div class="col-3"  style="padding: 0">
                                <input type="number" class="form-control" placeholder="max.">
                             </div>
                         </div>
                          </div>
                        <div class="col-lg-2" >
                           <p class="form-control" >Kredit &nbsp; &nbsp;<input type="checkbox" style="width: 17px;height:17px; margin-top:0px" aria-label="Checkbox for following text input"></p>
                          </div>

                        <div class="col-lg-2">
                            <select class="form-control"  style="font-size: 15px ; padding:6px 0px ;">
                                <option value="">Bütün markalar</option>
                                <option value="">Bmw</option>
                                <option value="">Mercedes</option>
                                <option value="">Porche</option>
                                <option value="">Audi</option>
                            </select>
                          </div>
                        <div class="col-lg-2">
                            <select class="form-control" placeholder="First name"  style="font-size: 15px ; padding:6px 0px ;">
                                <option value="">Bütün modellər</option>

                            </select>
                          </div>

                          <div class="col-lg-6 col-sm-9">

                            <div class="row" style="padding:0">
                                <div class="col-3" style="padding: 0">
                                   <div class="price_filter_area" style="overflow: hidden">
                                       <p class="form-control"  style=" padding:9% 0px; height:28px">Buraxılış ili</p>

                                      </div>
                                </div>
                                <div class="col-3"  style="padding: 0">
                                   <div class="price_filter_area">

                                       <select class="form-control" style="padding: 5px 0; overflow:y; height:10px !important">
                                           <option value="">2000</option>
                                           <option value="">1999</option>
                                           <option value="">1998</option>
                                           <option value="">1997</option>
                                           <option value="">1996</option>
                                           <option value="">1995</option>
                                           <option value="">1994</option>
                                           <option value="">1993</option>
                                           <option value="">1992</option>

                                       </select>
                                      </div>
                                </div>
                                <div class="col-3"  style="padding: 0">
                                   <div class="price_filter_area">
                                       <input type="number" class="form-control" placeholder="min.">
                                      </div>
                                </div>
                                <div class="col-3"  style="padding: 0">
                                   <input type="number" class="form-control" placeholder="max.">
                                </div>
                            </div>
                             </div>

                         <div class="col-lg-2">
                            <p class="form-control" >Barter &nbsp; &nbsp;<input type="checkbox" style="width: 17px;height:17px; margin-top:0px" aria-label="Checkbox for following text input"></p>

                          </div>
                         <div class="col-lg-2">
                            <p class="form-control text-danger" ><strong>Elan sayı</strong></p>
                          </div>

                    </div>

                 </div>
                 <div class="col-lg-2">
                     <div class="row">
                    <div class="col-lg-12 ">
                        <button class="btn btn-block btn-danger">Axtarış et</button>
                      </div>
                      <div class="col-lg-12">
                      <a href="{{route('searchMore')}}"class="btn btn-block btn-secondary"> Ətraflı Axtarış et</a>
                      </div>
                    </div>
                 </div>
                </div>
                </div>
              </form>
            </div>
        </div>
    </section>

<section class="cars-custom ">
 <div class="container mb-20">
     <div class="row">
        <div class="car-num">
            <p><span class="cars-numbers" style="font-size: 25px; font-weight:bolder">
              23 </span>

            <span>
                Avtomobil
                </span></p>
        </div>
     </div>
 </div>
    @include('front.widget.product_car')
</section>


@endsection



