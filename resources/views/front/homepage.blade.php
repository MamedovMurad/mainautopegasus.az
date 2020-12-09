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

    <!--shipping area start-->
    <section class="shipping_area mb-20">
        <div class="container">
            <div class=" row">
                <div class="col-12">
                    <div class="shipping_inner">
                       <a href="">
                        <div class="single_shipping">
                            <div class="shipping_icone">
                                <img src="{{asset('/front/autima/')}}/assets/img/about/shipping1.png" alt="">
                            </div>
                            <div class="shipping_content">
                                <h2>TezSat!</h2>
                                <p>Avtomobilinizin qiymətində razılaşacaq, 1 saat ərzində pulunuz hesabınızda.  <br><span>Ətraflı</span></p>
                            </div>
                        </div>

                       </a>
                    <a href="">
                        <div class="single_shipping">
                            <div class="shipping_icone">
                                <img src="{{asset('/front/autima/')}}/assets/img/about/shipping2.png" alt="">
                            </div>
                            <div class="shipping_content">
                                <h2>Sərfəli Kredit</h2>
                                <p>36 aya qədər sərfəli kredit və lizinq şərtlərimiz işinizi rahatlaşdıracaq. <br> <br><span>Ətraflı</span></p>

                            </div>
                        </div>
                    </a>

           {{--      <a href="">
                    <div class="single_shipping">
                        <div class="shipping_icone">
                            <img src="{{asset('/front/autima/')}}/assets/img/about/shipping4.png" alt="">
                        </div>
                        <div class="shipping_content">
                            <h2>100 Nöqtə Yoxlanışı</h2>
                            <p>100 yoxlayıb, 1 alırıq, inamınızı doğrulduruq. <br> <br>  <span>Ətraflı</span></p>
                        </div>
                    </div>
                   </a> --}}
                   <a href="">
                    <div class="single_shipping">
                        <div class="shipping_icone">
                            <img src="{{asset('/front/autima/')}}/assets/img/about/shipping4.png" alt="">
                        </div>
                        <div class="shipping_content">
                            <h2>100 Nöqtə Yoxlanışı</h2>
                            <p>100 yoxlayıb, 1 alırıq, inamınızı doğrulduruq.    &nbsp; &nbsp;</p>
                            <span>Ətraflı</span>
                        </div>
                    </div>
                   </a>
                   <a href="">
                    <div class="single_shipping">
                        <div class="shipping_icone">
                            <img src="{{asset('/front/autima/')}}/assets/img/about/shipping4.png" alt="">
                        </div>
                        <div class="shipping_content">
                            <h2>Barter</h2>
                            <p>Barter xidmətinizdədir. Sizə zəhmətsiz alış təcrübəsini yaşadacağıq.</p>
                            <span>Ətraflı</span>
                        </div>
                    </div>
                   </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--shipping area end-->
    <section class="filter-car mb-20" style="background: rgb(175, 174, 174); padding:20px 0">
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

    <!--product area start-->
    <section class="product_area mb-50 ">
        <div class="container">
            <div class="row custom-flex">


            <div class="card custom_card" style="width: 12.9rem; margin: 10px; height:287px;">
                <img src="{{asset('/front/autima/')}}/assets/img/featured/featured.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <a href="{{route('carDetail')}}"> <h4> <span>Bmw</span> | <span>550</span></h4> </a>
                  <p class="card-text">avtomobil haqqında məlumat</p>
                  <h4 class="text-danger text-right">200 azn</h4>
                </div>
            </div>


                  <div class="card custom_card" style="width: 12.9rem; margin: 10px; height:287px;">
                    <img src="{{asset('/front/autima/')}}/assets/img/featured/featured.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="{{route('carDetail')}}"> <h4> <span>Bmw</span> | <span>550</span></h4> </a>
                      <p class="card-text">avtomobil haqqında məlumat</p>
                      <h4 class="text-danger text-right">200 azn</h4>
                    </div>
                  </div>
                  <div class="card custom_card" style="width: 12.9rem; margin: 10px; height:287px;">
                    <img src="{{asset('/front/autima/')}}/assets/img/featured/featured.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="{{route('carDetail')}}"> <h4> <span>Bmw</span> | <span>550</span></h4> </a>
                      <p class="card-text">avtomobil haqqında məlumat</p>
                      <h4 class="text-danger text-right">200 azn</h4>
                    </div>
                  </div>
                  <div class="card custom_card" style="width: 12.9rem; margin: 10px; height:287px;">
                    <img src="{{asset('/front/autima/')}}/assets/img/featured/featured.jpg"" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="{{route('carDetail')}}"> <h4> <span>Bmw</span> | <span>550</span></h4> </a>
                      <p class="card-text">avtomobil haqqında məlumat</p>
                      <h4 class="text-danger text-right">200 azn</h4>
                    </div>
                  </div>
                  <div class="card custom_card" style="width: 12.9rem; margin: 10px; height:287px;">
                    <img src="{{asset('/front/autima/')}}/assets/img/featured/featured.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4> <span>Bmw</span> | <span>550</span></h4>
                      <p class="card-text">avtomobil haqqında məlumat</p>
                      <h4 class="text-danger text-right">200 azn</h4>
                    </div>
                  </div>
                  <div class="card custom_card" style="width: 12.9rem; margin: 10px; height:287px;">
                    <img src="{{asset('/front/autima/')}}/assets/img/featured/featured.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4> <span>Bmw</span> | <span>550</span></h4>
                      <p class="card-text">avtomobil haqqında məlumat</p>
                      <h4 class="text-danger text-right">200 azn</h4>
                    </div>
                  </div>
                  <div class="card custom_card" style="width: 12.9rem; margin: 10px; height:287px;">
                    <img src="{{asset('/front/autima/')}}/assets/img/featured/featured.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4> <span>Bmw</span> | <span>550</span></h4>
                      <p class="card-text">avtomobil haqqında məlumat</p>
                      <h4 class="text-danger text-right">200 azn</h4>
                    </div>
                  </div>
                  <div class="card custom_card" style="width: 12.9rem; margin: 10px; height:287px;">
                    <img src="{{asset('/front/autima/')}}/assets/img/featured/featured.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4> <span>Bmw</span> | <span>550</span></h4>
                      <p class="card-text">avtomobil haqqında məlumat</p>
                      <h4 class="text-danger text-right">200 azn</h4>
                    </div>
                  </div>
                  <div class="card custom_card" style="width: 12.9rem; margin: 10px; height:287px;">
                    <img src="{{asset('/front/autima/')}}/assets/img/featured/featured.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4> <span>Bmw</span> | <span>550</span></h4>
                      <p class="card-text">avtomobil haqqında məlumat</p>
                      <h4 class="text-danger text-right">200 azn</h4>
                    </div>
                  </div>
                  <div class="card custom_card" style="width: 12.9rem; margin: 10px; height:287px;">
                    <img src="{{asset('/front/autima/')}}/assets/img/featured/featured.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4> <span>Bmw</span> | <span>550</span></h4>
                      <p class="card-text">avtomobil haqqında məlumat</p>
                      <h4 class="text-danger text-right">200 azn</h4>
                    </div>
                  </div>
                  <div class="card custom_card" style="width: 12.9rem; margin: 10px; height:287px;">
                    <img src="{{asset('/front/autima/')}}/assets/img/featured/featured.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4> <span>Bmw</span> | <span>550</span></h4>
                      <p class="card-text">avtomobil haqqında məlumat</p>
                      <h4 class="text-danger text-right">200 azn</h4>
                    </div>
                  </div>
                  <div class="card custom_card" style="width: 12.9rem; margin: 10px; height:287px;">
                    <img src="{{asset('/front/autima/')}}/assets/img/featured/featured.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4> <span>Bmw</span> | <span>550</span></h4>
                      <p class="card-text">avtomobil haqqında məlumat</p>
                      <h4 class="text-danger text-right">200 azn</h4>
                    </div>
                  </div>




            </div>

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
  @endsection
