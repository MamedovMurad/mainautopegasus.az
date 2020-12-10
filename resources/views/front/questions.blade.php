
@extends('front.Layout.master')
@section('content')











   <!--Offcanvas menu area start-->
   <div class="off_canvars_overlay"></div>
   <div class="Offcanvas_menu canvas_padding">
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


                       <div class="top_right text-right">
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
                                       <li><a href="#"><img src="assets/img/logo/language.png" alt=""> English</a></li>
                                       <li><a href="#"><img src="assets/img/logo/language2.png" alt=""> Germany</a></li>
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
                       </div>
                       <div class="Offcanvas_follow">
                           <label>Follow Us:</label>
                           <ul class="follow_link">
                               <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                               <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                               <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                               <li><a href="#"><i class="ion-social-youtube"></i></a></li>
                           </ul>
                       </div>
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

  {{--  <!--breadcrumbs area start-->
   <div class="breadcrumbs_area">
       <div class="container">
           <div class="row">
               <div class="col-12">
                   <div class="breadcrumb_content">
                       <ul>
                           <li><a href="index.html">home</a></li>
                           <li>Frequently Questions</li>
                       </ul>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!--breadcrumbs area end--> --}}

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

    <section class="customer-question mt-4 mb-20">
  <div class="container">
      <div class="row">
    <form action="" class="form-floating col-lg-12" >
        <div class="row">
            <div class="mb-3 col-lg-6">
                <label for="ad" class="form-label">Ad:</label>
                <input type="text" class="form-control" id="ad" placeholder="adınızı daxil edin ...">
            </div>
            <div class="mb-3 col-lg-6">
                <label for="nomre" class="form-label">nömrə:</label>
                <input type="number" class="form-control" id="nomre" placeholder="nömrə daxil edin ...">
            </div>
        </div>


          <div class="mb-3 col-lg-12">
            <label for="exampleFormControlTextarea1" class="form-label">Sual:</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <button class="btn btn-block btn-outline-warning">Göndər</button>
    </form>
      </div>
  </div>
    </section>
    <!--slider area end-->
   <!--faq area start-->
   <div class="faq_content_area mt-32">
       <div class="container">
           <div class="row">
               <div class="col-12">
                   <div class="faq_content_wrapper">

                       <p>Avtomobil alqı-satqısı və sifariş prosesi istək və ehtiyaclarınızı müəyyənləşdirməklə başlayan,
                            satış və satışdan sonrakı xidmətlər ilə davam edən əziyyətsiz bir təcrübədir.
                             "Müştəri məmnuniyyəti" prinsipi ilə hazırlanmış bütün proseslərin hər mərhələsində sizi bir şirkət əməkdaşı qarşılayacaq və
                              "alverçi" narahatçılığından xilas olacaqsınız;
                               Auto Pegasus "gözlədiyinizdən də artıq" xidmət prinsipini özünə məqsəd tutmuşdur.
                                Komfortlu və rahat bir şəraitdə avtomobilini seçmək,
                            sifariş etmək və əziyyətsiz əldə etmək üçün hazırladığımız şərtlərimizlə sizləri tanış edək:</p>

                   </div>
               </div>
           </div>
       </div>
   </div>
   <!--Accordion area-->
   <div class="accordion_area">
       <div class="container">
           <div class="row">
            {{--    <div class="col-lg-12"> --}}
                   <div id="accordion" class="card__accordion">
                       <div class=" card_dipult col-lg-12 mb-2" >
                           <div class="card-header card_accor" id="headingOne">
                               <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Hansı ölkədən avtomobil sifariş verə bilərəm?

                                   <i class="fa fa-plus"></i>
                                   <i class="fa fa-minus"></i>

                               </button>

                           </div>

                           <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                               <div class="card-body">
                                   <p>Həm ölkədaxili, həm də ölkəxarici, əsasən Amerika, Avropa,
                                        Yaponiya, Koreya və digər Asiya ölkələrindən arzuladığınız avtomobili sifariş verə bilərsiniz.</p>
                               </div>
                           </div>
                       </div>
                       <div class="  card_dipult col-lg-12 mb-2">
                           <div class="card-header card_accor" id="headingTwo">
                               <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Bəs pulum çatmasa?
                                   <i class="fa fa-plus"></i>
                                   <i class="fa fa-minus"></i>

                               </button>
                           </div>
                           <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                               <div class="card-body">
                                   <p>Siz buna görə narahat olmayın. Siz arzuladığınız avtomobili sifariş verib onun dəyərinin bir
                                        hissəsini ödəməklə yerdə qalan hissəni 36 aya qədər sərfəli kredit şərtlərilə əldə edə bilərsiniz.</p>
                               </div>
                           </div>
                       </div>
                       <div class="  card_dipult col-lg-12 mb-2">
                           <div class="card-header card_accor" id="headingThree">
                               <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Bəs maşını kim yoxlayacaq?
                                   <i class="fa fa-plus"></i>
                                   <i class="fa fa-minus"></i>
                               </button>
                           </div>
                           <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                               <div class="card-body">
                                   <p>Avtomobil ölkəyə daxil olduqdan sonra peşəkar ekspert komandamız tərəfindən bütün lazımi işlər görülür,
                                       avtomobildə "100 Nöqtə" proseduru həyata keçirilir. Əgər avtomobil gəldikdən sonra təmir ehtiyacı yaranarsa,
                                        müqaviləli servislərdə təmir olunur, yoxlanılır və sizə ən təmiz formada təqdim olunur. Siz servisə getmirsiniz,
                                         siz usta ilə danışmırsınız, siz əlavə ödəniş ödəmirsiniz,
                                        siz yorulmursunuz. Bütün prosedur şirkətimizin təcrübəli və dinamik heyəti tərəfindən həyata keçirilir.</p>
                               </div>
                           </div>
                       </div>
                       <div class=" card_dipult col-lg-12 mb-2">
                           <div class="card-header card_accor" id="headingfour">
                               <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                                "100 Nöqtə" yoxlanışı nədir?
                                   <i class="fa fa-plus"></i>
                                   <i class="fa fa-minus"></i>
                               </button>
                           </div>
                           <div id="collapseeight" class="collapse" aria-labelledby="headingfour" data-parent="#accordion">
                               <div class="card-body">
                                   <p>"100 Nöqtə" yoxlanışı avtomobilin dəyərinə təsir edə biləcək; kuzov və boya vəziyyətinin, mühərrik və mexaniki hissələrin Auto
                                        Pegasus servis heyəti tərəfindən dəqiq yoxlanıldığı özəl bir prosesdir. Beləcə avtomobilin əvvəlki və mövcud vəziyyəti analiz
                                         edilir, hesabat hazırlanır və müştərilərə təqdim edilir. Yoxlamadan keçibsə,
                                        deməli yaxşı maşındır, ürək rahatlığı ilə alıb sürə bilərsiniz. Necə deyərlər, 100 yoxlayıb, 1 alırıq.</p>
                               </div>
                           </div>
                       </div>

                   </div>
               </div>
         {{--   </div> --}}
       </div>
   </div>
   <!--Accordion area end-->
   <!--faq area end-->




   @endsection
