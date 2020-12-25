@extends('front.Layout.master')
@section('content')

<section class="header-banner-service" style="background-image: url('{{asset('/front/autima/')}}/assets/img/service/service-banner.png')">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="service-title" style="display: flex; justify-content:flex-end">
                    <h2 class="banner-title">100 Yoxlayıb, 1 Alırıq</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="service-tab mt-2 mb-20" >
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="tab-link-title">
                    <span>Xidmətlərimiz</span>
                    <span> <img  src="{{asset('/front/autima/')}}/assets/img/service/service-icon.png" alt=""></span>
                </div>

                <div class="tab-links">
                    <ul class="tab">
                        <li class="tablinks active-link" onclick="openCity(event, 'yuz_noqte','100 NÖQTƏ YOXLANIŞI')">100 NÖQTƏ YOXLANIŞI</li>
                        <li class="tablinks" onclick="openCity(event, 'kredit','KREDİT')">KREDİT</li>
                        <li class="tablinks" onclick="openCity(event, 'qiymetlendirme','QİYMƏTLƏNDİRMƏ')">QİYMƏTLƏNDİRMƏ</li>
                        <li class="tablinks" onclick="openCity(event, 'barter')">BARTER</li>
                        <li class="tablinks" onclick="openCity(event, 'satin')">BİZİMLƏ SATIN</li>
                        <li class="tablinks" onclick="openCity(event, 'odeniskimi')">KÖHNƏ AVTOMOBİL İLKİN ÖDƏNİŞ KİMİ</li>
                        <li class="tablinks" onclick="openCity(event, 'Tokyo')">TEST DRİVE</li>
                        <li class="tablinks" onclick="openCity(event, 'Tokyo')">SİFARİŞ VER</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="tab-component" style="overflow: hidden">
                    <div id="yuz_noqte" class="tabcontent"  >
                        <div class="o100-noqte-title">
                            <p>100 Nöqtə Yoxlanışı</p>
                        </div>
                        <div class="content-100-noqte mt-20">
                            <p>
                                Avtomobil almaq ciddi işdir, amma çətin deyil. Təmiz və ürəyinizcə olan avtomobil almaq üçün günlərinizi ayırıb tanış usta axtararaq avtomobilinizi yoxlatmağınıza artıq ehtiyac yoxdur. Biz sizin əvəzinizə avtomobilin 100 nöqtə yoxlanışını həyata keçiririk.
                                <br> <br>

                                "100 Nöqtə" yoxlanışı avtomobilin dəyərinə təsir edə biləcək; kuzov və boya vəziyyətinin, mühərrik və mexaniki hissələrin Auto Pegasus servis heyəti tərəfindən dəqiq yoxlanıldığı özəl bir prosesdir. Beləcə avtomobilin əvvəlki və mövcud vəziyyəti analiz edilir, hesabat hazırlanır və müştərilərə təqdim edilir.  Necə deyərlər, 100 yoxlayıb, 1 alırıq.
                            </p>

                        </div>
                        <div class="img-100-noqte mt-5">
                            <img src="{{asset('/front/autima/')}}/assets/img/service/yuz-noqte.png">
                        </div>
                      </div>
                      <div id="kredit" class="tabcontnet">
                          <div class="title-img d-flex" style="justify-content: flex-end">
                            <img src="{{asset('/front/autima/')}}/assets/img/service/cityFinance.png">
                          </div>
                        <div class="o100-noqte-title">
                            <p>KREDİT</p>
                        </div>
                        <div class="content-100-noqte mt-20">
                            <p>
                                Partnyorumuz City Finance BOKT-un cəlbedici kredit və ödəniş şərtləri Auto Pegesusun dəqiq xidmətilə sizlərə təqdim edilir. Siz Auto Pegasusun satış mərkəzinə yaxınlaşaraq qısa zaman ərzində kredit əldə edə bilərsiniz. <br> <br>

                                Peşəkar satış və kredit mütəxəssislərimiz bəyəndiyiniz avtomobili ən qısa yol və qısa müddət ərzində əldə etmənizi təmin edəcəklər. <br> <br>

                                Bütün kredit əməliyyatlarınız bir ofisdə baş tutur və etibarlı şəkildə tez və zəhmətsiz formada avtomobilinə sahib olursunuz. </p>
                        </div>
                        <div class="img-100-noqte mt-5 d-flex" style="justify-content:center">
                            <img src="{{asset('/front/autima/')}}/assets/img/service/kredit.png">
                        </div>
                        </div>
                </div>

            </div>
        </div>
    </div>
</section>
@include('front.widget.indi_sat_footer')


@section('script')
<script>
    function openCity(evt, cityName,banTitle) {
        var ban_title=document.querySelector(".banner-title")
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active-link", "");
      }

      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active-link";
      ban_title.innerText=banTitle;
    }
    </script>
@endsection
@endsection
