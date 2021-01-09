@extends('front.Layout.master')
@section('content')



<style>

        .file-image {
            margin: 22px 22px 0 0;
        display:inline-block;
        position:relative;
        }
        .file-image input {
        position:absolute;
        overflow:hidden;
        opacity:0;
        width:0;
        }
        .file-image .reset {
        cursor:pointer;
        display:block;
        position:absolute;
        bottom: 0;
        left:0;
        width:40px;
        height:40px;
        text-align:center;
        background:rgba(223, 223, 223, 0.8);
        }
        .file-image .reset:before {
        content:'\d7';
        font:normal normal 40px/39px sans-serif, Arial;
        color:#DC1616;
        }
        .file-image .image {
            background-color: rgba(223, 223, 223, 0.8);
        cursor:pointer;
        display:block;
        box-sizing:border-box;
        width:159px;
        height:143px;
        border:1px solid #dbdbdb;

        background-repeat:no-repeat;
        background-position:center center;
        background-size:100% 100%;
        }
        .file-image .image:before, .file-image .image:after {
        content:"";
        display:block;
        position:absolute;
        left:0;
        right:0;
        top:50%;
        font:normal normal 14px sans-serif, Arial;
        line-height:0;

        text-align:center;
        }

        .file-image .image:before {
            font-family: "Font Awesome 5 Free";
   content: "\f055";
   display: inline-block;
   padding-right: 3px;
   vertical-align: middle;
   font-size: 35px;
   font-weight: 900;
   color: #0F6FF9;;
        }

    /*     .file-image .image:after {
        content:"Add Icon";
        margin-top:30px;
        } */
        .file-image .reset {display:none}
        .file-image input:not([title=""]) ~ .reset {display:block}
        .file-image input:not([title=""]) ~ .image {border:0 none;}
        .file-image input:not([title=""]) ~ .image:before,
        .file-image input:not([title=""]) ~ .image:after {display:none}

</style>



