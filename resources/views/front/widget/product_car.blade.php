

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



  <!--product area start-->
  <section class="product_area mb-50 ">

    <style>
        .product_area{
            background-color: #dbd7d78f;
        }
        .custom-flex>.custom_card{

            overflow:hidden;
            position: relative;
        }
        .custom-flex>.cuistom-card>img{
            overflow: hidden;
        }
        .card-body>h4{
            position: absolute;
            bottom: 110px;
            color: white;
            background-color: rgba(139, 139, 139, 0.932);
            right: 0;
            padding: 5px

        }
        .card-body>span.label{
            text-align: center;
            width: 120px;
            z-index: 0;
            position: absolute;
            top: 5px;
            left: -28px;
            background-color: rgba(82, 83, 81, 0.644);
            color: white;
            padding: 5px;
            border-radius: 2px;
            display: inline-block;
            transform: rotate(-40deg);
        }
    </style>
    <div class="container">
        <div class="row custom-flex">


        <div class="card custom_card" style="width: 12.9rem; margin: 10px; height:287px;">
            <img src="{{asset('/front/autima/')}}/assets/img/featured/featured.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <span class="label">
                    Kredit
                </span>
                <a href="{{route('carDetail')}}"> <h4> <span>Bmw</span> | <span>550</span></h4> </a>
              <p class="card-text">avtomobil haqqında məlumat</p>
              <h4 class="">200 azn</h4>
            </div>
        </div>


        <div class="card custom_card" style="width: 12.9rem; margin: 10px; height:287px;">
            <img src="{{asset('/front/autima/')}}/assets/img/featured/featured.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <span class="label">
                    Kredit
                </span>
                <a href="{{route('carDetail')}}"> <h4> <span>Bmw</span> | <span>550</span></h4> </a>
              <p class="card-text">avtomobil haqqında məlumat</p>
              <h4 class="">200 azn</h4>
            </div>
        </div>


              <div class="card custom_card" style="width: 12.9rem; margin: 10px; height:287px;">
                <img src="{{asset('/front/autima/')}}/assets/img/featured/featured.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <span class="label">
                        Kredit
                    </span>
                    <a href="{{route('carDetail')}}"> <h4> <span>Bmw</span> | <span>550</span></h4> </a>
                  <p class="card-text">avtomobil haqqında məlumat</p>
                  <h4 class="">200 azn</h4>
                </div>
              </div>
              <div class="card custom_card" style="width: 12.9rem; margin: 10px; height:287px;">
                <img src="{{asset('/front/autima/')}}/assets/img/featured/featured.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <span class="label">
                        Kredit
                    </span>
                    <a href="{{route('carDetail')}}"> <h4> <span>Bmw</span> | <span>550</span></h4> </a>
                  <p class="card-text">avtomobil haqqında məlumat</p>
                  <h4 class="">200 azn</h4>
                </div>
              </div>
              <div class="card custom_card" style="width: 12.9rem; margin: 10px; height:287px;">
                <img src="{{asset('/front/autima/')}}/assets/img/featured/featured.jpg"" class="card-img-top" alt="...">
                <div class="card-body">
                    <span class="label">
                        Kredit
                    </span>
                    <a href="{{route('carDetail')}}"> <h4> <span>Bmw</span> | <span>550</span></h4> </a>
                  <p class="card-text">avtomobil haqqında məlumat</p>
                  <h4 class="">200 azn</h4>
                </div>
              </div>
              <div class="card custom_card" style="width: 12.9rem; margin: 10px; height:287px;">
                <img src="{{asset('/front/autima/')}}/assets/img/featured/featured.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <span class="label">
                        Kredit
                    </span>
                    <a href="{{route('carDetail')}}"> <h4> <span>Bmw</span> | <span>550</span></h4> </a>
                  <p class="card-text">avtomobil haqqında məlumat</p>
                  <h4 class="">200 azn</h4>
                </div>
            </div>


                  <div class="card custom_card" style="width: 12.9rem; margin: 10px; height:287px;">
                    <img src="{{asset('/front/autima/')}}/assets/img/featured/featured.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <span class="label">
                            Kredit
                        </span>
                        <a href="{{route('carDetail')}}"> <h4> <span>Bmw</span> | <span>550</span></h4> </a>
                      <p class="card-text">avtomobil haqqında məlumat</p>
                      <h4 class="">200 azn</h4>
                    </div>
                  </div>
                  <div class="card custom_card" style="width: 12.9rem; margin: 10px; height:287px;">
                    <img src="{{asset('/front/autima/')}}/assets/img/featured/featured.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <span class="label">
                            Kredit
                        </span>
                        <a href="{{route('carDetail')}}"> <h4> <span>Bmw</span> | <span>550</span></h4> </a>
                      <p class="card-text">avtomobil haqqında məlumat</p>
                      <h4 class="">200 azn</h4>
                    </div>
                  </div>
                  <div class="card custom_card" style="width: 12.9rem; margin: 10px; height:287px;">
                    <img src="{{asset('/front/autima/')}}/assets/img/featured/featured.jpg"" class="card-img-top" alt="...">
                    <div class="card-body">
                        <span class="label">
                            Kredit
                        </span>
                        <a href="{{route('carDetail')}}"> <h4> <span>Bmw</span> | <span>550</span></h4> </a>
                      <p class="card-text">avtomobil haqqında məlumat</p>
                      <h4 class="">200 azn</h4>
                    </div>
                  </div>
                  <div class="card custom_card" style="width: 12.9rem; margin: 10px; height:287px;">
                    <img src="{{asset('/front/autima/')}}/assets/img/featured/featured.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <span class="label">
                            Kredit
                        </span>
                        <a href="{{route('carDetail')}}"> <h4> <span>Bmw</span> | <span>550</span></h4> </a>
                      <p class="card-text">avtomobil haqqında məlumat</p>
                      <h4 class="">200 azn</h4>
                    </div>
                </div>


                      <div class="card custom_card" style="width: 12.9rem; margin: 10px; height:287px;">
                        <img src="{{asset('/front/autima/')}}/assets/img/featured/featured.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <span class="label">
                                Kredit
                            </span>
                            <a href="{{route('carDetail')}}"> <h4> <span>Bmw</span> | <span>550</span></h4> </a>
                          <p class="card-text">avtomobil haqqında məlumat</p>
                          <h4 class="">200 azn</h4>
                        </div>
                      </div>
                      <div class="card custom_card" style="width: 12.9rem; margin: 10px; height:287px;">
                        <img src="{{asset('/front/autima/')}}/assets/img/featured/featured.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <span class="label">
                                Kredit
                            </span>
                            <a href="{{route('carDetail')}}"> <h4> <span>Bmw</span> | <span>550</span></h4> </a>
                          <p class="card-text">avtomobil haqqında məlumat</p>
                          <h4 class="">200 azn</h4>
                        </div>
                      </div>
                      <div class="card custom_card" style="width: 12.9rem; margin: 10px; height:287px;">
                        <img src="{{asset('/front/autima/')}}/assets/img/featured/featured.jpg"" class="card-img-top" alt="...">
                        <div class="card-body">
                            <span class="label">
                                Kredit
                            </span>
                            <a href="{{route('carDetail')}}"> <h4> <span>Bmw</span> | <span>550</span></h4> </a>
                          <p class="card-text">avtomobil haqqında məlumat</p>
                          <h4 class="">200 azn</h4>
                        </div>
                      </div>
                      <div class="card custom_card" style="width: 12.9rem; margin: 10px; height:287px;">
                        <img src="{{asset('/front/autima/')}}/assets/img/featured/featured.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <span class="label">
                                Kredit
                            </span>
                            <a href="{{route('carDetail')}}"> <h4> <span>Bmw</span> | <span>550</span></h4> </a>
                          <p class="card-text">avtomobil haqqında məlumat</p>
                          <h4 class="">200 azn</h4>
                        </div>
                    </div>


                          <div class="card custom_card" style="width: 12.9rem; margin: 10px; height:287px;">
                            <img src="{{asset('/front/autima/')}}/assets/img/featured/featured.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <span class="label">
                                    Kredit
                                </span>
                                <a href="{{route('carDetail')}}"> <h4> <span>Bmw</span> | <span>550</span></h4> </a>
                              <p class="card-text">avtomobil haqqında məlumat</p>
                              <h4 class="">200 azn</h4>
                            </div>
                          </div>
                          <div class="card custom_card" style="width: 12.9rem; margin: 10px; height:287px;">
                            <img src="{{asset('/front/autima/')}}/assets/img/featured/featured.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <span class="label">
                                    Kredit
                                </span>
                                <a href="{{route('carDetail')}}"> <h4> <span>Bmw</span> | <span>550</span></h4> </a>
                              <p class="card-text">avtomobil haqqında məlumat</p>
                              <h4 class="">200 azn</h4>
                            </div>
                          </div>
                          <div class="card custom_card" style="width: 12.9rem; margin: 10px; height:287px;">
                            <img src="{{asset('/front/autima/')}}/assets/img/featured/featured.jpg"" class="card-img-top" alt="...">
                            <div class="card-body">
                                <span class="label">
                                    Kredit
                                </span>
                                <a href="{{route('carDetail')}}"> <h4> <span>Bmw</span> | <span>550</span></h4> </a>
                              <p class="card-text">avtomobil haqqında məlumat</p>
                              <h4 class="">200 azn</h4>
                            </div>
                          </div>
                          <div class="card custom_card" style="width: 12.9rem; margin: 10px; height:287px;">
                            <img src="{{asset('/front/autima/')}}/assets/img/featured/featured.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <span class="label">
                                    Kredit
                                </span>
                                <a href="{{route('carDetail')}}"> <h4> <span>Bmw</span> | <span>550</span></h4> </a>
                              <p class="card-text">avtomobil haqqında məlumat</p>
                              <h4 class="">200 azn</h4>
                            </div>
                        </div>


                              <div class="card custom_card" style="width: 12.9rem; margin: 10px; height:287px;">
                                <img src="{{asset('/front/autima/')}}/assets/img/featured/featured.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <span class="label">
                                        Kredit
                                    </span>
                                    <a href="{{route('carDetail')}}"> <h4> <span>Bmw</span> | <span>550</span></h4> </a>
                                  <p class="card-text">avtomobil haqqında məlumat</p>
                                  <h4 class="">200 azn</h4>
                                </div>
                              </div>
                              <div class="card custom_card" style="width: 12.9rem; margin: 10px; height:287px;">
                                <img src="{{asset('/front/autima/')}}/assets/img/featured/featured.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <span class="label">
                                        Kredit
                                    </span>
                                    <a href="{{route('carDetail')}}"> <h4> <span>Bmw</span> | <span>550</span></h4> </a>
                                  <p class="card-text">avtomobil haqqında məlumat</p>
                                  <h4 class="">200 azn</h4>
                                </div>
                              </div>
                              <div class="card custom_card" style="width: 12.9rem; margin: 10px; height:287px;">
                                <img src="{{asset('/front/autima/')}}/assets/img/featured/featured.jpg"" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <span class="label">
                                        Kredit
                                    </span>
                                    <a href="{{route('carDetail')}}"> <h4> <span>Bmw</span> | <span>550</span></h4> </a>
                                  <p class="card-text">avtomobil haqqında məlumat</p>
                                  <h4 class="">200 azn</h4>
                                </div>
                              </div>





        </div>

    </div>
</section>
<!--product area end-->

