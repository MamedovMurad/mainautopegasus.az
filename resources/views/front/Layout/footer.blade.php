





  <footer class="footer_widgets">
    <div class="container">
        <div class="footer_top">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="widgets_container contact_us">
                        <div class="footer_logo">
                            <a href="#"><img src="{{asset('/front/autima/')}}/assets/img/auto-logo/Logo_Pegasus.png" alt=""></a>
                        </div>
                        <div class="footer_contact">

                            <p style="margin:0; padding:0"><span>Ünvanlar</span> Baş ofis: Dəmirçi Plaza 17-ci Mərtəbə
                            <p style="margin: 0; padding:0">Satış mərkəzi: Ağa Centre 1-ci Mərtəbə</p></p>
                            <p><span> Bizə Zəng Edin</span> <a  href="tel:+994 70 319 04 04">+994 70 319 04 04 <br> </a>

                            <a  href="tel:+994 70 718 88 82">+994 70 718 88 82</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="widgets_container widget_menu" style="padding-left: 20px">

                        <div class="footer_menu">
                            <ul>
                                <li><a href="about.html">Avtomobil Al</a></li>
                                <li><a href="#">Avtomobil Sat</a></li>
                                <li><a href="privacy-policy.html">Ətraflı Axtarış</a></li>
                                <li><a href="coming-soon.html">Ən Çox Soruşulan Suallar</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="widgets_container widget_menu">

                        <div class="footer_menu">
                            <ul>
                                <li><a href="#">Haqqımızda</a></li>
                                <li><a href="#">TezSat!</a></li>
                                <li><a href="wishlist.html">100 Nöqtə Yoxlanışı</a></li>
                                <li><a href="#">Kredit Şərtlərimiz</a></li>
                                <li><a href="#">Barter</a></li>
                                <li><a href="#">Test Drive</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">



                 <div class="widgets_container">
                    <div class="row" >

     <div class="flex" style="display: flex;
     justify-content: center">
        <div class="custom-mobile-icon">
            <style>
                .custom-mobile-icon{
padding: 0px 5px;
                }
            </style>
            <div class="custom-icon" >
                <i class="fab fa-facebook"></i>
            </div>
        </div>
<div class="custom-mobile-icon">
<div class="custom-icon">
    <i class="fab fa-linkedin-in"></i> </div>
</div>
       <div class=" custom-mobile-icon">
        <div class="custom-icon">
            <i class="fab fa-instagram"></i></div>
       </div>
           <div class="custom-mobile-icon">
            <div class="custom-icon">
                <i class="fab fa-telegram-plane"></i>  </div>
           </div>
     </div>
                    </div>
                     {{--    <h3>Newsletter Subscribe</h3>
                        <p>We’ll never share your email address with a third-party.</p>
                        <div class="subscribe_form">
                            <form id="mc-form" class="mc-form footer-newsletter">
                                <input id="mc-email" type="email" autocomplete="off" placeholder="Enter you email address here..." />
                                <button id="mc-submit">Subscribe</button>
                            </form>
                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts text-centre">
                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                            </div><!-- mailchimp-alerts end -->
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="copyright_area">
                        <p> Bütün Hüquqları Qorunur - 2020 ©</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">

                </div>
            </div>
        </div>
    </div>
</footer>
<script src="./path/to/dropzone.js"></script>
<!--jquery min js-->
<script src="{{asset('/front/autima/')}}/assets/js/vendor/jquery-3.4.1.min.js"></script>
<!--popper min js-->
<script src="{{asset('/front/autima/')}}/assets/js/popper.js"></script>
<!--bootstrap min js-->
<script src="{{asset('/front/autima/')}}/assets/js/bootstrap.min.js"></script>
<!--owl carousel min js-->
<script src="{{asset('/front/autima/')}}/assets/js/owl.carousel.min.js"></script>
<!--slick min js-->
<script src="{{asset('/front/autima/')}}/assets/js/slick.min.js"></script>
<!--magnific popup min js-->
<script src="{{asset('/front/autima/')}}/assets/js/jquery.magnific-popup.min.js"></script>
<!--jquery countdown min js-->
<script src="{{asset('/front/autima/')}}/assets/js/jquery.countdown.js"></script>
<!--jquery ui min js-->
<script src="{{asset('/front/autima/')}}/assets/js/jquery.ui.js"></script>
<!--jquery elevatezoom min js-->
<script src="{{asset('/front/autima/')}}/assets/js/jquery.elevatezoom.js"></script>
<!--isotope packaged min js-->
<script src="{{asset('/front/autima/')}}/assets/js/isotope.pkgd.min.js"></script>
<!--slinky menu js-->
<script src="{{asset('/front/autima/')}}/assets/js/slinky.menu.js"></script>
<!-- Plugins JS -->
<script src="{{asset('/front/autima/')}}/assets/js/plugins.js"></script>

<!-- Main JS -->
<script src="{{asset('/front/autima/')}}/assets/js/main.js"></script>
<script>

    $('#click').click(function(e){
    e.preventDefault();
    let toast = document.createElement('div');
    toast.classList.add('custom-toastr');
  toast.innerHTML="<p>Əlavə olundu</p>";
  document.querySelector('body').appendChild(toast)

    setTimeout(() => {
        toast.classList.remove('custom-toastr')
        toast.innerHTML=""
    },1000);
    })
    </script>

@yield('script')







</body>


</html>