<section class="header-banner-service" style="background-image: url('{{asset('/front/autima/')}}/assets/img/fast-sell/2.png')">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="service-title" style="display: flex; justify-content:flex-end">
                    <h2>Elə İNDİSAT <span>   <img src="{{asset('/front/autima/')}}/assets/img/fast-sell/banner-logo.png"></span></h2>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mt-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
             <h4>Avtomobilini İndiSat!</h4>
             <p> Anketimizi doldurun və avtomobilinizə qiymət təklifini ən qısa zamanda və əziyyətsiz alın.</p>
            </div>
            <div class="col-lg-3">
                <hr>
                <ul class=" tab-link-indisat ">
                    <li  class=" indi-sat-default active-indiSat after-link first"> <span>1</span> Avtomobilinizin Məlumatı </li>
                    <li class="indi-sat-default second"  > <span >2</span>Avtomobilin Təchizatı   </li>
                    <li class="indi-sat-default three" > <span>3</span>Avtomobilin Vəziyyəti  </li>
                    <li class="indi-sat-default four" ><span>4</span>Təklif Al</li>
                </ul>
            </div>


            <div class="col-lg-9">
                <div class="indisat-component mt-3 tabcontent" id="melumat">
                   <div class="row">
                    <form >
                     <div class="row" style="margin-top: 0px">
                        <div class="mb-2  col-lg-4">
                          <label for="make" class="form-label mb-2">Marka</label>
                          <select type="text" class="form-select" id="make" >
                              <option value="">Audi</option>
                              <option value="">chevralet</option>
                              <option value="">Volvo</option>
                              <select>

                        </div>
                        <div class="mb-2  col-lg-4">
                          <label for="model" class="form-label mb-2">Model</label>
                          <select type="text" class="form-select" id="model">
                              <option value="">A5</option>
                              <option value="">Cruze</option>
                              <option value="">Santafe</option>
                            <select>
                        </div>
                        <div class="mb-2 col-lg-4">
                            <label for="year" class="form-label mb-2">Buraxılış ili</label>
                            <select type="text" class="form-select" id="model">
                                <option value="">2004</option>
                                <option value="">2010</option>
                                <option value="">1998</option>
                                <option value="">1997</option>
                                <option value="">1996</option>
                              <select>

                          </div>
                          <div class="mb-3 col-lg-4">
                            <label for="Transmission" class="form-label mt-3 mb-2">Sürətlər qutusu</label>
                            <select type="text" class="form-select" id="Transmission">
                        <option value="">Avtomatika</option>
                    <option value="">Mexanika</option>
                                                </select>
                          </div>
                          <div class="mb-3 col-lg-4">
                            <label for="Mileage" class="form-label mt-3 mb-2" >Yürüş, km</label>
                            <input type="number" class="form-control" id="Mileage">
                          </div>

                          <div class="mb-3 col-lg-4">
                            <label for="Owner" class="form-label mt-3 mb-2">Yanacaq Növü</label>
                            <select type="number" class="form-select" id="Owner">
                                <option value="">Benzin</option>
                                <option value="">Dizel</option>
                                <option value="">Qaz</option>
                            </select>
                          </div>


                          <div class=" mb-2  col-lg-4">
                            <label for="color" class="form-label mb-2">Rəng</label>
                            <select type="text" class="form-select" id="color">
                                <option value="">Ağ</option>
                                <option value="">Qara</option>
                                <option value="">Qırmızı</option>
                            </select>
                          </div>

                          <div class="mb-2  col-lg-4">
                            <label for="Ban" class="form-label mb-2">Ban Növü</label>
                            <select type="number" class="form-select" id="Ban">
                                <option value="">
                                    Sedan
                                </option>
                            </select>
                          </div>
                          <div class="mb-4 .col-lg-12" style="margin-top: 40px">
                            <div class="panel panel-primary" >
                                <div class="panel-heading" >
                                    <h4 class="panel-title" style="font-size:24px ; color: #6C6C6C; margin-bottom:20px">Avtomobilin fotolarını yükləyin</h4>
                                </div>
                                <div class="panel-body" style=" border: 1px solid #C4C4C4;; padding:0 0 22px 22px">
                                    <i class="file-image">
                                        <input  id="1"  type="file" onchange="readImage(this)" title="" />
                                        <i class="reset" onclick="resetImage(this.previousElementSibling)"></i>
                                        <label for="1" class="image" style="background-image: url({{asset('/front/autima/')}}/assets/img/auto-car/front-car.png"></label>
                                      </i>

                                      <i class="file-image">
                                        <input  id="2"  type="file" onchange="readImage(this)" title="" />
                                        <i class="reset" onclick="resetImage(this.previousElementSibling)"></i>
                                        <label for="2" class="image" style="background-image: url({{asset('/front/autima/')}}/assets/img/auto-car/bac-car.png"></label>
                                      </i>

                                      <i class="file-image">
                                        <input  id="3"  type="file" onchange="readImage(this)" title="" />
                                        <i class="reset" onclick="resetImage(this.previousElementSibling)"></i>
                                        <label for="3" class="image" style="background-image: url({{asset('/front/autima/')}}/assets/img/auto-car/salon-car.jpg" ></label>
                                      </i>

                                      <i class="file-image">
                                        <input  id="4"  type="file" onchange="readImage(this)" title="" />
                                        <i class="reset" onclick="resetImage(this.previousElementSibling)"></i>
                                        <label for="4" class="image last-photo" ></label>
                                      </i>



                                      <i class="file-image">
                                        <input  id="5"  type="file" onchange="readImage(this)" title="" />
                                        <i class="reset" onclick="resetImage(this.previousElementSibling)"></i>
                                        <label for="5" class="image"></label>
                                      </i>



                                </div>
                            </div>
                          </div>


                        <button type="submit" id="melumat_btn" class="btn" style="  background-color: rgba(205, 0, 0, 1); color:white ; ">Davam Et</button>
                    </div>
                    </form>
                </div>
            </div>


            <div class="indisat-component mt-3 tabcontent" id="techizat" style="display: none;padding:38px 75px">
                <h4 style="font-weight: bold;font-size: 18px;line-height: 27px;color: #6C6C6C;">Avtomobilin təchizatı </h4>
                 <form >
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="tezhizatlar">
                                <div class="check-border-custom">
                                    <input class="check-custom" type="checkbox" name="" id="">
                                    <span class="checkmark-custom-c">
                                        <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 9.57143L5.375 16L15 1" stroke="#DC1616" stroke-width="2"/>
                                            </svg>

                                    </span>
                                </div>
                                <span>Yüngül lehimli disklər</span>
                            </div>
                            <div class="tezhizatlar">
                                <div class="check-border-custom">
                                    <input class="check-custom" type="checkbox" name="" id="">
                                    <span class="checkmark-custom-c">
                                        <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 9.57143L5.375 16L15 1" stroke="#DC1616" stroke-width="2"/>
                                            </svg>

                                    </span>
                                </div>
                                <span>ABS</span>
                            </div>
                            <div class="tezhizatlar">
                                <div class="check-border-custom">
                                    <input class="check-custom" type="checkbox" name="" id="">
                                    <span class="checkmark-custom-c">
                                        <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 9.57143L5.375 16L15 1" stroke="#DC1616" stroke-width="2"/>
                                            </svg>

                                    </span>
                                </div>
                                <span>Lyuk</span>

                            </div>
                            <div class="tezhizatlar">
                                <div class="check-border-custom">
                                    <input class="check-custom" type="checkbox" name="" id="">
                                    <span class="checkmark-custom-c">
                                        <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 9.57143L5.375 16L15 1" stroke="#DC1616" stroke-width="2"/>
                                            </svg>

                                    </span>
                                </div>
                                <span>Yağış sensoru</span>
                            </div>
                            <div class="tezhizatlar">
                                <div class="check-border-custom">
                                    <input class="check-custom" type="checkbox" name="" id="">
                                    <span class="checkmark-custom-c">
                                        <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 9.57143L5.375 16L15 1" stroke="#DC1616" stroke-width="2"/>
                                            </svg>

                                    </span>
                                </div>
                                <span>Mərkəzi qapanma</span>
                            </div>
                            <div class="tezhizatlar">
                                <div class="check-border-custom">
                                    <input class="check-custom" type="checkbox" name="" id="">
                                    <span class="checkmark-custom-c">
                                        <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 9.57143L5.375 16L15 1" stroke="#DC1616" stroke-width="2"/>
                                            </svg>

                                    </span>
                                </div>
                                <span>Park radarı</span>
                            </div>
                            <div class="tezhizatlar">
                                <div class="check-border-custom">
                                    <input class="check-custom" type="checkbox" name="" id="">
                                    <span class="checkmark-custom-c">
                                        <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 9.57143L5.375 16L15 1" stroke="#DC1616" stroke-width="2"/>
                                            </svg>

                                    </span>
                                </div>
                                <span>Kondisioner</span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="tezhizatlar">
                                <div class="check-border-custom">
                                    <input class="check-custom" type="checkbox" name="" id="">
                                    <span class="checkmark-custom-c">
                                        <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 9.57143L5.375 16L15 1" stroke="#DC1616" stroke-width="2"/>
                                            </svg>

                                    </span>
                                </div>
                                <span>Oturacaqların isidilməsi</span>
                            </div>
                            <div class="tezhizatlar">
                                <div class="check-border-custom">
                                    <input class="check-custom" type="checkbox" name="" id="">
                                    <span class="checkmark-custom-c">
                                        <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 9.57143L5.375 16L15 1" stroke="#DC1616" stroke-width="2"/>
                                            </svg>

                                    </span>
                                </div>
                                <span>Dəri salon</span>
                            </div>
                            <div class="tezhizatlar">
                                <div class="check-border-custom">
                                    <input class="check-custom" type="checkbox" name="" id="">
                                    <span class="checkmark-custom-c">
                                        <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 9.57143L5.375 16L15 1" stroke="#DC1616" stroke-width="2"/>
                                            </svg>

                                    </span>
                                </div>
                                <span>Ksenon lamplar</span>
                            </div>
                            <div class="tezhizatlar">
                                <div class="check-border-custom">
                                    <input class="check-custom" type="checkbox" name="" id="">
                                    <span class="checkmark-custom-c">
                                        <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 9.57143L5.375 16L15 1" stroke="#DC1616" stroke-width="2"/>
                                            </svg>

                                    </span>
                                </div>
                                <span>Arxa görüntü kamerası</span>
                            </div>
                            <div class="tezhizatlar">
                                <div class="check-border-custom">
                                    <input class="check-custom" type="checkbox" name="" id="">
                                    <span class="checkmark-custom-c">
                                        <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 9.57143L5.375 16L15 1" stroke="#DC1616" stroke-width="2"/>
                                            </svg>

                                    </span>
                                </div>
                                <span>Yan pərdələr</span>
                            </div>
                            <div class="tezhizatlar">
                                <div class="check-border-custom">
                                    <input class="check-custom" type="checkbox" name="" id="">
                                    <span class="checkmark-custom-c">
                                        <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 9.57143L5.375 16L15 1" stroke="#DC1616" stroke-width="2"/>
                                            </svg>

                                    </span>
                                </div>
                                <span>Oturacaqların ventilyasiyası</span>
                        </div>
                    </div>
                    <button type="submit" id="techizat_btn" class="btn" style="margin-top:152px;  background-color: rgba(205, 0, 0, 1); color:white; width:740px; ">Davam Et</button>

                 </form>

         </div>
            </div>

         <div class="indisat-component mt-3 tabcontent" id="veziyyet"  style="display: none">
            <div class="row">
             <form >
                <div class="row">
                    <div class="col-lg-6">
                        <div class="sol-on-qanad">
                            <p>   &nbsp;</p>
                          <div class="titles">
                              <span>Orijinal </span>    <span>Rəngli  </span>    <span>Dəyişdirilib </span>
                          </div>
                         </div>
                     <div class="sol-on-qanad">
                        <p class="text">Sol ön qanad    </p>
                        <div class="values">
                            <span>   <input type="radio" name="sol-on-qanad" id="">
                                 <span class="checkmark-custom">
                                    <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 9.57143L5.375 16L15 1" stroke="#DC1616" stroke-width="2"/>
                                        </svg>

                                </span>
                            </span>
                            <span >  <input type="radio" name="sol-on-qanad" id="">
                                 <span class="checkmark-custom">
                                    <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 9.57143L5.375 16L15 1" stroke="#DC1616" stroke-width="2"/>
                                        </svg>

                                </span></span>
                            <span>   <input type="radio" name="sol-on-qanad" id="">
                                <span class="checkmark-custom">
                                    <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 9.57143L5.375 16L15 1" stroke="#DC1616" stroke-width="2"/>
                                        </svg>

                                </span></span>
                        </div>
                     </div>

                     <div class="sol-on-qanad">
                        <p class="text change-text">Sol ön qapı  </p>
                        <div class="values">
                            <span>
                                  <input type="radio" name="sol-on-qapi" id="">
                                 <span class="checkmark-custom"><svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 9.57143L5.375 16L15 1" stroke="#DC1616" stroke-width="2"/>
                                </svg>
                                </span>
                            </span>
                            <span >  <input type="radio" name="sol-on-qapi" id="">  <span class="checkmark-custom"><svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 9.57143L5.375 16L15 1" stroke="#DC1616" stroke-width="2"/>
                                </svg>
                                </span></span>
                            <span>   <input type="radio" name="sol-on-qapi" id=""> <span class="checkmark-custom"><svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 9.57143L5.375 16L15 1" stroke="#DC1616" stroke-width="2"/>
                                </svg>
                                </span></span>
                        </div>
                     </div>
                     <div class="sol-on-qanad">
                        <p class="text">Sol arxa qapı </p>
                        <div class="values">
                            <span>   <input type="radio" name="sol_arxa_qapi" id="">
                                 <span class="checkmark-custom">
                                    <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 9.57143L5.375 16L15 1" stroke="#DC1616" stroke-width="2"/>
                                        </svg>

                                </span></span>
                            <span >  <input type="radio" name="sol_arxa_qapi" id="">
                                 <span class="checkmark-custom">
                                    <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 9.57143L5.375 16L15 1" stroke="#DC1616" stroke-width="2"/>
                                        </svg>

                                </span></span>
                            <span>   <input type="radio" name="sol_arxa_qapi" id="">
                                <span class="checkmark-custom">
                                    <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 9.57143L5.375 16L15 1" stroke="#DC1616" stroke-width="2"/>
                                        </svg>

                                </span></span>
                        </div>
                     </div>
                     <div class="sol-on-qanad">
                        <p class="text">Sol arxa qanad </p>
                        <div class="values">
                            <span>   <input type="radio" name="sol_arxa_qanad" id="">
                                 <span class="checkmark-custom">
                                    <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 9.57143L5.375 16L15 1" stroke="#DC1616" stroke-width="2"/>
                                        </svg>

                                    </span></span>
                            <span >  <input type="radio" name="sol_arxa_qanad" id="">
                                 <span class="checkmark-custom">
                                    <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 9.57143L5.375 16L15 1" stroke="#DC1616" stroke-width="2"/>
                                        </svg>

                                    </span></span>
                            <span>   <input type="radio" name="sol_arxa_qanad" id="">
                                <span class="checkmark-custom">
                                    <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 9.57143L5.375 16L15 1" stroke="#DC1616" stroke-width="2"/>
                                        </svg>

                                </span></span>
                        </div>
                     </div>
                     <div class="sol-on-qanad">
                        <p class="text">Ön kapot      </p>
                        <div class="values">
                            <span>   <input type="radio" name="" id=""> <span class="checkmark-custom">
                                <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 9.57143L5.375 16L15 1" stroke="#DC1616" stroke-width="2"/>
                                    </svg>

                            </span></span>
                            <span >  <input type="radio" name="" id="">  <span class="checkmark-custom">
                                <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 9.57143L5.375 16L15 1" stroke="#DC1616" stroke-width="2"/>
                                    </svg>

                            </span></span>
                            <span>   <input type="radio" name="" id=""> <span class="checkmark-custom">
                                <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 9.57143L5.375 16L15 1" stroke="#DC1616" stroke-width="2"/>
                                    </svg>

                            </span></span>
                        </div>
                     </div>
                     <div class="sol-on-qanad">
                        <p class="text">Ön bufer  </p>
                        <div class="values">
                            <span>   <input type="radio" name="" id=""> <span class="checkmark-custom">
                                <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 9.57143L5.375 16L15 1" stroke="#DC1616" stroke-width="2"/>
                                    </svg>

                            </span></span>
                            <span >  <input type="radio" name="" id="">  <span class="checkmark-custom">
                                <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 9.57143L5.375 16L15 1" stroke="#DC1616" stroke-width="2"/>
                                    </svg>

                            </span></span>
                            <span>   <input type="radio" name="" id=""> <span class="checkmark-custom">
                                <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 9.57143L5.375 16L15 1" stroke="#DC1616" stroke-width="2"/>
                                    </svg>

                            </span></span>
                        </div>
                     </div>
                     <div class="sol-on-qanad">
                        <p class="text change-text">Dam   </p>
                        <div class="values">
                            <span>   <input type="radio" name="" id=""> <span class="checkmark-custom">
                                <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 9.57143L5.375 16L15 1" stroke="#DC1616" stroke-width="2"/>
                                    </svg>

                            </span></span>
                            <span >  <input type="radio" name="" id="">  <span class="checkmark-custom">
                                <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 9.57143L5.375 16L15 1" stroke="#DC1616" stroke-width="2"/>
                                    </svg>

                            </span></span>
                            <span>   <input type="radio" name="" id=""> <span class="checkmark-custom">
                                <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 9.57143L5.375 16L15 1" stroke="#DC1616" stroke-width="2"/>
                                    </svg>

                            </span></span>
                        </div>
                     </div>
                     <div class="sol-on-qanad">
                        <p class="text change-text">Sağ arxa qanad  </p>
                        <div class="values">
                            <span>   <input type="radio" name="" id=""> <span class="checkmark-custom">
                                <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 9.57143L5.375 16L15 1" stroke="#DC1616" stroke-width="2"/>
                                    </svg>

                            </span></span>
                            <span >  <input type="radio" name="" id="">  <span class="checkmark-custom">
                                <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 9.57143L5.375 16L15 1" stroke="#DC1616" stroke-width="2"/>
                                    </svg>

                            </span></span>
                            <span>   <input type="radio" name="" id=""> <span class="checkmark-custom">
                                <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 9.57143L5.375 16L15 1" stroke="#DC1616" stroke-width="2"/>
                                    </svg>

                            </span></span>
                        </div>
                     </div>
                     <div class="sol-on-qanad">
                        <p class="text">Sağ ön qanad    </p>
                        <div class="values">
                            <span>   <input type="radio" name="" id=""> <span class="checkmark-custom">
                                <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 9.57143L5.375 16L15 1" stroke="#DC1616" stroke-width="2"/>
                                    </svg>

                            </span></span>
                            <span >  <input type="radio" name="" id="">  <span class="checkmark-custom">
                                <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 9.57143L5.375 16L15 1" stroke="#DC1616" stroke-width="2"/>
                                    </svg>

                            </span></span>
                            <span>   <input type="radio" name="" id=""> <span class="checkmark-custom">
                                <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 9.57143L5.375 16L15 1" stroke="#DC1616" stroke-width="2"/>
                                    </svg>

                            </span></span>
                        </div>
                     </div>
                     <div class="sol-on-qanad">
                        <p class="text">Sağ ön qapı   </p>
                        <div class="values">
                            <span>   <input type="radio" name="" id=""> <span class="checkmark-custom">
                                <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 9.57143L5.375 16L15 1" stroke="#DC1616" stroke-width="2"/>
                                    </svg>

                            </span></span>
                            <span >  <input type="radio" name="" id="">  <span class="checkmark-custom">
                                <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 9.57143L5.375 16L15 1" stroke="#DC1616" stroke-width="2"/>
                                    </svg>

                            </span></span>
                            <span>   <input type="radio" name="" id=""> <span class="checkmark-custom">
                                <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 9.57143L5.375 16L15 1" stroke="#DC1616" stroke-width="2"/>
                                    </svg>

                            </span></span>
                        </div>
                     </div>
                     <div class="sol-on-qanad">
                        <p class="text">Sağ arxa qapı   </p>
                        <div class="values">
                            <span>   <input type="radio" name="" id=""> <span class="checkmark-custom">
                                <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 9.57143L5.375 16L15 1" stroke="#DC1616" stroke-width="2"/>
                                    </svg>

                            </span></span>
                            <span >  <input type="radio" name="" id="">  <span class="checkmark-custom">
                                <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 9.57143L5.375 16L15 1" stroke="#DC1616" stroke-width="2"/>
                                    </svg>

                            </span></span>
                            <span>   <input type="radio" name="" id=""> <span class="checkmark-custom">
                                <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 9.57143L5.375 16L15 1" stroke="#DC1616" stroke-width="2"/>
                                    </svg>

                            </span></span>
                        </div>
                     </div>
                     <div class="sol-on-qanad">
                        <p class="text">Arxa kapot            </p>
                        <div class="values">
                            <span>   <input type="radio" name="" id=""> <span class="checkmark-custom">
                                <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 9.57143L5.375 16L15 1" stroke="#DC1616" stroke-width="2"/>
                                    </svg>

                            </span></span>
                            <span >  <input type="radio" name="" id="">  <span class="checkmark-custom">
                                <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 9.57143L5.375 16L15 1" stroke="#DC1616" stroke-width="2"/>
                                    </svg>

                            </span></span>
                            <span>   <input type="radio" name="" id=""> <span class="checkmark-custom">
                                <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 9.57143L5.375 16L15 1" stroke="#DC1616" stroke-width="2"/>
                                    </svg>

                            </span></span>
                        </div>
                     </div>
                     <div class="sol-on-qanad">
                        <p class="text change-text">Arxa bufer    </p>
                        <div class="values">
                            <span>   <input type="radio" name="" id=""> <span class="checkmark-custom">
                                <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 9.57143L5.375 16L15 1" stroke="#DC1616" stroke-width="2"/>
                                    </svg>

                            </span></span>
                            <span >  <input type="radio" name="" id="">  <span class="checkmark-custom">
                                <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 9.57143L5.375 16L15 1" stroke="#DC1616" stroke-width="2"/>
                                    </svg>

                            </span></span>
                            <span>   <input type="radio" name="" id=""> <span class="checkmark-custom">
                                <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 9.57143L5.375 16L15 1" stroke="#DC1616" stroke-width="2"/>
                                    </svg>

                            </span></span>
                        </div>
                     </div>

                     <div class="sol-on-qanad">
                        <span><i class="far fa-square" style="background: #C4C4C4; "></i> Orijinal  </span>
                        <span><i class="far fa-square" style="background: #7DCA82;"></i> Rəngli   </span>
                        <span><i class="far fa-square" style="background: #FFB629;"></i> Dəyişdirilib  </span>
                     </div>
                    </div>
                    <div class="col-lg-6">
                        <svg  width="380" height="488" viewBox="0 0 420 488" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M262.37 219.68C263.634 210.153 265.703 201.796 268.21 194.082C270.713 186.383 273.661 179.309 276.685 172.344L277.739 169.918V326.919L276.716 325.187C273.042 318.971 269.538 312.848 266.917 307.217C264.274 301.541 262.518 296.342 262.366 292.011L262.37 219.679V219.68ZM261.172 407.605V412.829C261.172 414.104 260.651 415.304 259.813 416.211C258.975 417.116 257.817 417.731 256.542 417.834L254.769 417.979C254.639 417.989 254.512 417.995 254.389 417.995C253.246 417.995 252.212 417.57 251.439 416.86C250.668 416.15 250.159 415.156 250.067 414.017C250.057 413.89 250.051 413.766 250.051 413.644V410.887C243.54 412.198 236.382 412.714 228.643 412.518L214.297 412.519H190.41C174.65 412.918 161.296 410.363 150.916 404.156C140.503 397.93 133.099 388.047 129.281 373.813C127.652 367.74 127.656 364.257 127.664 358.466C127.687 335.992 127.663 313.515 127.663 291.041C127.663 288.31 127.882 286.026 128.255 283.855C128.627 281.69 129.15 279.649 129.763 277.385C131.145 272.276 131.067 267.489 130.984 262.399C130.962 261.089 130.94 259.758 130.94 258.597V171.525L130.932 171.531C126.865 174.457 121.499 178.319 117.64 178.665C116.43 178.774 115.539 178.592 114.891 178.238C114.046 177.777 113.623 177.043 113.452 176.268C112.803 173.324 113.911 170.588 115.805 168.101C117.644 165.687 120.228 163.508 122.631 161.609L130.94 155.359V84.1177C130.94 76.335 131.894 70.5088 134.603 65.479C137.311 60.4539 141.756 56.2621 148.738 51.7478C158.64 45.3471 168.231 41.6485 178.158 39.5515C188.074 37.4576 198.312 36.9601 209.527 36.9601C220.743 36.9601 230.98 37.4571 240.895 39.5515C250.822 41.6485 260.413 45.3471 270.315 51.7478C277.297 56.2621 281.743 60.4539 284.45 65.479C287.159 70.5088 288.112 76.335 288.112 84.1177V155.359L296.422 161.609C298.826 163.508 301.409 165.687 303.248 168.101C305.142 170.588 306.251 173.324 305.601 176.268C305.429 177.043 305.007 177.776 304.162 178.238C303.515 178.591 302.623 178.774 301.413 178.665C297.553 178.319 292.188 174.457 288.121 171.531L288.112 171.525V259.18C288.112 262.722 288.234 265.754 288.467 268.773C288.701 271.811 289.046 274.818 289.494 278.296C290.267 281.245 290.74 283.212 291.021 285.216C291.304 287.238 291.39 289.273 291.39 292.352V353.377L291.398 356.357C291.436 363.582 291.463 368.496 289.064 376.269C284.95 389.597 277.49 398.86 267.212 404.696C265.295 405.785 263.28 406.753 261.171 407.606L261.172 407.605ZM251.152 410.656V413.643L251.163 413.93C251.233 414.781 251.61 415.523 252.184 416.051C252.757 416.577 253.53 416.893 254.389 416.893L254.678 416.881L256.456 416.737C257.448 416.657 258.352 416.175 259.009 415.466C259.663 414.757 260.071 413.821 260.071 412.828V408.036C257.257 409.104 254.281 409.974 251.152 410.656L251.152 410.656ZM269.256 194.422C266.769 202.073 264.718 210.352 263.464 219.772V291.992C263.614 296.15 265.331 301.205 267.914 306.753C270.278 311.83 273.361 317.308 276.638 322.89V175.22C274.003 181.362 271.46 187.641 269.256 194.422V194.422ZM155.742 219.772C154.489 210.352 152.438 202.073 149.951 194.422C147.746 187.641 145.203 181.362 142.569 175.219V322.89C145.846 317.307 148.929 311.83 151.292 306.753C153.875 301.204 155.592 296.15 155.744 291.991L155.742 219.772V219.772ZM150.996 194.082C153.504 201.796 155.573 210.153 156.837 219.68L156.841 292.011C156.689 296.343 154.933 301.541 152.29 307.217C149.668 312.849 146.165 318.972 142.491 325.187L141.468 326.919V169.918L142.521 172.345C145.546 179.309 148.494 186.383 150.996 194.082V194.082ZM153.572 157.913C172.72 151.551 191.612 148.5 210.26 148.564C228.912 148.629 247.319 151.811 265.492 157.913C267.287 158.516 269.287 159.336 270.719 160.472C272.26 161.694 273.157 163.264 272.545 165.291L260.893 203.887C260.269 205.954 259.316 208.165 257.91 209.571C256.763 210.718 255.33 211.34 253.554 210.968C238.578 207.832 223.771 206.105 209.166 206.026C194.562 205.948 180.152 207.514 165.963 210.963C163.925 211.458 162.347 210.573 161.129 209.071C159.986 207.662 159.176 205.705 158.609 203.893L146.519 165.297C145.885 163.271 146.78 161.697 148.328 160.471C149.763 159.333 151.774 158.51 153.572 157.913L153.572 157.913ZM210.26 149.661C191.727 149.597 172.951 152.63 153.917 158.954C152.218 159.519 150.327 160.289 149.012 161.331C147.808 162.285 147.102 163.48 147.569 164.971L159.659 203.567C160.192 205.27 160.944 207.1 161.981 208.379C162.943 209.565 164.165 210.271 165.706 209.897C179.98 206.426 194.479 204.85 209.171 204.929C223.86 205.009 238.74 206.743 253.779 209.892C255.131 210.175 256.237 209.687 257.132 208.792C258.389 207.535 259.261 205.494 259.84 203.573L271.492 164.977C271.944 163.479 271.237 162.284 270.037 161.332C268.726 160.293 266.843 159.525 265.144 158.954C247.078 152.888 228.788 149.725 210.26 149.66L210.26 149.661ZM153.533 338.939C156.164 333.634 159.359 326.116 162.298 321.27C163.141 319.904 164.087 318.398 165.346 317.303C166.665 316.158 168.297 315.473 170.448 315.858C180.984 317.744 196.057 318.955 211.33 318.994C224.722 319.029 238.268 318.163 249.035 316.062C251.323 315.616 253.107 315.932 254.465 316.673C256.169 317.602 257.178 319.189 257.668 320.783L264.207 335.169C265.525 337.904 266.076 339.961 266.066 341.518C266.056 343.197 265.415 344.319 264.378 345.084C260.267 348.116 234.492 349.585 208.923 349.489C183.805 349.395 158.802 347.789 154.642 344.672C153.736 343.993 153.217 343.151 153.047 342.164C152.884 341.217 153.053 340.15 153.517 338.98L153.534 338.939L153.533 338.939ZM163.248 321.819L154.523 339.414C154.144 340.382 154.003 341.241 154.129 341.979C154.251 342.684 154.632 343.294 155.3 343.795C159.264 346.765 183.996 348.299 208.923 348.392C234.304 348.487 259.808 347.09 263.726 344.2C264.49 343.636 264.961 342.793 264.969 341.514C264.977 340.115 264.457 338.216 263.211 335.633C261.734 332.777 257.451 323.875 256.625 321.134C256.211 319.768 255.363 318.413 253.94 317.636C252.794 317.01 251.256 316.75 249.245 317.141C238.416 319.254 224.795 320.125 211.33 320.09C195.992 320.051 180.847 318.833 170.254 316.937C168.495 316.622 167.153 317.187 166.068 318.131C164.933 319.119 164.042 320.532 163.249 321.818L163.248 321.819ZM190.41 411.418C199.001 411.418 221.354 410.161 228.656 411.42C243.762 411.806 256.608 409.454 266.671 403.74C276.703 398.044 283.99 388.987 288.015 375.946C290.365 368.33 290.339 363.484 290.301 356.361L290.288 353.377V292.351C290.288 289.311 290.205 287.316 289.933 285.367C289.659 283.407 289.191 281.465 288.424 278.542L288.411 278.473C287.954 274.924 287.603 271.879 287.37 268.854C287.134 265.798 287.012 262.739 287.012 259.179V169.382L288.762 170.64C292.725 173.491 297.952 177.254 301.507 177.572C302.481 177.66 303.167 177.531 303.637 177.275C304.157 176.991 304.42 176.525 304.53 176.031C305.097 173.46 304.088 171.017 302.375 168.768C300.607 166.447 298.095 164.33 295.754 162.479L287.012 155.904V84.1182C287.012 76.5159 286.093 70.8474 283.482 66.0001C280.867 61.1477 276.539 57.0761 269.721 52.6686C259.947 46.3501 250.476 42.6989 240.671 40.6273C230.853 38.5536 220.682 38.0618 209.526 38.0618C198.371 38.0618 188.199 38.5536 178.382 40.6273C168.577 42.6989 159.106 46.3501 149.331 52.6686C142.513 57.0761 138.185 61.1477 135.571 66.0001C132.959 70.8474 132.041 76.5155 132.041 84.1182V155.904L123.298 162.479C120.958 164.329 118.445 166.447 116.677 168.768C114.964 171.017 113.955 173.46 114.522 176.031C114.632 176.526 114.894 176.991 115.415 177.275C115.886 177.531 116.571 177.66 117.545 177.572C121.1 177.254 126.327 173.491 130.29 170.64L132.041 169.382V258.596C132.041 260.012 132.06 261.205 132.08 262.381C132.164 267.555 132.244 272.421 130.825 277.668C130.218 279.909 129.701 281.924 129.338 284.039C128.976 286.146 128.764 288.369 128.764 291.041C128.764 313.514 128.821 335.994 128.76 358.465C128.753 364.16 128.748 367.585 130.342 373.529C134.082 387.469 141.315 397.136 151.479 403.214C161.674 409.31 174.835 411.817 190.397 411.42L190.41 411.418Z" fill="#B3B3B3"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M146.312 154.938H146.312C167.384 148.267 188.456 144.806 209.527 144.743C230.599 144.806 251.671 148.267 272.743 154.938H272.743V87.067L272.741 86.9503C272.739 86.6243 272.734 86.2995 272.723 85.9761C272.364 73.1975 265.724 64.6969 256.634 59.1433C236.072 45.7765 182.983 45.776 162.422 59.1433C153.332 64.6969 146.691 73.1975 146.332 85.9761C146.322 86.2995 146.316 86.6247 146.315 86.9503L146.312 87.067V154.938H146.312Z" fill="#C4C4C4"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M163 217.078C193.88 211.572 224.759 211.709 255.638 217.078C255.638 247.179 255.638 277.279 255.638 307.379C224.759 316.584 193.88 316.818 163 307.379C163 277.279 163 247.179 163 217.078Z" fill="#C4C4C4"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M146.189 349.23C188.021 357.87 230.254 357.68 272.863 349.23V384.253C272.863 393.199 265.544 400.517 256.598 400.517H161.629C153.137 400.517 146.189 393.569 146.189 385.078C146.189 373.129 146.189 361.18 146.189 349.231V349.23Z" fill="#C4C4C4"/>
                            <path d="M129.348 431.553H288.989C292.425 431.553 295.549 432.958 297.814 435.222C300.077 437.486 301.483 440.61 301.483 444.047V475.506C301.483 478.942 300.077 482.066 297.814 484.33C295.549 486.593 292.425 487.999 288.989 487.999H129.348C125.911 487.999 122.787 486.594 120.523 484.33C118.26 482.066 116.854 478.942 116.854 475.506V444.047C116.854 440.61 118.259 437.486 120.523 435.222C122.787 432.958 125.912 431.553 129.348 431.553ZM288.989 432.653H129.348C126.216 432.653 123.367 433.936 121.301 436.001C119.237 438.065 117.954 440.914 117.954 444.047V475.506C117.954 478.638 119.237 481.486 121.301 483.552C123.367 485.617 126.216 486.899 129.348 486.899H288.989C292.121 486.899 294.97 485.617 297.035 483.552C299.1 481.486 300.382 478.638 300.382 475.506V444.047C300.382 440.914 299.1 438.066 297.035 436.001C294.97 433.936 292.121 432.653 288.989 432.653Z" fill="#B3B3B3"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M130.589 435.705H287.747C291.955 435.705 295.398 439.147 295.398 443.354V476.197C295.398 480.405 291.955 483.847 287.747 483.847H130.589C126.382 483.847 122.939 480.405 122.939 476.197V443.354C122.939 439.147 126.382 435.705 130.589 435.705ZM136.267 441.861H191.325C194.851 441.861 197.734 444.745 197.734 448.27V453.222C197.734 456.747 194.851 459.63 191.325 459.63H136.267C132.742 459.63 129.858 456.747 129.858 453.222V448.27C129.858 444.745 132.742 441.861 136.267 441.861ZM227.011 441.861H282.07C285.595 441.861 288.479 444.745 288.479 448.27V453.222C288.479 456.747 285.595 459.63 282.07 459.63H227.011C223.486 459.63 220.602 456.747 220.602 453.222V448.27C220.602 444.745 223.486 441.861 227.011 441.861Z" fill="#C4C4C4"/>
                            <path d="M2.2315 51.4183L2.04069 68.0221L2.01873 69.0454C1.94637 71.8586 1.83008 76.31 3.80185 77.2239C4.84761 77.7084 5.97434 77.6171 8.01503 77.4513L8.09859 77.4457C12.8704 77.2149 17.348 77.4143 21.4712 78.0414C25.5853 78.6684 29.3523 79.7218 32.7135 81.2016C38.308 83.6655 42.5845 87.5313 45.565 92.0473C48.8801 97.0686 50.5909 102.897 50.7335 108.494C50.8756 114.102 49.4443 119.506 46.4785 124.367C43.607 129.073 39.2977 133.266 33.5891 136.635C30.0126 138.746 25.9781 140.447 21.5974 141.628C17.4036 142.758 12.8833 143.414 8.13348 143.5L1.10089 143.503V308.439H9.58152C23.2125 308.268 32.443 311.88 38.6551 316.964C48.1363 324.725 50.5689 335.902 50.8993 342.332C50.9484 343.292 50.9617 344.237 50.9406 345.166C50.7214 354.712 46.7989 362.07 40.3982 367.173C34.0319 372.249 25.2153 375.078 15.1635 375.594C13.7154 375.668 12.2364 375.694 10.7319 375.672C10.7965 377.486 10.8792 379.299 11.0364 381.109C11.2066 383.078 11.4641 385.001 11.8832 386.836C14.0208 396.204 18.3141 398.115 23.2233 400.298C26.3339 401.681 29.6831 403.171 32.9349 406.602C34.575 408.333 35.6079 409.629 36.3806 410.598C37.3453 411.809 37.8816 412.481 38.6491 412.796C39.6574 413.209 41.2592 413.146 44.8487 413.002C45.8088 412.964 46.9109 412.919 48.2181 412.876C52.5106 412.736 55.8649 412.32 58.3802 411.664C60.8211 411.026 62.4457 410.171 63.3515 409.126L63.5035 408.95L67.3777 408.715C85.8314 407.623 85.8865 407.62 86.0472 382.827C86.1049 373.691 86.7608 372.86 89.927 368.852C90.98 367.518 92.3243 365.816 94.0531 363.256C98.2375 357.06 102.169 350.314 105.669 342.643C109.17 334.969 112.246 326.358 114.719 316.431C118.112 302.809 118.272 294.132 118.513 280.913L118.557 278.542C118.738 269.059 118.883 259.306 118.54 249.788C118.198 240.289 117.369 231.023 115.606 222.496C115.048 219.799 114.452 217.249 113.823 214.827C113.198 212.423 112.534 210.126 111.839 207.923C107.689 194.777 100.817 181.842 93.9989 169.007C86.9262 155.693 79.9079 142.482 76 129.181C73.7414 121.49 72.2563 113.447 70.7902 105.501C70.3776 103.264 69.9658 101.036 69.514 98.6982C67.4634 88.0959 64.9326 75.7153 62.0886 65.0953C59.2597 54.5343 56.1324 45.7334 52.8861 42.2243C51.2038 40.4051 49.3095 39.0648 47.2012 38.2199C45.0977 37.377 42.7705 37.0252 40.2169 37.1772L14.3421 40.6661L6.69492 42.2755C2.26897 43.2062 2.25691 45.935 2.23925 50.2335L2.2315 51.4179V51.4183ZM0.944541 68.0135L1.13534 51.4097L1.1431 50.2292C1.16205 45.3872 1.17626 42.3143 6.47095 41.2006C17.5823 38.862 28.844 37.2965 40.1372 36.082C42.8601 35.9175 45.3496 36.2956 47.6091 37.2013C49.8686 38.1066 51.8942 39.539 53.6903 41.4809C57.0786 45.1442 60.2827 54.1036 63.1507 64.8123C66.0033 75.4629 68.5393 87.8694 70.5942 98.4928C71.0133 100.662 71.4414 102.98 71.8704 105.303C73.331 113.22 74.8104 121.233 77.0536 128.871C80.9256 142.053 87.9212 155.221 94.9714 168.492C101.812 181.369 108.706 194.346 112.888 207.593C113.579 209.782 114.247 212.095 114.885 214.552C115.52 216.993 116.12 219.562 116.682 222.277C118.457 230.868 119.293 240.194 119.637 249.749C119.98 259.285 119.835 269.058 119.654 278.559L119.61 280.931C119.367 294.231 119.206 302.962 115.785 316.693C113.295 326.688 110.196 335.363 106.666 343.1C103.135 350.84 99.1747 357.635 94.9645 363.871C93.2374 366.429 91.863 368.168 90.7871 369.531C87.8148 373.294 87.1984 374.074 87.1429 382.831C86.9758 408.655 86.9176 408.659 67.4415 409.812L64.0216 410.019C62.9505 411.151 61.1915 412.064 58.655 412.726C56.0635 413.402 52.629 413.829 48.2517 413.973C46.9953 414.014 45.8708 414.06 44.8913 414.098C41.1373 414.248 39.4623 414.315 38.2313 413.81C37.1972 413.386 36.5989 412.635 35.5196 411.281C34.7568 410.323 33.7369 409.043 32.1394 407.358C29.0366 404.084 25.7908 402.64 22.7758 401.3C17.5996 398.998 13.0728 396.984 10.812 387.076C10.3779 385.173 10.1126 383.205 9.93987 381.203C9.76931 379.234 9.68575 377.188 9.61554 375.129L9.59616 374.55L10.1746 374.564C11.8427 374.602 13.4906 374.58 15.1084 374.497C24.9332 373.993 33.5314 371.242 39.7155 366.312C45.8643 361.41 49.6334 354.332 49.8445 345.145C49.8652 344.251 49.8514 343.331 49.8031 342.387C49.4835 336.154 47.1297 325.322 37.9591 317.815C31.9227 312.875 22.9227 309.367 9.58841 309.536C9.21326 309.662 1.28868 309.539 0 309.539V142.401H8.12486C12.7705 142.318 17.199 141.674 21.3144 140.565C25.5982 139.41 29.5396 137.749 33.0305 135.688C38.5815 132.412 42.7636 128.348 45.5417 123.795C48.3969 119.116 49.7738 113.915 49.6373 108.519C49.4999 103.12 47.8486 97.498 44.6493 92.652C41.7799 88.3048 37.6611 84.5816 32.2712 82.2077C28.9995 80.7667 25.3252 79.7399 21.308 79.128C17.2537 78.5112 12.8536 78.3144 8.16837 78.5401L8.10161 78.5461C5.87786 78.727 4.65078 78.8269 3.34229 78.2201C0.714544 77.0026 0.842033 72.1101 0.922575 69.0183L0.944541 68.0122V68.0135Z" fill="#B3B3B3"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M73.1493 155.004C52.2105 147.725 33.6212 151.196 14.2428 155.622C14.1459 152.757 14.0485 149.893 13.9512 147.029C63.7061 143.483 67.0453 89.6907 31.9659 76.8096C25.9279 74.5925 18.3099 73.2264 8.70775 73.1855C8.46526 65.1745 8.36792 55.7083 8.125 47.6977C12.0401 48.4001 15.6004 48.5944 18.9035 48.4225C30.5941 47.8118 41.7314 43.1838 49.8778 50.653C52.8587 53.3861 55.135 57.3939 56.5598 61.9022C64.3004 86.3904 69.2221 128.082 73.1485 155.003L73.1493 155.004Z" fill="#C4C4C4"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M66.7598 160.93C50.1724 155.632 32.709 155.972 14.5361 160.866C14.5361 188.927 14.5361 216.988 14.5361 245.05C47.0636 242.764 79.0186 244.755 109.214 253.351C108.609 227.473 103.433 201.546 90.1951 179.963C82.7206 167.775 80.5502 165.334 66.7598 160.93V160.93ZM65.7679 167.381C66.5109 167.547 66.7788 167.23 66.7611 168.01C66.4975 179.31 65.5965 186.433 72.2423 187.85C74.4471 188.32 80.5838 188.161 79.7926 172.664C96.3727 192.43 103.9 218.389 105.719 248.254C98.0481 246.604 90.3764 244.953 82.7055 243.303C77.5693 241.941 75.6557 238.596 75.5682 234.127C74.9855 219.368 74.4036 204.609 73.8204 189.85C64.2307 188.59 64.8337 179.86 65.7683 167.381H65.7679Z" fill="#C4C4C4"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.4233 249.702C46.887 246.819 78.7735 248.41 109.683 257.567C111.497 298.5 103.116 319.855 90.1653 332.43C86.0895 335.392 81.8113 334.71 77.347 330.682C69.8553 325.882 62.3644 321.081 54.8731 316.282C47.0502 311.269 48.3031 310.76 42.6092 305.189C38.3396 301.013 33.1754 298.773 28.115 296.31C20.6987 293.472 16.5372 288.726 15.2593 282.291C13.7862 274.873 14.6192 258.058 14.4228 249.702H14.4233ZM90.0929 323.69C99.0758 313.517 106.731 299.442 105.97 260.625C97.1957 257.297 86.9781 256.175 76.5468 255.381C76.5468 272.446 76.5468 289.511 76.5468 306.575C76.5468 314.307 77.9797 336.157 90.0929 323.69Z" fill="#C4C4C4"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M15.9183 378.087C45.6694 375.398 58.5588 359.221 53.3524 328.568C64.0339 335.218 74.7159 341.87 85.3974 348.521C93.4943 352.699 94.7347 359.245 81.4642 370.805C81.4642 379.155 81.4642 387.506 81.4642 395.856C81.6585 402.877 78.2176 403.992 73.7442 403.43C64.5809 402.798 65.9303 403.526 57.7219 405.35C52.3295 406.549 48.2842 406.1 44.0306 405.906C42.9775 405.679 39.6115 404.659 35.966 401.921C30.7342 397.99 23.5207 394.658 22.3776 393.613C17.931 389.552 15.7878 384.366 15.9187 378.087H15.9183Z" fill="#C4C4C4"/>
                            <path d="M417.769 51.4183L417.959 68.0221L417.981 69.0454C418.054 71.8586 418.17 76.31 416.198 77.2239C415.153 77.7084 414.026 77.6171 411.985 77.4513L411.902 77.4457C407.13 77.2149 402.652 77.4143 398.529 78.0414C394.415 78.6684 390.648 79.7218 387.287 81.2016C381.692 83.6655 377.416 87.5313 374.435 92.0473C371.12 97.0686 369.409 102.897 369.267 108.494C369.125 114.102 370.556 119.506 373.522 124.367C376.393 129.073 380.702 133.266 386.411 136.635C389.988 138.746 394.022 140.447 398.403 141.628C402.597 142.758 407.117 143.414 411.867 143.5L418.899 143.503V308.439H410.419C396.788 308.268 387.557 311.88 381.345 316.964C371.864 324.725 369.431 335.902 369.101 342.332C369.052 343.292 369.038 344.237 369.06 345.166C369.279 354.712 373.201 362.07 379.602 367.173C385.968 372.249 394.785 375.078 404.837 375.594C406.285 375.668 407.764 375.694 409.268 375.672C409.204 377.486 409.121 379.299 408.964 381.109C408.794 383.078 408.536 385.001 408.117 386.836C405.979 396.204 401.686 398.115 396.777 400.298C393.666 401.681 390.317 403.171 387.065 406.602C385.425 408.333 384.392 409.629 383.62 410.598C382.655 411.809 382.119 412.481 381.351 412.796C380.343 413.209 378.741 413.146 375.151 413.002C374.191 412.964 373.089 412.919 371.782 412.876C367.49 412.736 364.135 412.32 361.62 411.664C359.179 411.026 357.554 410.171 356.649 409.126L356.497 408.95L352.622 408.715C334.169 407.623 334.114 407.62 333.953 382.827C333.895 373.691 333.239 372.86 330.073 368.852C329.02 367.518 327.676 365.816 325.947 363.256C321.763 357.06 317.831 350.314 314.331 342.643C310.83 334.969 307.754 326.358 305.281 316.431C301.888 302.809 301.728 294.132 301.487 280.913L301.443 278.542C301.261 269.059 301.117 259.306 301.46 249.788C301.802 240.289 302.631 231.023 304.394 222.496C304.951 219.799 305.548 217.249 306.177 214.827C306.802 212.423 307.466 210.126 308.161 207.923C312.311 194.777 319.183 181.842 326.001 169.007C333.074 155.693 340.092 142.482 344 129.181C346.259 121.49 347.743 113.447 349.21 105.501C349.623 103.264 350.034 101.036 350.486 98.6982C352.537 88.0959 355.067 75.7153 357.912 65.0953C360.74 54.5343 363.868 45.7334 367.114 42.2243C368.797 40.4051 370.691 39.0648 372.799 38.2199C374.903 37.377 377.23 37.0252 379.784 37.1772L405.658 40.6661L413.306 42.2755C417.732 43.2062 417.744 45.935 417.761 50.2335L417.769 51.4179L417.769 51.4183ZM419.056 68.0135L418.865 51.4097L418.857 50.2292C418.838 45.3872 418.824 42.3143 413.529 41.2006C402.418 38.862 391.156 37.2965 379.863 36.082C377.14 35.9175 374.651 36.2956 372.391 37.2013C370.131 38.1066 368.105 39.539 366.31 41.4809C362.921 45.1442 359.717 54.1036 356.849 64.8123C353.997 75.4629 351.461 87.8694 349.406 98.4928C348.987 100.662 348.559 102.98 348.13 105.303C346.669 113.22 345.19 121.233 342.947 128.871C339.075 142.053 332.079 155.221 325.029 168.492C318.188 181.369 311.294 194.346 307.112 207.593C306.421 209.782 305.753 212.095 305.115 214.552C304.481 216.993 303.88 219.562 303.319 222.277C301.543 230.868 300.708 240.194 300.363 249.749C300.02 259.285 300.165 269.058 300.346 278.559L300.39 280.931C300.633 294.231 300.794 302.962 304.215 316.693C306.705 326.688 309.805 335.363 313.334 343.1C316.865 350.84 320.825 357.635 325.036 363.871C326.763 366.429 328.137 368.168 329.213 369.531C332.185 373.294 332.802 374.074 332.857 382.831C333.024 408.655 333.083 408.659 352.559 409.812L355.978 410.019C357.05 411.151 358.809 412.064 361.345 412.726C363.937 413.402 367.371 413.829 371.748 413.973C373.005 414.014 374.129 414.06 375.109 414.098C378.863 414.248 380.538 414.315 381.769 413.81C382.803 413.386 383.401 412.635 384.48 411.281C385.243 410.323 386.263 409.043 387.861 407.358C390.964 404.084 394.209 402.64 397.224 401.3C402.401 398.998 406.927 396.984 409.188 387.076C409.622 385.173 409.888 383.205 410.06 381.203C410.231 379.234 410.314 377.188 410.385 375.129L410.404 374.55L409.826 374.564C408.157 374.602 406.51 374.58 404.891 374.497C395.067 373.993 386.469 371.242 380.285 366.312C374.136 361.41 370.367 354.332 370.156 345.145C370.135 344.251 370.149 343.331 370.197 342.387C370.517 336.154 372.87 325.322 382.041 317.815C388.077 312.875 397.077 309.367 410.412 309.536C410.787 309.662 418.711 309.539 420 309.539V142.401H411.875C407.23 142.318 402.802 141.674 398.686 140.565C394.402 139.41 390.461 137.749 386.97 135.688C381.419 132.412 377.237 128.348 374.459 123.795C371.604 119.116 370.227 113.915 370.363 108.519C370.501 103.12 372.152 97.498 375.351 92.652C378.221 88.3048 382.34 84.5816 387.729 82.2077C391.001 80.7667 394.675 79.7399 398.693 79.128C402.747 78.5112 407.147 78.3144 411.832 78.5401L411.899 78.5461C414.123 78.727 415.35 78.8269 416.658 78.2201C419.286 77.0026 419.159 72.1101 419.078 69.0183L419.056 68.0122L419.056 68.0135Z" fill="#B3B3B3"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M346.851 155.004C367.789 147.725 386.378 151.196 405.757 155.622C405.854 152.757 405.951 149.893 406.049 147.029C356.294 143.483 352.955 89.6907 388.034 76.8096C394.072 74.5925 401.69 73.2264 411.292 73.1855C411.535 65.1745 411.632 55.7083 411.875 47.6977C407.96 48.4001 404.4 48.5944 401.096 48.4225C389.405 47.8118 378.269 43.1838 370.122 50.653C367.141 53.3861 364.865 57.3939 363.44 61.9022C355.699 86.3904 350.778 128.082 346.851 155.003L346.851 155.004Z" fill="#C4C4C4"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M353.24 160.93C369.828 155.632 387.291 155.972 405.464 160.866C405.464 188.927 405.464 216.988 405.464 245.05C372.936 242.764 340.981 244.755 310.786 253.351C311.391 227.473 316.567 201.546 329.805 179.963C337.279 167.775 339.45 165.334 353.24 160.93V160.93ZM354.232 167.381C353.489 167.547 353.221 167.23 353.239 168.01C353.502 179.31 354.403 186.433 347.757 187.85C345.552 188.32 339.416 188.161 340.207 172.664C323.627 192.43 316.1 218.389 314.281 248.254C321.952 246.604 329.624 244.953 337.294 243.303C342.431 241.941 344.344 238.596 344.432 234.127C345.014 219.368 345.596 204.609 346.18 189.85C355.769 188.59 355.166 179.86 354.232 167.381H354.232Z" fill="#C4C4C4"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M405.578 249.702C373.115 246.819 341.228 248.41 310.318 257.567C308.505 298.5 316.885 319.855 329.836 332.43C333.912 335.392 338.19 334.71 342.655 330.682C350.146 325.882 357.637 321.081 365.129 316.282C372.951 311.269 371.699 310.76 377.392 305.189C381.662 301.013 386.826 298.773 391.887 296.31C399.303 293.472 403.464 288.726 404.742 282.291C406.215 274.873 405.382 258.058 405.579 249.702H405.578ZM329.909 323.69C320.926 313.517 313.27 299.442 314.032 260.625C322.806 257.297 333.024 256.175 343.455 255.381C343.455 272.446 343.455 289.511 343.455 306.575C343.455 314.307 342.022 336.157 329.909 323.69Z" fill="#C4C4C4"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M404.083 378.087C374.331 375.398 361.442 359.221 366.649 328.568C355.967 335.218 345.285 341.87 334.604 348.521C326.507 352.699 325.266 359.245 338.537 370.805C338.537 379.155 338.537 387.506 338.537 395.856C338.343 402.877 341.784 403.992 346.257 403.43C355.42 402.798 354.071 403.526 362.279 405.35C367.672 406.549 371.717 406.1 375.97 405.906C377.024 405.679 380.39 404.659 384.035 401.921C389.267 397.99 396.48 394.658 397.623 393.613C402.07 389.552 404.213 384.366 404.082 378.087H404.083Z" fill="#C4C4C4"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M279.994 33.2977C279.732 32.6538 279.437 32.0203 279.102 31.3992C277.024 27.5425 273.557 24.4503 269.941 21.8645C267.259 23.0364 261.825 23.2117 255.748 22.129C247.406 20.6431 241.015 17.348 241.475 14.7696C241.828 12.7893 246.118 11.8083 251.868 12.1321C247.949 10.6274 243.892 9.43224 239.644 8.53471C229.776 6.45024 219.583 6.07642 209.527 6.07642C199.472 6.07642 189.278 6.45024 179.411 8.53471C175.162 9.43224 171.105 10.6278 167.186 12.1326C172.936 11.8083 177.227 12.7893 177.579 14.7696C178.039 17.3485 171.649 20.6431 163.306 22.129C157.23 23.2117 151.795 23.0355 149.113 21.8641C145.497 24.449 142.03 27.5421 139.952 31.3992C139.617 32.0198 139.322 32.6525 139.06 33.2964C184.336 18.8989 234.718 18.9002 279.994 33.2977Z" fill="#C4C4C4"/>
                            <path d="M287.48 37.8645H287.477C288.006 41.8944 284.458 41.0016 281.949 40.1299C237.25 24.5804 181.797 24.5804 137.098 40.1299C134.589 41.0016 131.041 41.8944 131.571 37.8645C132.129 34.3692 133.093 31.3204 134.602 28.5189C137.309 23.4938 141.754 19.302 148.737 14.7877C158.639 8.38698 168.229 4.68834 178.157 2.59139C188.073 0.497445 198.311 1.52588e-05 209.526 1.52588e-05C220.741 1.52588e-05 230.978 0.497014 240.894 2.59139C250.821 4.68834 260.412 8.38698 270.314 14.7877C277.296 19.302 281.742 23.4938 284.449 28.5189C285.958 31.3204 286.921 34.3687 287.48 37.8645H287.48ZM286.385 37.8645H286.366C285.823 34.56 284.903 31.6783 283.481 29.04C280.867 24.1876 276.539 20.116 269.721 15.7085C259.946 9.39002 250.476 5.73876 240.671 3.66721C230.853 1.59351 220.681 1.10168 209.526 1.10168C198.371 1.10168 188.199 1.59351 178.382 3.66721C168.576 5.73876 159.105 9.39002 149.331 15.7085C142.513 20.116 138.185 24.1876 135.57 29.04C134.148 31.6783 133.229 34.56 132.686 37.8645H132.663C132.891 40.3155 135.93 39.5554 138.147 38.8228C183.86 23.691 235.189 23.6923 280.901 38.8228C283.118 39.5554 286.157 40.3159 286.385 37.8645Z" fill="#C4C4C4"/>
                            </svg>

                    </div>
                </div>
                <button type="submit" id="veziyyet_sifirla" class="btn mt-5" style="  background: #C4C4C4; color:white; width:189px; font-size:18px">Sıfırla</button>
                <button type="submit" id="veziyyet_btn" class="btn mt-5" style="font-size:18px; margin-left:4px; background-color: rgba(205, 0, 0, 1); color:white; width:550px ">Davam Et</button>
             </form>

         </div>
        </div>

     <div class="indisat-component mt-3 tabcontent" id="teklifal"  style="display: none">
        <div class="row">
         <form >
            <p class="test-label" style="padding:0; margin:5px 5px 5px 35px">Əlaqə nömrəsi</p>
            <div class="row">
                <div class="col-lg-6">
                    <p class="form-control" style=" margin-left:34px; display: inline-block; width:100px; padding:6px 7px 0 8px ">+994
                     <select  style="border:none;display: inline-block" type="text" name="" id="">
                     <option value="">   50</option>
                     <option value="">   51</option>
                     <option value="">   55</option>
                     <option value="">   70</option>
                     <option value="">   77</option>
                 </select  >    </p>

                </div>
                <div class="col-lg-6">
                 <input class="form-control" type="text" name="" id="" placeholder="000 00 00">
                </div>
            </div>
            <button type="submit" id="request_end" class="btn btn-block mt-5" style="font-size:18px; margin-left:4px; background-color: rgba(205, 0, 0, 1); color:white; ">Qiymət təklifi al</button>
         </form>
     </div>
 </div>
        </div>
    </div>
