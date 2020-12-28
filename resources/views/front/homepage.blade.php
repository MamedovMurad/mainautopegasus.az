@extends('front.Layout.master')
@section('content')





    <!--Offcanvas menu area start-->
    <div class="off_canvars_overlay"></div>
    <div class="Offcanvas_menu">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="canvas_open">
                        <span>MENU</span>

                        <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                    </div>
                    <div class="Offcanvas_menu_wrapper">

                        <div class="canvas_close">
                            <a href="#"><i class="ion-android-close"></i></a>
                        </div>


                       {{--  <div class="top_right text-right">
                            <ul>
                                <li class="top_links"><a href="#"><i class="ion-android-person"></i> My Account<i class="ion-ios-arrow-down"></i></a>
                                    <ul class="dropdown_links">
                                        <li><a href="checkout.html">Checkout </a></li>
                                        <li><a href="my-account.html">My Account </a></li>
                                        <li><a href="cart.html">Shopping Cart</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                    </ul>
                                </li>
                                <li class="language"><a href="#"><img src="assets/img/logo/language.png" alt="">en-gb<i class="ion-ios-arrow-down"></i></a>
                                    <ul class="dropdown_language">
                                        <li><a href="#"><img src="{{asset('/front/autima/')}}/assets/img/logo/language.png" alt=""> English</a></li>
                                        <li><a href="#"><img src="{{asset('/front/autima/')}}/assets/img/logo/language2.png" alt=""> Germany</a></li>
                                    </ul>
                                </li>
                                <li class="currency"><a href="#">$ USD<i class="ion-ios-arrow-down"></i></a>
                                    <ul class="dropdown_currency">
                                        <li><a href="#">EUR – Euro</a></li>
                                        <li><a href="#">GBP – British Pound</a></li>
                                        <li><a href="#">INR – India Rupee</a></li>
                                    </ul>
                                </li>


                            </ul>
                        </div> --}}
                      {{--   <div class="Offcanvas_follow">
                            <label>Follow Us:</label>
                            <ul class="follow_link">
                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                <li><a href="#"><i class="ion-social-youtube"></i></a></li>
                            </ul>
                        </div> --}}
                        <div class="search-container">
                            <form action="#">
                                <div class="search_box">
                                    <input placeholder="Search entire store here ..." type="text">
                                    <button type="submit"><i class="ion-ios-search-strong"></i></button>
                                </div>
                            </form>
                        </div>
                        <div id="menu" class="text-left ">
                            <ul class="offcanvas_main_menu">
                                <li class="menu-item-has-children">
                                    <a href="#">Home</a>
                                    <ul class="sub-menu">
                                        <li><a href="index.html">Home 1</a></li>
                                        <li><a href="index-2.html">Home 2</a></li>
                                        <li><a href="index-3.html">Home 3</a></li>
                                        <li><a href="index-4.html">Home 4</a></li>
                                        <li><a href="index-5.html">Home 5</a></li>
                                        <li><a href="index-6.html">Home 6</a></li>
                                        <li><a href="index-7.html">Home 7</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Shop</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children">
                                            <a href="#">Shop Layouts</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop.html">shop</a></li>
                                                <li><a href="shop-fullwidth.html">Full Width</a></li>
                                                <li><a href="shop-fullwidth-list.html">Full Width list</a></li>
                                                <li><a href="shop-right-sidebar.html">Right Sidebar </a></li>
                                                <li><a href="shop-right-sidebar-list.html"> Right Sidebar list</a></li>
                                                <li><a href="shop-list.html">List View</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">other Pages</a>
                                            <ul class="sub-menu">
                                                <li><a href="cart.html">cart</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="my-account.html">my account</a></li>
                                                <li><a href="404.html">Error 404</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Product Types</a>
                                            <ul class="sub-menu">
                                                <li><a href="product-details.html">product details</a></li>
                                                <li><a href="product-sidebar.html">product sidebar</a></li>
                                                <li><a href="product-grouped.html">product grouped</a></li>
                                                <li><a href="variable-product.html">product variable</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog.html">blog</a></li>
                                        <li><a href="blog-details.html">blog details</a></li>
                                        <li><a href="blog-fullwidth.html">blog fullwidth</a></li>
                                        <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                    </ul>

                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">pages </a>
                                    <ul class="sub-menu">
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="services.html">services</a></li>
                                        <li><a href="faq.html">Frequently Questions</a></li>
                                        <li><a href="login.html">login</a></li>
                                        <li><a href="compare.html">compare</a></li>
                                        <li><a href="privacy-policy.html">privacy policy</a></li>
                                        <li><a href="coming-soon.html">Coming Soon</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="my-account.html">my account</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="about.html">About Us</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="contact.html"> Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--Offcanvas menu area end-->

    <!--slider area start-->
    <section class="slider_section mt-20">
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
                       <a href="{{route('servicePage')}}">
                        <div class="single_slider d-flex align-items-center" data-bgimg="{{asset('/front/autima/')}}/assets/img/auto-logo/banner4.png">
                            <div class="slider_content">
                               {{--  <h2>Top Quality</h2>
                                <h1>Aftermarket Turbocharger Specialist</h1> --}}
                                {{-- <a class="button" href="shop.html">shopping now</a> --}}
                            </div>

                        </div>
                       </a>
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

    <!--shipping area start-->
    <section class="shipping_area mb-20">
        <div class="container">
            <div class=" row">
                <div class="col-lg-12">
                    <div class="shipping_inner">
                       <a href="" class="a">
                           <div class="qutu"></div>
                        <div class="single_shipping single-1">
                            <div class="shipping_icone">
                                <img src="{{asset('/front/autima/')}}/assets/img/about/shipping1.png" alt="">
                            </div>
                            <div class="shipping_content f1">
                                <h2>TezSat!</h2>

                                <p>Avtomobilinizin qiymətində razılaşacaq, 1 saat ərzində pulunuz hesabınızda.  <br><span class="read-more">Ətraflı</span></p>
                            </div>
                        </div>

                       </a>
                    <a href="">
                        <div class="qutu"></div>
                        <div class="single_shipping single-2">
                            <div class="shipping_icone">
                                <img src="{{asset('/front/autima/')}}/assets/img/about/shipping2.png" alt="">
                            </div>
                            <div class="shipping_content f2">
                                <h2>Sərfəli Kredit</h2>
                                <p>36 aya qədər sərfəli kredit və lizinq şərtlərimiz işinizi rahatlaşdıracaq.  <br><span class="read-more">Ətraflı</span></p>

                            </div>
                        </div>
                    </a>

                   <a href="">
                    <div class="qutu"></div>
                    <div class="single_shipping single-3">
                        <div class="shipping_icone">
                            <img src="{{asset('/front/autima/')}}/assets/img/about/shipping3.png" alt="">
                        </div>
                        <div class="shipping_content f3">
                            <h2>100 Nöqtə Yoxlanışı</h2>
                            <p>100 yoxlayıb, 1 alırıq, inamınızı doğrulduruq.<br><span class="read-more">Ətraflı</span></p>

                        </div>
                    </div>
                   </a>
                   <a href="">
                    <div class="qutu"></div>
                    <div class="single_shipping single-4">
                        <div class="shipping_icone">
                            <img src="{{asset('/front/autima/')}}/assets/img/about/shipping4.png" alt="">
                        </div>
                        <div class="shipping_content f4">
                            <h2>Barter</h2>
                            <p>Barter xidmətinizdədir. Sizə zəhmətsiz alış təcrübəsini yaşadacağıq.<br> <span class="read-more">Ətraflı</span></p>

                        </div>
                    </div>
                   </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--shipping area end-->
