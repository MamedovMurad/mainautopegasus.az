@extends('front.Layout.master')
@section('content')


<section class="header-banner-service" style="background-image: url('{{asset('/front/autima/')}}/assets/img/fast-sell/2.png')">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="service-title" style="display: flex; justify-content:flex-end">
                    <h2>Elə İNDİSAT <span>   <img src="{{asset('/front/autima/')}}/assets/img/fast-sell/banner-logo.png"</span></h2>
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
                    <span >Xidmətlərimiz</span>
                    <span> <img  src="{{asset('/front/autima/')}}/assets/img/service/service-icon.png" alt=""></span>
                </div>

                <div class="tab-links">
                    <ul class="tab">
                        <li class="tablinks active-link" onclick="openCity(event, 'yuz_noqte')">100 NÖQTƏ YOXLANIŞI</li>
                        <li class="tablinks" onclick="openCity(event, 'kredit','KREDİT')">KREDİT</li>
                        <li class="tablinks" onclick="openCity(event, 'qiymetlendirme','QİYMƏTLƏNDİRMƏ')">QİYMƏTLƏNDİRMƏ</li>
                        <li class="tablinks" onclick="openCity(event, 'barter','BARTER')">BARTER</li>
                        <li class="tablinks" onclick="openCity(event, 'satin','')">BİZİMLƏ SATIN</li>
                        <li class="tablinks" onclick="openCity(event, 'odeniskimi')">KÖHNƏ AVTOMOBİL İLKİN ÖDƏNİŞ KİMİ</li>
                        <li class="tablinks" onclick="openCity(event, 'Tokyo')">TEST DRİVE</li>
                        <li class="tablinks" onclick="openCity(event, 'Tokyo')">SİFARİŞ VER</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="tab-component">
                    <div id="yuz_noqte" class="tabcontent">
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
                            <img src="{{asset('/front/autima/')}}/assets/img/service/yuz-noqte.png"
                        </div>
                      </div>
                </div>
            <div id="kredit">

            </div>
            </div>
        </div>
    </div>
</section>



@section('script')
<script>
    function openCity(evt, cityName,banTitle) {
     ;
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

    }
    </script>
@endsection
@endsection