</section>

@include('front.widget.indi_sat_footer')

@section('script')
<script>
let arr = document.querySelectorAll('.file-image')

console.log(arr.length);

    function resetImage(input) {
  input.value = '';
  input.onchange();
}
function readImage(input) {
  var receiver = input.nextElementSibling.nextElementSibling;
  input.setAttribute('title', input.value.replace(/^.*[\\/]/, ''));
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      receiver.style.backgroundImage = 'url(' + e.target.result + ')';
    };
    reader.readAsDataURL(input.files[0]);
  }
  else receiver.style.backgroundImage = 'none';
}
</script>
<script>
    let teklif_al = document.querySelector('#teklifal')
    let veziyyet_btn =document.querySelector('#veziyyet_btn')
    let veziyyet = document.querySelector('#veziyyet');
    let techizat =document.querySelector('#techizat');
    let firstLink=document.querySelector('.first');
    let threeLink = document.querySelector('.three');
    let fourLink = document.querySelector('.four');
    let secondtLink=document.querySelector('.second');
    let  melumat=document.querySelector("#melumat");
    let melumat_btn=document.querySelector("#melumat_btn");
    let techizat_btn=document.querySelector('#techizat_btn');

    melumat_btn.addEventListener('click', function(e){
        e.preventDefault();
        techizat.style.display="block";
        melumat.style.display="none"
        firstLink.classList.remove('after-link')
        secondtLink.classList.add('active-indiSat','after-link')
    })

    techizat_btn.addEventListener('click', function(e){
        e.preventDefault();
        veziyyet.style.display="block";
        techizat.style.display="none";
        secondtLink.classList.remove('after-link')
        threeLink.classList.add('active-indiSat','after-link')
    })
    veziyyet_btn.addEventListener('click', function(e){
        e.preventDefault();
        veziyyet.style.display="none";
        teklif_al.style.display="block";
        threeLink.classList.remove('after-link')
        fourLink.classList.add('active-indiSat','after-link')
    })




</script>
@endsection
@endsection
