





  <footer class="footer_widgets" style="background: #090B4D; color:white; ">
    <div class="container">
        <div class="footer_top">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="widgets_container contact_us">
                        <div class="footer_logo mb-3">
                            <a href="#"><img src="{{asset('/front/autima/')}}/assets/img/auto-logo/Logo_Pegasus2.png" alt=""></a>
                        </div>
                        <div class="footer_menu " style="    margin-top: 1.5rem!important;">
                            <ul>
                                <li><a href="about.html">Avtomobil Al</a></li>
                                <li><a href="#">Avtomobil Sat</a></li>
                                <li><a href="privacy-policy.html">Ətraflı Axtarış</a></li>
                                <li><a href="coming-soon.html">Ən Çox Soruşulan Suallar</a></li>
                                <li><a href="#" >Haqqımızda</a></li>

                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="widgets_container widget_menu" style="padding-left: 20px ; margin-top: 60px; font-size: 18px " >
                        <div class="footer_menu">
                            <style>
                                .footer_menu>ul>li>a{
                                    font-size: 18px;
                                }
                            </style>
                            <ul>

                                <li><a href="#">TezSat!</a></li>
                                <li><a href="wishlist.html">100 Nöqtə Yoxlanışı</a></li>
                                <li><a href="#">Kredit Şərtlərimiz</a></li>
                                <li><a href="#">Barter</a></li>
                                <li><a href="#">Test Drive</a></li>
                            </ul>
                        </div>


                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
             <div class="flex" style="display: flex;
                    justify-content:flex-end; margin-bottom: 30px">
                       <div class="custom-mobile-icon">
                           <style>
                               .custom-mobile-icon{
               padding: 0px 5px;
                               }
                           </style>
                           <div class="custom-icon" >
                            <img src="{{asset('/front/autima/')}}/assets/img/footer-icon/youtube.png">
                           </div>
                       </div>
               <div class="custom-mobile-icon">
               <div class="custom-icon">
                <img src="{{asset('/front/autima/')}}/assets/img/footer-icon/insta.png"> </div>
               </div>
                      <div class=" custom-mobile-icon">
                       <div class="custom-icon">
                        <img src="{{asset('/front/autima/')}}/assets/img/footer-icon/in.png"></div>
                      </div>
                          <div class="custom-mobile-icon">
                           <div class="custom-icon">
                            <img src="{{asset('/front/autima/')}}/assets/img/footer-icon/wp.png">  </div>
                          </div>
                          <div class="custom-mobile-icon">
                            <div class="custom-icon" >
                                <img src="{{asset('/front/autima/')}}/assets/img/footer-icon/fb.png">
                            </div>
                           </div>
            </div>
                    <div class="widgets_container widget_menu">
                        <div class="footer_contact" style="text-align: right; padding-right:5px;">

                            <p style="margin:0; padding:0; "><span style="color: white" >Ünvanlar</span> Baş ofis: Dəmirçi Plaza 17-ci Mərtəbə
                            <p style="margin: 0; padding:0 ;font-size:15px" >Satış mərkəzi: Ağa Centre 1-ci Mərtəbə</p></p>
                            <p><span style="color: white"> Bizə Zəng Edin</span>
                                 <a style="font-size: 15px"  href="tel:+994 70 319 04 04">+994 70 319 04 04  </a> <br>

                         &nbsp;   <a  style="font-size: 15px" href="tel:+994 70 718 88 82">+994 70 718 88 82</a>
                            </p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <div class="footer_bottom">
            <div class="row">
                <div class="col-lg-12 col-md-6">
                    <div class="copyright_area" style="display: flex;
                    justify-content: flex-end">
                        <p> Bütün Hüquqları Qorunur - 2020 ©</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>

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