<section class="filter-car mb-20 " style="background: #090B4D;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); padding:20px 0">
    <div class="car-filter-section">
       <div class="container">


        <form>


            <div class="form">



                <div class="row">
                    <div class="col-lg-3">

                        <select class="form-select " style="margin-bottom: 12px">
                            <option value="" >Bütün markalar</option>
                            <option value="">Bmw</option>
                            <option value="">Mercedes</option>
                        </select>
                        <select class="form-select " style="margin-bottom: 12px" >
                            <option value="" >Bütün modellər</option>
                            <option value="">A5</option>
                            <option value="">A6</option>
                        </select>
                      </div>

             <div class="col-lg-5">

                     <div class="row" >
                         <div class="col-3" >
                            <div class="price_filter_area">
                                <p class="form-control" style="padding-left:4px "  >Qiymət</p>

                               </div>
                         </div>
                         <div class="col-3"  >
                            <div class="price_filter_area">

                                <select class="form-select"  placeholder="First name" style="padding-left: 3.4px">
                                    <option value="">Azn</option>
                                    <option value="">Usd</option>

                                </select>
                               </div>
                         </div>
                         <div class="col-3"  >
                            <div class="price_filter_area">
                                <input style="padding-left:4px " type="number" class="form-control" placeholder="min.">
                               </div>
                         </div>
                         <div class="col-3" >
                            <input style="padding-left:4px " type="number" class="form-control" placeholder="max.">
                         </div>
                         <div class="col-4"  >
                            <div class="price_filter_area" >
                                <p class="form-control buraxilis" style="padding-left:4px "  >Buraxılış ili</p>

                               </div>
                         </div>
                         <div class="col-4" >
                            <div class="price_filter_area" >

                                <input type="number" class="form-control" style="padding-left:4px " placeholder="min.">
                               </div>
                         </div>
                         <div class="col-4"  >
                            <div class="price_filter_area" >

                                <input type="number" class="form-control" style="padding-left:4px " placeholder="max.">
                               </div>
                         </div>
                     </div>
             </div>
                    <div class="col-lg-2" >
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="price_filter_area" >
                                <p  class="form-control kredit" >Kredit &nbsp; &nbsp;<input style="zoom: 1.5;" type="checkbox"></p>
                            </div>
                        </div>
                            <div class="col-lg-8">
                                <div  class="price_filter_area" >
                                <p  class="form-control kredit"  >Barter &nbsp; &nbsp;<input style="zoom: 1.5"  type="checkbox"  ></p>
                            </div>
                        </div>
                        </div>

                      </div>

                    <div class="col-lg-2">
                        <div class="row">
                            <div class="col-lg-12 ">
                                <div  class="price_filter_area" >
                                <button class="btn btn-block btn-danger" style="background: #CD0000;">Axtarış et</button>
                            </div>
                        </div>
                            <div class="col-lg-12">
                                <div  class="price_filter_area" >
                            <a href="{{route('searchMore')}}"class="btn btn-block btn-secondary" style="background: #AAAAAA"> Ətraflı Axtarış et</a>
                            </div>
                        </div>
                        </div>
                      </div>






                </div>

             </div>



          </form>
        </div>
    </div>
</section>

    <!--product area start-->
    <section class="product_area mb-50 ">

        <style>
            .custom-flex>.custom_card{
    padding: 0;
                overflow:hidden;
                position: relative;
            }
            .custom-flex>.cuistom-card>img{
                overflow: hidden;
            }
            .card-body>h4{
                position: absolute;
                bottom: 34%;
                color: white;
                background-color: #DC1616;
                right: 0;
                padding: 5px;

            }
            .card-body>span.label{

                text-align: center;
                width: 120px;
                z-index: 0;
                position: absolute;
                top: 5px;
                left: -28px;
                background-color: rgba(139, 139, 139, 0.932);
                color: white;
                padding: 5px;
                border-radius: 2px;
                display: inline-block;
                transform: rotate(-40deg);
            }
        </style>
        <div class="container">
            <div class="row custom-flex">


            <div class="card custom_card" style="width: 260px; margin: 10px; height:313px;">
                <img src="{{asset('/front/autima/')}}/assets/img/auto-car/Chevrolet Yeni (6).jpg" class="card-img-top" alt="..." style="width: 100%">
                <div class="card-body">

                    <a href="{{route('carDetail')}}"> <h4> <span>Chevrolet</span>  <span>Cruze</span></h4> </a>
                  <p class="card-text">1.4 L/ 2016 il/ 180 000 km <br>
                    <span class="lab" style="color: rgba(196, 196, 196, 1); font-size:13.2px;display:inline-block; width:169px">Kreditdədir. <br> "100 Nöqtə Yoxlanışı"ndan keçib.</span></p>
                  <h4 class="">17 700 AZN ver, Apar</h4>
                </div>
            </div>


                  <div class="card custom_card" style="width: 260px; margin: 10px; height:313px;">
                    <img src="{{asset('/front/autima/')}}/assets/img/featured/featured.jpg" class="card-img-top" alt="...">
                    <div class="card-body">

                        <a href="{{route('carDetail')}}"> <h4> <span>Bmw</span> | <span>550</span></h4> </a>
                      <p class="card-text">avtomobil haqqında məlumat</p>
                      <h4 class="">200 azn</h4>
                    </div>
                  </div>
                  <div class="card custom_card" style="width: 260px; margin: 10px; height:313px;">
                    <img src="{{asset('/front/autima/')}}/assets/img/featured/featured.jpg" class="card-img-top" alt="...">
                    <div class="card-body">

                        <a href="{{route('carDetail')}}"> <h4> <span>Bmw</span> | <span>550</span></h4> </a>
                      <p class="card-text">avtomobil haqqında məlumat</p>
                      <h4 class="">200 azn</h4>
                    </div>
                  </div>
                  <div class="card custom_card" style="width: 260px; margin: 10px; height:313px;">
                    <img src="{{asset('/front/autima/')}}/assets/img/featured/featured.jpg"" class="card-img-top" alt="...">
                    <div class="card-body">

                        <a href="{{route('carDetail')}}"> <h4> <span>Bmw</span> | <span>550</span></h4> </a>
                      <p class="card-text">avtomobil haqqında məlumat</p>
                      <h4 class="">200 azn</h4>
                    </div>
                  </div>

                  <div class="card custom_card" style="width: 260px; margin: 10px; height:313px;">
                    <img src="{{asset('/front/autima/')}}/assets/img/featured/featured.jpg" class="card-img-top" alt="...">
                    <div class="card-body">

                        <a href="{{route('carDetail')}}"> <h4> <span>Bmw</span> | <span>550</span></h4> </a>
                      <p class="card-text">avtomobil haqqında məlumat</p>
                      <h4 class="">200 azn</h4>
                    </div>
                </div>


                      <div class="card custom_card" style="width: 260px;; margin: 10px; height:313px;">
                        <img src="{{asset('/front/autima/')}}/assets/img/featured/featured.jpg" class="card-img-top" alt="...">
                        <div class="card-body">

                            <a href="{{route('carDetail')}}"> <h4> <span>Bmw</span> | <span>550</span></h4> </a>
                          <p class="card-text">avtomobil haqqında məlumat</p>
                          <h4 class="">200 azn</h4>
                        </div>
                      </div>
                      <div class="card custom_card" style="width: 260px;; margin: 10px; height:313px;">
                        <img src="{{asset('/front/autima/')}}/assets/img/featured/featured.jpg" class="card-img-top" alt="...">
                        <div class="card-body">

                            <a href="{{route('carDetail')}}"> <h4> <span>Bmw</span> | <span>550</span></h4> </a>
                          <p class="card-text">avtomobil haqqında məlumat</p>
                          <h4 class="">200 azn</h4>
                        </div>
                      </div>
                      <div class="card custom_card" style="width: 260px;; margin: 10px; height:313px;">
                        <img src="{{asset('/front/autima/')}}/assets/img/featured/featured.jpg"" class="card-img-top" alt="...">
                        <div class="card-body">

                            <a href="{{route('carDetail')}}"> <h4> <span>Bmw</span> | <span>550</span></h4> </a>
                          <p class="card-text">avtomobil haqqında məlumat</p>
                          <h4 class="">200 azn</h4>
                        </div>
                      </div>
                      <div class="card custom_card" style="width: 260px;; margin: 10px; height:313px;">
                        <img src="{{asset('/front/autima/')}}/assets/img/featured/featured.jpg" class="card-img-top" alt="...">
                        <div class="card-body">

                            <a href="{{route('carDetail')}}"> <h4> <span>Bmw</span> | <span>550</span></h4> </a>
                          <p class="card-text">avtomobil haqqında məlumat</p>
                          <h4 class="">200 azn</h4>
                        </div>
                    </div>


                          <div class="card custom_card" style="width: 260px;; margin: 10px; height:313px;">
                            <img src="{{asset('/front/autima/')}}/assets/img/featured/featured.jpg" class="card-img-top" alt="...">
                            <div class="card-body">

                                <a href="{{route('carDetail')}}"> <h4> <span>Bmw</span> | <span>550</span></h4> </a>
                              <p class="card-text">avtomobil haqqında məlumat</p>
                              <h4 class="">200 azn</h4>
                            </div>
                          </div>
                          <div class="card custom_card" style="width: 260px;; margin: 10px; height:313px;">
                            <img src="{{asset('/front/autima/')}}/assets/img/featured/featured.jpg" class="card-img-top" alt="...">
                            <div class="card-body">

                                <a href="{{route('carDetail')}}"> <h4> <span>Bmw</span> | <span>550</span></h4> </a>
                              <p class="card-text">avtomobil haqqında məlumat</p>
                              <h4 class="">200 azn</h4>
                            </div>
                          </div>
                          <div class="card custom_card" style="width: 260px;; margin: 10px; height:313px;">
                            <img src="{{asset('/front/autima/')}}/assets/img/featured/featured.jpg"" class="card-img-top" alt="...">
                            <div class="card-body">

                                <a href="{{route('carDetail')}}"> <h4> <span>Bmw</span> | <span>550</span></h4> </a>
                              <p class="card-text">avtomobil haqqında məlumat</p>
                              <h4 class="">200 azn</h4>
                            </div>
                          </div>





            </div>
            <hr>
        </div>

    </section>
    <!--product area end-->

   {{--  <!--featured categories area start-->
    <section class="featured_categories mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2><span> <strong>Featured</strong>Categories</span></h2>
                    </div>
                    <div class="featured_container">
                        <div class="featured_carousel featured_column3 owl-carousel">
                            <div class="single_items">
                                <div class="single_featured">
                                    <div class="featured_thumb">
                                        <a href="#"><img src="{{asset('/front/autima/')}}/assets/img/featured/featured.jpg" alt=""></a>
                                    </div>
                                    <div class="featured_content">
                                        <h3 class="product_name"><a href="#">Body Parts</a></h3>
                                        <div class="sub_featured">
                                            <ul>
                                                <li><a href="#">Handbag</a></li>
                                                <li><a href="#">Accessories</a></li>
                                                <li><a href="#">Clothing</a></li>
                                                <li><a href="#">Shoes</a></li>
                                            </ul>
                                        </div>
                                        <a class="view_more" href="#">shop now</a>
                                    </div>
                                </div>
                                <div class="single_featured">
                                    <div class="featured_thumb">
                                        <a href="#"><img src="{{asset('/front/autima/')}}/assets/img/featured/featured1.jpg" alt=""></a>
                                    </div>
                                    <div class="featured_content">
                                        <h3 class="product_name"><a href="#">Brake Parts</a></h3>
                                        <div class="sub_featured">
                                            <ul>
                                                <li><a href="#">Handbag</a></li>
                                                <li><a href="#">Accessories</a></li>
                                                <li><a href="#">Clothing</a></li>
                                                <li><a href="#">Shoes</a></li>
                                            </ul>
                                        </div>
                                        <a class="view_more" href="#">shop now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="single_items">
                                <div class="single_featured">
                                    <div class="featured_thumb">
                                        <a href="#"><img src="{{asset('/front/autima/')}}/assets/img/featured/featured2.jpg" alt=""></a>
                                    </div>
                                    <div class="featured_content">
                                        <h3 class="product_name"><a href="#">Lighting</a></h3>
                                        <div class="sub_featured">
                                            <ul>
                                                <li><a href="#">Handbag</a></li>
                                                <li><a href="#">Accessories</a></li>
                                                <li><a href="#">Clothing</a></li>
                                                <li><a href="#">Shoes</a></li>
                                            </ul>
                                        </div>
                                        <a class="view_more" href="#">shop now</a>
                                    </div>
                                </div>
                                <div class="single_featured">
                                    <div class="featured_thumb">
                                        <a href="#"><img src="{{asset('/front/autima/')}}/assets/img/featured/featured3.jpg" alt=""></a>
                                    </div>
                                    <div class="featured_content">
                                        <h3 class="product_name"><a href="#">Moto Oil</a></h3>
                                        <div class="sub_featured">
                                            <ul>
                                                <li><a href="#">Handbag</a></li>
                                                <li><a href="#">Accessories</a></li>
                                                <li><a href="#">Clothing</a></li>
                                                <li><a href="#">Shoes</a></li>
                                            </ul>
                                        </div>
                                        <a class="view_more" href="#">shop now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="single_items">
                                <div class="single_featured">
                                    <div class="featured_thumb">
                                        <a href="#"><img src="{{asset('/front/autima/')}}/assets/img/featured/featured4.jpg" alt=""></a>
                                    </div>
                                    <div class="featured_content">
                                        <h3 class="product_name"><a href="#">Turbo Systems</a></h3>
                                        <div class="sub_featured">
                                            <ul>
                                                <li><a href="#">Handbag</a></li>
                                                <li><a href="#">Accessories</a></li>
                                                <li><a href="#">Clothing</a></li>
                                                <li><a href="#">Shoes</a></li>
                                            </ul>
                                        </div>
                                        <a class="view_more" href="#">shop now</a>
                                    </div>
                                </div>
                                <div class="single_featured">
                                    <div class="featured_thumb">
                                        <a href="#"><img src="{{asset('/front/autima/')}}/assets/img/featured/featured5.jpg" alt=""></a>
                                    </div>
                                    <div class="featured_content">
                                        <h3 class="product_name"><a href="#">Wheels & Tires</a></h3>
                                        <div class="sub_featured">
                                            <ul>
                                                <li><a href="#">Handbag</a></li>
                                                <li><a href="#">Accessories</a></li>
                                                <li><a href="#">Clothing</a></li>
                                                <li><a href="#">Shoes</a></li>
                                            </ul>
                                        </div>
                                        <a class="view_more" href="#">shop now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="single_items">
                                <div class="single_featured">
                                    <div class="featured_thumb">
                                        <a href="#"><img src="{{asset('/front/autima/')}}/assets/img/featured/featured3.jpg" alt=""></a>
                                    </div>
                                    <div class="featured_content">
                                        <h3 class="product_name"><a href="#">Body Parts</a></h3>
                                        <div class="sub_featured">
                                            <ul>
                                                <li><a href="#">Handbag</a></li>
                                                <li><a href="#">Accessories</a></li>
                                                <li><a href="#">Clothing</a></li>
                                                <li><a href="#">Shoes</a></li>
                                            </ul>
                                        </div>
                                        <a class="view_more" href="#">shop now</a>
                                    </div>
                                </div>
                                <div class="single_featured">
                                    <div class="featured_thumb">
                                        <a href="#"><img src="{{asset('/front/autima/')}}/assets/img/featured/featured5.jpg" alt=""></a>
                                    </div>
                                    <div class="featured_content">
                                        <h3 class="product_name"><a href="#">Brake Parts</a></h3>
                                        <div class="sub_featured">
                                            <ul>
                                                <li><a href="#">Handbag</a></li>
                                                <li><a href="#">Accessories</a></li>
                                                <li><a href="#">Clothing</a></li>
                                                <li><a href="#">Shoes</a></li>
                                            </ul>
                                        </div>
                                        <a class="view_more" href="#">shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--featured categories area end-->

    <!--small product area start-->
    <section class="small_product_area mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2><span> <strong>Body</strong>Parts</span></h2>
                    </div>
                    <div class="product_carousel small_product product_column3 owl-carousel">
                        <div class="single_product">
                            <div class="product_content">
                                <h3><a href="product-details.html">Lid Cover Cookware Steel Hybrid</a></h3>
                                <div class="product_ratings">
                                    <ul>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="price_box">
                                    <span class="current_price">$140.00</span>
                                    <span class="old_price">$320.00</span>
                                </div>
                            </div>
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="{{asset('/front/autima/')}}/assets/img/product/product2.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="single_product">
                            <div class="product_content">
                                <h3><a href="product-details.html">JBL Flip 3 Splasroof Portable Bluetooth 2</a></h3>
                                <div class="product_ratings">
                                    <ul>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="price_box">
                                    <span class="regular_price">$180.00</span>
                                </div>
                            </div>
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="{{asset('/front/autima/')}}/assets/img/product/product12.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="single_product">
                            <div class="product_content">
                                <h3><a href="product-details.html">Nonstick Dishwasher On-Ear Headphones 2</a></h3>
                                <div class="product_ratings">
                                    <ul>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="price_box">
                                    <span class="current_price">$140.00</span>
                                    <span class="old_price">$320.00</span>
                                </div>
                            </div>
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="{{asset('/front/autima/')}}/assets/img/product/product13.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="single_product">
                            <div class="product_content">
                                <h3><a href="product-details.html">Marshall Portable Bluetooth Speaker</a></h3>
                                <div class="product_ratings">
                                    <ul>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="price_box">
                                    <span class="current_price">$140.00</span>
                                    <span class="old_price">$320.00</span>
                                </div>
                            </div>
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="{{asset('/front/autima/')}}/assets/img/product/product15.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--small product area end-->

    <!--small product area start-->
    <section class="small_product_area mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2><span> <strong>Engine</strong>Parts</span></h2>
                    </div>
                    <div class="product_carousel small_product product_column3 owl-carousel">
                        <div class="single_product">
                            <div class="product_content">
                                <h3><a href="product-details.html">Kodak PIXPRO Astro Zoom AZ421 16 MP 2</a></h3>
                                <div class="product_ratings">
                                    <ul>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="price_box">
                                    <span class="regular_price">$160.00</span>
                                </div>
                            </div>
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="{{asset('/front/autima/')}}/assets/img/product/product5.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="single_product">
                            <div class="product_content">
                                <h3><a href="product-details.html">Bose SoundLink Micro Bluetooth Speaker 2</a></h3>
                                <div class="product_ratings">
                                    <ul>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="price_box">
                                    <span class="current_price">$140.00</span>
                                    <span class="old_price">$320.00</span>
                                </div>
                            </div>
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="{{asset('/front/autima/')}}/assets/img/product/product6.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="single_product">
                            <div class="product_content">
                                <h3><a href="product-details.html">Nonstick Dishwasher On-Ear Headphones 2</a></h3>
                                <div class="product_ratings">
                                    <ul>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="price_box">
                                    <span class="regular_price">$280.00</span>
                                </div>
                            </div>
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="{{asset('/front/autima/')}}/assets/img/product/product7.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="single_product">
                            <div class="product_content">
                                <h3><a href="product-details.html">Lid Cover Cookware Steel Hybrid</a></h3>
                                <div class="product_ratings">
                                    <ul>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="price_box">
                                    <span class="current_price">$140.00</span>
                                    <span class="old_price">$320.00</span>
                                </div>
                            </div>
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="{{asset('/front/autima/')}}/assets/img/product/product8.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--small product area end-->

    <!--banner area start-->
    <section class="banner_area mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banner_container">
                        <div class="single_banner">
                            <div class="banner_thumb">
                                <a href="#"><img src="{{asset('/front/autima/')}}/assets/img/bg/banner3.jpg" alt=""></a>
                                <div class="banner_text">
                                    <h3>Car Audio</h3>
                                    <h2>Super Natural Sound</h2>
                                    <a href="shop.html">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="single_banner">
                            <div class="banner_thumb">
                                <a href="#"><img src="{{asset('/front/autima/')}}/assets/img/bg/banner4.jpg" alt=""></a>
                                <div class="banner_text">
                                    <h3>All - New</h3>
                                    <h2>Perfomance Parts</h2>
                                    <a href="shop.html">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--banner area end-->

    <!--product area start-->
    <section class="product_area mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2><span> <strong>Special</strong>Offers</span></h2>
                    </div>
                    <div class="product_carousel product_column5 owl-carousel">
                        <div class="single_product">
                            <div class="product_name">
                                <h3><a href="product-details.html">JBL Flip 3 Splasroof Portable Bluetooth 2</a></h3>
                                <p class="manufacture_product"><a href="#">Accessories</a></p>
                            </div>
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="{{asset('/front/autima/')}}/assets/img/product/product19.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img src="{{asset('/front/autima/')}}/assets/img/product/product11.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">-57%</span>
                                </div>

                                <div class="action_links">
                                    <ul>
                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                        <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_ratings">
                                    <ul>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product_footer d-flex align-items-center">
                                    <div class="price_box">
                                        <span class="regular_price">$180.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_product">
                            <div class="product_name">
                                <h3><a href="product-details.html">Bose SoundLink Bluetooth Speaker</a></h3>
                                <p class="manufacture_product"><a href="#">Accessories</a></p>
                            </div>
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="{{asset('/front/autima/')}}/assets/img/product/product12.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img src="{{asset('/front/autima/')}}/assets/img/product/product13.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">-47%</span>
                                </div>

                                <div class="action_links">
                                    <ul>
                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                        <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_ratings">
                                    <ul>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product_footer d-flex align-items-center">
                                    <div class="price_box">
                                        <span class="current_price">$160.00</span>
                                        <span class="old_price">$3200.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_product">
                            <div class="product_name">
                                <h3><a href="product-details.html">Variable with soldout product for title</a></h3>
                                <p class="manufacture_product"><a href="#">Accessories</a></p>
                            </div>
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="{{asset('/front/autima/')}}/assets/img/product/product15.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img src="{{asset('/front/autima/')}}/assets/img/product/product14.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">-57%</span>
                                </div>

                                <div class="action_links">
                                    <ul>
                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                        <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_ratings">
                                    <ul>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product_footer d-flex align-items-center">
                                    <div class="price_box">
                                        <span class="regular_price">$150.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_product">
                            <div class="product_name">
                                <h3><a href="product-details.html">Lorem ipsum dolor sit amet, consectetur</a></h3>
                                <p class="manufacture_product"><a href="#">Accessories</a></p>
                            </div>
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="{{asset('/front/autima/')}}/assets/img/product/product16.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img src="{{asset('/front/autima/')}}/assets/img/product/product17.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">-57%</span>
                                </div>

                                <div class="action_links">
                                    <ul>
                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                        <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_ratings">
                                    <ul>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product_footer d-flex align-items-center">
                                    <div class="price_box">
                                        <span class="regular_price">$175.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_product">
                            <div class="product_name">
                                <h3><a href="product-details.html">JBL Flip 3 Splasroof Portable Bluetooth 2</a></h3>
                                <p class="manufacture_product"><a href="#">Accessories</a></p>
                            </div>
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="{{asset('/front/autima/')}}/assets/img/product/product18.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img src="{{asset('/front/autima/')}}/assets/img/product/product1.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">-07%</span>
                                </div>

                                <div class="action_links">
                                    <ul>
                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                        <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_ratings">
                                    <ul>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product_footer d-flex align-items-center">
                                    <div class="price_box">
                                        <span class="current_price">$180.00</span>
                                        <span class="old_price">$420.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_product">
                            <div class="product_name">
                                <h3><a href="product-details.html">Accusantium dolorem Security Camera</a></h3>
                                <p class="manufacture_product"><a href="#">Accessories</a></p>
                            </div>
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="{{asset('/front/autima/')}}/assets/img/product/product2.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img src="{{asset('/front/autima/')}}/assets/img/product/product3.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">-57%</span>
                                </div>

                                <div class="action_links">
                                    <ul>
                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                        <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_ratings">
                                    <ul>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product_footer d-flex align-items-center">
                                    <div class="price_box">
                                        <span class="current_price">$140.00</span>
                                        <span class="old_price">$320.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_product">
                            <div class="product_name">
                                <h3><a href="product-details.html">Koss Porta Pro On Ear Headphones </a></h3>
                                <p class="manufacture_product"><a href="#">Accessories</a></p>
                            </div>
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="{{asset('/front/autima/')}}/assets/img/product/product4.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img src="{{asset('/front/autima/')}}/assets/img/product/product5.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">-57%</span>
                                </div>

                                <div class="action_links">
                                    <ul>
                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                        <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_ratings">
                                    <ul>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product_footer d-flex align-items-center">
                                    <div class="price_box">
                                        <span class="regular_price">$160.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--product area end-->


    <!--brand area start-->
    <div class="brand_area mb-42">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="brand_container owl-carousel">
                        <div class="single_brand">
                            <a href="#"><img src="{{asset('/front/autima/')}}/assets/img/brand/brand.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="{{asset('/front/autima/')}}/assets/img/brand/brand1.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="{{asset('/front/autima/')}}/assets/img/brand/brand2.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="{{asset('/front/autima/')}}/assets/img/brand/brand3.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="{{asset('/front/autima/')}}/assets/img/brand/brand4.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="{{asset('/front/autima/')}}/assets/img/brand/brand2.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--brand area end-->




    <!--call to action start-->
    <section class="call_to_action">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="call_action_inner">
                        <div class="call_text">
                            <h3>We Have <span>Recommendations</span> for You</h3>
                            <p>Take 30% off when you spend $150 or more with code Autima11</p>
                        </div>
                        <div class="discover_now">
                            <a href="#">discover now</a>
                        </div>
                        <div class="link_follow">
                            <ul>
                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                <li><a href="#"><i class="ion-social-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--call to action end-->

   --}}

  <!--footer area start-->
  <section class="home-tab mb-5">
      <div class="container" style="background: #F4F4F4;height: 371px;padding:30px 60px">
          <div class="row">
              <div class="col-lg-12">
                  <h3 class="auto-title-">AUTO PEGASUS Necə İşləyir? </h3>
              </div>
         <div class="col-lg-12">
            <div class="alanda mb-5">
              <div class=" line aktive-line" onclick="openCity(event, 'alanda','image')">
                <div class="content " >
                    <h4>Avtomobil Alanda</h4>    <div class="img">
                        <svg width="34" height="35" viewBox="0 0 34 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path class="vector-img" fill-rule="evenodd" clip-rule="evenodd" d="M18.1397 29.7157H27.2027C27.6559 29.7157 28.0885 29.5372 28.4043 29.2145C28.7201 28.8918 28.9055 28.4592 28.9055 27.9992V20.0073C28.9055 19.5541 28.727 19.1147 28.4043 18.792C28.0816 18.4693 27.649 18.2908 27.2027 18.2908H18.1397C17.6866 18.2908 17.254 18.4693 16.9382 18.792C16.6224 19.1147 16.437 19.5473 16.437 20.0073V28.0061C16.437 28.4592 16.6155 28.8986 16.9382 29.2145C17.254 29.5372 17.6866 29.7157 18.1397 29.7157ZM22.6712 5.72617H22.1014V4.00969C22.1014 3.55654 21.9229 3.11712 21.6002 2.79443C21.2775 2.47173 20.8518 2.29322 20.3986 2.29322H13.6014C13.1482 2.29322 12.7157 2.47173 12.3998 2.79443C12.084 3.11712 11.8986 3.54968 11.8986 4.00969V5.72617H11.3356C10.8825 5.72617 10.4499 5.90469 10.1341 6.22738C9.81139 6.55008 9.63288 6.98263 9.63288 7.44265V9.729C9.63288 9.80452 9.64661 9.88005 9.67407 9.94871C9.70154 10.0174 9.74273 10.0792 9.79766 10.1341C9.85259 10.189 9.91438 10.2302 9.98304 10.2577C10.0517 10.2851 10.1272 10.2989 10.2027 10.2989H12.0016C12.1183 10.6353 12.3312 10.9237 12.6195 11.1296C12.9079 11.3356 13.2512 11.4455 13.6014 11.4455C13.9515 11.4455 14.2948 11.3356 14.5832 11.1296C14.8716 10.9237 15.0844 10.6353 15.2011 10.2989H18.8057C18.9225 10.6353 19.1353 10.9237 19.4237 11.1296C19.712 11.3356 20.0553 11.4455 20.4055 11.4455C20.7557 11.4455 21.099 11.3356 21.3873 11.1296C21.6757 10.9237 21.8885 10.6353 22.0053 10.2989H23.8041C23.9552 10.2989 24.0994 10.2371 24.2023 10.1341C24.3053 10.0242 24.3671 9.88005 24.3671 9.729V7.43578C24.3671 6.98263 24.1886 6.54322 23.8659 6.22052C23.5501 5.89782 23.1175 5.71931 22.6644 5.71931V5.72617H22.6712ZM17.5699 3.43982H20.4055C20.481 3.43982 20.5565 3.45355 20.6252 3.48102C20.6939 3.50848 20.7557 3.54968 20.8106 3.6046C20.8655 3.65953 20.9067 3.72133 20.9342 3.78998C20.9616 3.85864 20.9754 3.93417 20.9754 4.00969V5.72617H17.5699L17.5767 3.43982H17.5699ZM13.0384 4.00969C13.0384 3.93417 13.0521 3.85864 13.0796 3.78998C13.107 3.72133 13.1482 3.65953 13.2032 3.6046C13.2581 3.54968 13.3199 3.50848 13.3885 3.48102C13.4572 3.45355 13.5327 3.43982 13.6082 3.43982H16.4439V5.72617H13.0452V4.00969H13.0384ZM13.6082 10.292C13.4984 10.292 13.3885 10.2577 13.2924 10.1959C13.1963 10.1341 13.1276 10.0448 13.0864 9.94184C13.0452 9.83885 13.0315 9.72213 13.0521 9.61228C13.0727 9.50242 13.1276 9.39944 13.21 9.31705C13.2924 9.23465 13.3885 9.17973 13.4984 9.15913C13.6082 9.13853 13.725 9.1454 13.8279 9.19346C13.9309 9.23465 14.0202 9.31018 14.082 9.4063C14.1438 9.50242 14.1781 9.61228 14.1781 9.72213C14.1781 9.79766 14.1644 9.87318 14.1369 9.94184C14.1095 10.0105 14.0683 10.0723 14.0133 10.1272C13.9584 10.1821 13.8966 10.2233 13.8279 10.2508C13.7593 10.2783 13.6838 10.292 13.6082 10.292ZM20.4055 10.292C20.2956 10.292 20.1858 10.2577 20.0897 10.1959C19.9935 10.1341 19.9249 10.0448 19.8837 9.94184C19.8425 9.83885 19.8288 9.72213 19.8494 9.61228C19.87 9.50242 19.9249 9.39944 20.0073 9.31705C20.0897 9.23465 20.1858 9.17973 20.2956 9.15913C20.4055 9.13853 20.5222 9.1454 20.6252 9.19346C20.7282 9.23465 20.8174 9.31018 20.8792 9.4063C20.941 9.50242 20.9754 9.61228 20.9754 9.72213C20.9754 9.79766 20.9616 9.87318 20.9342 9.94184C20.9067 10.0105 20.8655 10.0723 20.8106 10.1272C20.7557 10.1821 20.6939 10.2233 20.6252 10.2508C20.5565 10.2783 20.481 10.292 20.4055 10.292H20.4124H20.4055ZM23.2411 9.15226H22.0053C21.8885 8.81583 21.6757 8.52746 21.3873 8.32149C21.099 8.11551 20.7557 8.00565 20.4055 8.00565C20.0553 8.00565 19.712 8.11551 19.4237 8.32149C19.1353 8.52746 18.9225 8.81583 18.8057 9.15226H15.2011C15.0844 8.81583 14.8716 8.52746 14.5832 8.32149C14.2948 8.11551 13.9515 8.00565 13.6014 8.00565C13.2512 8.00565 12.9079 8.11551 12.6195 8.32149C12.3312 8.52746 12.1183 8.81583 12.0016 9.15226H10.7658V7.43578C10.7658 7.36026 10.7795 7.28473 10.8069 7.21607C10.8344 7.14742 10.8756 7.08562 10.9305 7.03069C10.9855 6.97577 11.0473 6.93457 11.1159 6.90711C11.1846 6.87965 11.2601 6.86591 11.3356 6.86591H22.6644C22.8154 6.86591 22.9596 6.92771 23.0626 7.03069C23.1656 7.14055 23.2274 7.28473 23.2274 7.43578L23.2343 9.15226H23.2411ZM32.3041 30.8554H31.1712V17.0893C31.8098 16.9588 32.3865 16.6018 32.7985 16.0937C33.2104 15.5856 33.437 14.9471 33.437 14.288C33.437 14.2605 33.437 14.233 33.4301 14.2056L32.4346 7.18861C32.3796 6.78352 32.1737 6.4059 31.8716 6.13813C31.5626 5.87036 31.1712 5.71931 30.7593 5.71244H26.6397V1.71648C26.6397 1.26333 26.4612 0.82391 26.1385 0.501212C25.8227 0.178514 25.3901 0 24.937 0H9.07674C8.62359 0 8.19103 0.178514 7.8752 0.501212C7.55251 0.82391 7.37399 1.25646 7.37399 1.71648V5.71244H3.25444C2.84935 5.71244 2.45113 5.86349 2.14216 6.13126C1.8332 6.39903 1.63409 6.77666 1.57229 7.18175L0.576737 14.1987C0.569871 14.2262 0.569871 14.2536 0.569871 14.2811C0.569871 14.9402 0.796446 15.5788 1.2084 16.0868C1.62036 16.5949 2.19709 16.9451 2.83562 17.0824V30.8485H1.70275C1.2496 30.8485 0.817044 31.0271 0.501212 31.3498C0.178514 31.6725 0 32.105 0 32.565C0 33.0182 0.178514 33.4576 0.501212 33.7803C0.817044 34.103 1.2496 34.2815 1.70275 34.2815H32.2973C32.7504 34.2815 33.183 34.103 33.4988 33.7803C33.8146 33.4576 34 33.025 34 32.565C34 32.1119 33.8215 31.6725 33.4988 31.3498C33.183 31.0271 32.7504 30.8485 32.2973 30.8485L32.3041 30.8554ZM28.8986 6.85905H30.7524C30.8897 6.85905 31.0202 6.90711 31.1232 7.00323C31.2262 7.09249 31.2948 7.21607 31.3154 7.35339L32.3041 14.3292C32.2973 14.7823 32.1119 15.2217 31.7892 15.5376C31.4665 15.8534 31.0339 16.0319 30.5808 16.025C30.1276 16.0182 29.7019 15.8328 29.3861 15.5101C29.0703 15.1874 28.8986 14.748 28.8986 14.288V6.85905ZM26.6329 12.0016V6.85905H27.7658V14.288C27.7658 14.7411 27.5872 15.1805 27.2645 15.5032C26.9487 15.8259 26.5162 16.0044 26.063 16.0044C25.6099 16.0044 25.1773 15.8259 24.8615 15.5032C24.5456 15.1805 24.3603 14.748 24.3603 14.288V13.7181H24.9301C25.3833 13.7181 25.8158 13.5396 26.1317 13.2169C26.4544 12.8942 26.6329 12.4616 26.6329 12.0016ZM8.50687 1.72334C8.50687 1.57229 8.56866 1.42811 8.67165 1.31826C8.77464 1.2084 8.91882 1.15347 9.06987 1.15347H24.9301C25.0057 1.15347 25.0812 1.16721 25.1498 1.19467C25.2185 1.22213 25.2803 1.26333 25.3352 1.31826C25.3901 1.37318 25.4313 1.43498 25.4588 1.50364C25.4863 1.57229 25.5 1.64782 25.5 1.72334V12.0016C25.5 12.1527 25.4382 12.2969 25.3352 12.4067C25.2322 12.5166 25.088 12.5715 24.937 12.5715H9.07674C8.92569 12.5715 8.7815 12.5097 8.67851 12.4067C8.57553 12.2969 8.51373 12.1527 8.51373 12.0016V1.72334H8.50687ZM23.2343 13.7181V14.288C23.2343 14.7411 23.0557 15.1805 22.733 15.5032C22.4103 15.8259 21.9847 16.0044 21.5315 16.0044C21.0784 16.0044 20.6458 15.8259 20.33 15.5032C20.0073 15.1805 19.8288 14.748 19.8288 14.288V13.7181H23.2343ZM18.7027 13.7181V14.288C18.7027 14.7411 18.5242 15.1805 18.2015 15.5032C17.8788 15.8259 17.4532 16.0044 17 16.0044C16.5469 16.0044 16.1143 15.8259 15.7985 15.5032C15.4826 15.1805 15.2973 14.748 15.2973 14.288V13.7181H18.7027ZM14.1712 13.7181V14.288C14.1712 14.7411 13.9927 15.1805 13.67 15.5032C13.3542 15.8259 12.9216 16.0044 12.4685 16.0044C12.0153 16.0044 11.5828 15.8259 11.267 15.5032C10.9511 15.1805 10.7658 14.748 10.7658 14.288V13.7181H14.1712ZM6.24112 6.86591H7.37399V12.0085C7.37399 12.4616 7.55251 12.9011 7.8752 13.2237C8.19103 13.5464 8.62359 13.725 9.07674 13.725H9.63974V14.2948C9.63974 14.748 9.46123 15.1874 9.13853 15.5101C8.81583 15.8328 8.38328 16.0113 7.937 16.0113C7.48385 16.0113 7.05129 15.8328 6.73546 15.5101C6.41276 15.1874 6.23425 14.7548 6.23425 14.2948V6.86591H6.24112ZM5.67124 16.0044C5.93215 16.3615 6.27544 16.6498 6.67367 16.849C7.06502 17.0481 7.49758 17.1511 7.94386 17.1511C8.38328 17.1511 8.81583 17.0481 9.21406 16.849C9.60541 16.6498 9.94871 16.3615 10.2165 16.0044C10.4774 16.3615 10.8207 16.6498 11.2189 16.849C11.6103 17.0481 12.0428 17.1511 12.4891 17.1511C12.9285 17.1511 13.3611 17.0481 13.7593 16.849C14.1506 16.6498 14.4939 16.3615 14.7617 16.0044C15.0226 16.3615 15.3659 16.6498 15.7641 16.849C16.1555 17.0481 16.588 17.1511 17.0275 17.1511C17.4669 17.1511 17.8994 17.0481 18.2977 16.849C18.689 16.6498 19.0323 16.3615 19.3001 16.0044C19.561 16.3615 19.9043 16.6498 20.3025 16.849C20.6939 17.0481 21.1264 17.1511 21.5727 17.1511C22.0121 17.1511 22.4447 17.0481 22.8429 16.849C23.2342 16.6498 23.5775 16.3615 23.8453 16.0044C24.1062 16.3615 24.4495 16.6498 24.8477 16.849C25.2391 17.0481 25.6716 17.1511 26.1179 17.1511C26.5574 17.1511 26.9899 17.0481 27.3813 16.849C27.7726 16.6498 28.1159 16.3615 28.3837 16.0044C28.8025 16.5606 29.4067 16.9451 30.0864 17.0824V30.8554H14.2193V22.8566C14.2193 21.6414 13.7387 20.481 12.8942 19.6228C12.0428 18.7645 10.8893 18.2839 9.6878 18.2839C8.48627 18.2839 7.3328 18.7645 6.48142 19.6228C5.63005 20.481 5.1563 21.6414 5.1563 22.8566V30.8554H4.02343V17.0824C4.70315 16.9451 5.30735 16.5606 5.72617 16.0044H5.67124ZM13.0384 22.8635V30.8623H6.24112V22.8635C6.22052 22.4035 6.29604 21.9366 6.45396 21.504C6.61874 21.0715 6.86591 20.6733 7.18175 20.3368C7.49758 20.0004 7.88207 19.7326 8.30089 19.5541C8.72658 19.3687 9.17973 19.2795 9.63974 19.2795C10.0998 19.2795 10.5529 19.3756 10.9786 19.5541C11.4043 19.7395 11.7819 20.0004 12.0977 20.3368C12.4136 20.6733 12.6607 21.0715 12.8255 21.504C12.9903 21.9366 13.059 22.4035 13.0384 22.8635ZM1.70961 14.336L2.6983 7.36026C2.7189 7.22294 2.78756 7.09935 2.89055 7.0101C2.99354 6.92084 3.12399 6.87278 3.26131 6.86591H5.11511V14.2948C5.09451 14.7343 4.91599 15.1462 4.60016 15.4552C4.28433 15.7641 3.87238 15.9358 3.43296 15.9426C3.0004 15.9495 2.57472 15.7847 2.25889 15.4826C1.93619 15.1874 1.74394 14.7754 1.71648 14.336H1.70961ZM32.3041 33.1418H1.70961C1.55856 33.1418 1.41438 33.08 1.31139 32.977C1.2084 32.8671 1.14661 32.7229 1.14661 32.5719C1.14661 32.4208 1.2084 32.2767 1.31139 32.1668C1.41438 32.0569 1.55856 32.002 1.70961 32.002H32.3041C32.4552 32.002 32.5994 32.0638 32.7023 32.1668C32.8053 32.2767 32.8671 32.4208 32.8671 32.5719C32.8671 32.7229 32.8053 32.8671 32.7023 32.977C32.5994 33.0868 32.4552 33.1418 32.3041 33.1418ZM11.3425 25.7128H12.4754V26.8526H11.3425V25.7128ZM25.5069 23.4265H26.6397V21.1401C26.6397 20.9891 26.5779 20.8449 26.475 20.7351C26.372 20.6252 26.2278 20.5703 26.0767 20.5703H23.811V21.71H25.5137V23.4265H25.5069ZM17.5699 20.0004C17.5699 19.9249 17.5836 19.8494 17.6111 19.7807C17.6385 19.712 17.6797 19.6502 17.7347 19.5953C17.7896 19.5404 17.8514 19.4992 17.92 19.4717C17.9887 19.4443 18.0642 19.4305 18.1397 19.4305H27.2027C27.3538 19.4305 27.498 19.4923 27.601 19.5953C27.704 19.7052 27.7658 19.8494 27.7658 20.0004V27.9992C27.7658 28.1502 27.704 28.2944 27.601 28.4043C27.498 28.5141 27.3538 28.5691 27.2027 28.5691H18.1397C17.9887 28.5691 17.8445 28.5073 17.7415 28.4043C17.6385 28.2944 17.5767 28.1502 17.5767 27.9992V20.0004H17.5699Z" fill="#AAAAAA"/>
                            </svg>

                </div>
                  </div>

              </div>

                <div class="line " onclick="openCity(event, 'satanda','image')">
                    <div class="content " >
                        <h4>Avtomobil Satanda</h4> <img data-image="{{asset('/front/autima/')}}/assets/img/home/sat.png" src="{{asset('/front/autima/')}}/assets/img/home/sat.png"  alt="...">

                    </div>

                </div>

            </div>
          {{--   <div class="lines">
                <div class="line active-line"></div>
                <div class="line"></div>
            </div> --}}
    </div>
            <div class="col-lg-12">
                <div class="component-tabs">
                <div id="alanda" class="tabcontent  " style="display: block" >

                    <div class="row ">
                        <div class="col-lg-3">
                            <div class="alanda-component">
                                <img src="{{asset('/front/autima/')}}/assets/img/home/Group 38874.png"  alt="...">
                                <p>Özəl seçilmiş
                                    avtomobillərdən sizə
                                    uyğun olanını tapın</p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="alanda-component">
                                <img src="{{asset('/front/autima/')}}/assets/img/home/buy2 1.png"  alt="...">
                                <p>Sərfəli kredit və lizinq
                                    şərtlərilə əldə edin</p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="alanda-component">
                                <img  src="{{asset('/front/autima/')}}/assets/img/home/buy4.png"  alt="...">
                                <p>Avtomobilli ürəy
                                    rahatlığı ilə əldə edin</p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="alanda-component">
                                <img src="{{asset('/front/autima/')}}/assets/img/home/Group 38675.png"  alt="...">
                                <p>Sifarişlə istədiyiniz
                                    avtomobili təqdim
                                    edə bilərik</p>
                            </div>
                        </div>
                    </div>
                   </div>
                </div>
                <div class="component-tabs">
                <div id="satanda" class="tabcontent"  >
                 <div class="row">
                    <div class="col-lg-3">  <div class="alanda-component">
                        <img src="{{asset('/front/autima/')}}/assets/img/home/Calendar.png"  alt="...">
                        <p>Avtomobilinizin
                            qiymətinin qısa
                            zamanda təyini
                            </p>
                    </div></div>
                    <div class="col-lg-3">  <div class="alanda-component">
                        <img src="{{asset('/front/autima/')}}/assets/img/home/Group 38895.png"  alt="...">
                        <p>Pulunuzun eyni iş günü
                            ərzində ödənilməsi
                            </p>
                    </div></div>
                    <div class="col-lg-3">  <div class="alanda-component">
                        <img src="{{asset('/front/autima/')}}/assets/img/home/car (1) 1.png"  alt="...">
                        <p>Barter şansları
                        </p>
                    </div></div>
                    <div class="col-lg-3">  <div class="alanda-component">
                        <img src="{{asset('/front/autima/')}}/assets/img/home/back-in-time 1.png"  alt="...">
                        <p>Vaxtınıza qənaət</p>
                    </div></div>
                 </div>
                </div>
                </div>
            </div>

          </div>
      </div>
  </section>
  @section('script')
  <script>

      function openCity(evt, cityName) {

        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("line");



        for (i = 0; i < tablinks.length; i++) {

          tablinks[i].className = tablinks[i].className.replace("aktive-line", "");

           }

        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += "aktive-line";




      }
      </script>
  @endsection

  @endsection

