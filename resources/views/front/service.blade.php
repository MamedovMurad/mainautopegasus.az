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
                        <li class="tablinks " onclick="openCity(event, 'kredit','KREDİT')">KREDİT</li>
                        <li class="tablinks " onclick="openCity(event, 'qiymetlendirme','QİYMƏTLƏNDİRMƏ')">QİYMƏTLƏNDİRMƏ</li>
                        <li class="tablinks " onclick="openCity(event, 'barter','')">BARTER</li>

                        <li class="tablinks " onclick="openCity(event, 'Tokyo')">TEST DRİVE</li>
                        <li class="tablinks " onclick="openCity(event, 'sifaris')">SİFARİŞ VER</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="tab-component" >
                    <div id="yuz_noqte" style="display: block"      class="tabcontent"  >
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
                   <div id="kredit"          class="tabcontent"  >
                    <div class="sirket_logo ">
                        <div class="ferrum-logo" style="margin-right: 20px; display:inline-block" >
                         <svg style="margin-left:2px" width="180" height="56" viewBox="0 0 180 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                             <path d="M4.96999 0H55.2953V5.53968H55.2946V49.7563H55.2953V55.296H4.96999H0V50.3253V4.97132V0.000663196H4.96999V0ZM45.3546 9.94064H9.94131V45.3533H45.3546V9.94064Z" fill="#C81414"/>
                             <path fill-rule="evenodd" clip-rule="evenodd" d="M164.4 9.93816H168.647L172.184 18.1512L175.745 9.93816H179.994V26.7435H175.722L175.744 21.9016L176.005 18.5073L175.862 18.4834L173.656 24.2519H170.735L168.481 18.4834L168.362 18.5073L168.647 21.9016V26.7435H164.399V9.93816H164.4ZM74.5053 16.9879H80.9861V20.9525H74.5053V26.7435H70.2104V9.93816H81.9119V13.973H74.5053V16.9879ZM91.9845 16.537H98.7975V20.217H91.9845V22.7332H99.3904V26.7442H87.689V9.93883H99.3904V13.9273H91.9845V16.5376V16.537ZM111.958 17.7473C112.4 17.7473 112.772 17.6525 113.073 17.4621C113.373 17.2724 113.598 17.035 113.749 16.7505C113.9 16.466 113.975 16.1576 113.975 15.8254C113.975 15.4911 113.9 15.1827 113.749 14.8989C113.598 14.615 113.373 14.3763 113.073 14.1866C112.772 13.9963 112.4 13.9021 111.958 13.9021H109.465V17.748H111.958V17.7473ZM109.465 21.4022V26.7435H105.168V9.93816H111.886C112.756 9.93816 113.564 10.0416 114.307 10.2465C115.05 10.4528 115.703 10.7771 116.266 11.2201C116.828 11.6631 117.27 12.2368 117.594 12.9411C117.919 13.6461 118.098 14.4877 118.13 15.4686C118.13 17.035 117.837 18.2653 117.252 19.1606C116.667 20.0539 115.858 20.6587 114.83 20.9771L119.412 26.7435H114.117L110.224 21.4022H109.466H109.465ZM131.977 17.7473C132.422 17.7473 132.793 17.6525 133.093 17.4621C133.395 17.2724 133.62 17.035 133.77 16.7505C133.92 16.466 133.996 16.1576 133.996 15.8254C133.996 15.4911 133.92 15.1827 133.77 14.8989C133.619 14.615 133.394 14.3763 133.093 14.1866C132.793 13.9963 132.422 13.9021 131.977 13.9021H129.486V17.748H131.977V17.7473ZM129.486 21.4022V26.7435H125.189V9.93816H131.907C132.777 9.93816 133.584 10.0416 134.328 10.2465C135.072 10.4528 135.726 10.7771 136.287 11.2201C136.849 11.6631 137.292 12.2368 137.617 12.9411C137.941 13.6461 138.118 14.4877 138.151 15.4686C138.151 17.035 137.858 18.2653 137.272 19.1606C136.686 20.0539 135.879 20.6587 134.851 20.9771L139.432 26.7435H134.138L130.246 21.4022H129.486ZM149.505 21.1177C149.505 21.5766 149.624 21.9566 149.862 22.2577C150.098 22.5581 150.396 22.7829 150.751 22.9335C151.107 23.084 151.491 23.1596 151.902 23.1596C152.314 23.1596 152.698 23.0814 153.054 22.9222C153.41 22.763 153.711 22.5382 153.957 22.2458C154.201 21.9533 154.324 21.5766 154.324 21.1177V9.9375H158.62V21.1177C158.62 22.0999 158.427 22.9627 158.039 23.7061C157.652 24.4489 157.141 25.067 156.508 25.5564C155.875 26.0479 155.159 26.4159 154.36 26.6613C153.561 26.906 152.741 27.0287 151.903 27.0287C151.063 27.0287 150.24 26.906 149.434 26.6613C148.627 26.4166 147.912 26.0485 147.286 25.5564C146.66 25.067 146.158 24.4489 145.778 23.7061C145.4 22.9627 145.21 22.0992 145.21 21.1177V9.9375H149.505V21.1177H149.505Z" fill="#163363"/>
                             <path fill-rule="evenodd" clip-rule="evenodd" d="M80.7963 34.1389V35.968C80.3321 35.7126 79.8877 35.4951 79.464 35.3147C79.0395 35.1343 78.6131 34.9984 78.1833 34.9055C77.9393 34.8591 77.6952 34.8213 77.4512 34.7921C77.2078 34.7629 76.9584 34.749 76.7024 34.749C75.3442 34.749 74.2141 35.1781 73.3148 36.0376C72.4148 36.8971 71.9645 37.9834 71.9645 39.2959C71.9645 40.6316 72.4089 41.7172 73.2976 42.5535C74.1856 43.3898 75.3448 43.8076 76.7727 43.8076C77.1096 43.8076 77.4518 43.7784 77.8 43.7207C78.1488 43.663 78.497 43.5755 78.8459 43.4594C79.194 43.3434 79.5422 43.2041 79.8911 43.0416C80.2399 42.8791 80.5821 42.6875 80.9183 42.466V44.313C80.3381 44.6267 79.708 44.8793 79.0289 45.071C78.3491 45.2627 77.5447 45.3588 76.6155 45.3588C74.862 45.3588 73.4852 44.9205 72.4871 44.0437C71.4884 43.1663 70.8212 42.2 70.4836 41.1436C70.3908 40.8531 70.3211 40.5652 70.2747 40.2807C70.2283 39.9962 70.2051 39.7203 70.2051 39.4531C70.2051 37.6412 70.8172 36.1431 72.0428 34.9586C73.2677 33.7741 74.8276 33.1819 76.7203 33.1819C77.3358 33.1819 77.9658 33.2601 78.6104 33.4173C79.255 33.5738 79.9839 33.8205 80.797 34.1574V34.1395L80.7963 34.1389ZM95.8177 33.2509L101.131 45.201H99.389L97.804 41.6993H92.7518L91.2543 45.201H89.512L94.616 33.2509H95.8184H95.8177ZM95.1903 35.8639L93.4136 40.1673H97.1063L95.1903 35.8639ZM109.724 33.3205H113.434C114.735 33.3324 115.69 33.672 116.299 34.3398C116.909 35.0077 117.214 35.8121 117.214 36.7525C117.214 37.6817 116.891 38.4682 116.247 39.1128C115.603 39.7575 114.589 40.0798 113.207 40.0798H111.43V45.201H109.723V33.3198L109.724 33.3205ZM111.431 34.8531V38.5292H113.365C114.003 38.5405 114.511 38.384 114.889 38.059C115.267 37.7341 115.455 37.2751 115.455 36.6829C115.455 36.6477 115.455 36.6159 115.455 36.5867C115.455 36.5576 115.455 36.529 115.455 36.5052C115.42 36.096 115.255 35.7186 114.958 35.3737C114.662 35.0282 114.154 34.8538 113.434 34.8538H111.43L111.431 34.8531ZM127.793 33.3205V45.2016H126.086V33.3205H127.793ZM146.717 33.3205V34.8531H142.606V45.201H140.898V34.8531H136.787V33.3205H146.716H146.717ZM158.951 33.2509L164.264 45.201H162.521L160.936 41.6993H155.884L154.387 45.201H152.644L157.748 33.2509H158.951ZM158.323 35.8639L156.547 40.1673H160.239L158.323 35.8639ZM174.633 33.3205V43.6683H179.998V45.201H172.926V33.3198H174.633V33.3205Z" fill="#163363"/>
                         </svg>
                        </div>
                       <div class="cityfinance" style="display:inline-block">
                         <svg width="212" height="46" viewBox="0 0 212 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                             <g clip-path="url(#clip0)">
                             <path d="M61.4126 32.3642C65.4602 32.3642 68.0443 30.8968 70.2547 28.4926L67.7951 25.9948C65.9271 27.7434 64.1836 28.8049 61.5371 28.8049C57.3653 28.8049 54.3452 25.3392 54.3452 21.0615V20.9992C54.3452 16.7215 57.3964 13.3182 61.5061 13.3182C64.028 13.3182 65.865 14.3797 67.6396 16.0034L70.0992 13.162C68.0133 11.1635 65.5847 9.75864 61.5374 9.75864C54.9681 9.75864 50.3291 14.8479 50.3291 21.0615V21.1238C50.3291 27.3997 55.0615 32.3642 61.4129 32.3642H61.4126Z" fill="#5B5B5B"/>
                             <path d="M73.9285 12.9743H77.9761V9.38364H73.9285V12.9743ZM74.053 31.9894H77.8513V15.5035H74.053V31.9894Z" fill="#5B5B5B"/>
                             <path d="M88.2814 32.2705C89.7447 32.2705 90.7097 31.9583 91.675 31.4275V28.3364C90.9279 28.7112 90.1494 28.8983 89.3399 28.8983C88.0635 28.8983 87.3164 28.305 87.3164 26.8376V18.7506H91.7374V15.5033H87.3164V10.9759H83.5491V15.5033H81.4631V18.7506H83.5491V27.4306C83.5491 31.0527 85.5105 32.2703 88.2814 32.2703V32.2705Z" fill="#5B5B5B"/>
                             <path d="M102.665 27.7431L98.0576 15.5035H94.01L100.86 32.0208C100.237 33.4257 99.6143 33.8942 98.5245 33.8942C97.746 33.8942 97.0299 33.6443 96.3138 33.2697L95.0374 36.0486C96.1896 36.7042 97.3415 37.079 98.9292 37.079C101.576 37.079 103.008 35.8301 104.347 32.4267L110.885 15.5035H106.962L102.665 27.7431H102.665Z" fill="#5B5B5B"/>
                             <path d="M118.372 31.9894H120.645V17.7205H124.848V15.7534H120.614V14.3797C120.614 12.3501 121.424 11.3198 123.074 11.3198C123.572 11.3198 124.195 11.4134 124.911 11.632V9.63355C124.226 9.41501 123.509 9.32132 122.762 9.32132C121.424 9.32132 120.396 9.69608 119.618 10.4765C118.777 11.3509 118.372 12.5998 118.372 14.2546V15.7534H116.38V17.7205H118.372V31.9894Z" fill="#5B5B5B"/>
                             <path d="M128.965 12.3813H131.456V9.72725H128.965V12.3813ZM129.09 31.9894H131.331V15.6909H129.09V31.9894Z" fill="#5B5B5B"/>
                             <path d="M136.126 31.9894H138.367V22.0917C138.367 20.7179 138.772 19.5939 139.551 18.7197C140.298 17.8767 141.263 17.4397 142.477 17.4397C144.968 17.4397 146.213 18.9385 146.213 21.9671V31.9897H148.455V21.3426C148.455 19.5004 147.988 18.0641 147.054 17.0026C146.089 15.9411 144.812 15.4101 143.162 15.4101C141.076 15.4101 139.457 16.4093 138.367 18.3763V15.6912H136.125V31.9897L136.126 31.9894Z" fill="#5B5B5B"/>
                             <path d="M153.374 31.0216C154.339 31.8957 155.553 32.333 156.986 32.333C159.134 32.333 160.784 31.4275 161.936 29.6165V31.9894H164.146V21.5295C164.146 19.625 163.617 18.1573 162.59 17.127C161.5 16.0341 160.006 15.5033 158.044 15.5033C156.425 15.5033 154.713 15.9404 152.938 16.8147L153.654 18.6569C155.024 17.9388 156.394 17.564 157.795 17.564C160.566 17.564 161.936 18.9066 161.936 21.592V22.5599C160.535 22.1228 159.134 21.904 157.764 21.904C155.927 21.904 154.495 22.3725 153.436 23.2778C152.346 24.2145 151.786 25.4947 151.786 27.1496V27.2744C151.786 28.8044 152.315 30.0533 153.374 31.0211L153.374 31.0216ZM160.659 29.3042C159.788 30.0849 158.729 30.4908 157.484 30.4597C156.487 30.4597 155.678 30.1475 155.024 29.5542C154.37 28.9609 154.028 28.149 154.028 27.1498V27.0561C154.028 26.0257 154.37 25.1828 155.055 24.5895C155.771 23.965 156.768 23.6528 158.044 23.6528C159.445 23.6528 160.753 23.8713 161.967 24.3084V26.3377C161.967 27.5243 161.531 28.5233 160.659 29.304L160.659 29.3042Z" fill="#5B5B5B"/>
                             <path d="M168.506 31.9894H170.747V22.0917C170.747 20.7179 171.152 19.5939 171.931 18.7197C172.678 17.8767 173.643 17.4397 174.857 17.4397C177.348 17.4397 178.593 18.9385 178.593 21.9671V31.9897H180.835V21.3426C180.835 19.5004 180.368 18.0641 179.434 17.0026C178.469 15.9411 177.192 15.4101 175.542 15.4101C173.456 15.4101 171.837 16.4093 170.747 18.3763V15.6912H168.505V31.9897L168.506 31.9894Z" fill="#5B5B5B"/>
                             <path d="M186.407 30.0224C187.746 31.5524 189.459 32.333 191.513 32.333C193.568 32.333 195.312 31.5212 196.744 29.8975L195.437 28.3987C194.222 29.6476 192.977 30.2721 191.638 30.2721C190.237 30.2721 189.054 29.7102 188.12 28.5549C187.155 27.3683 186.657 25.8384 186.657 23.965V23.809C186.657 21.9668 187.124 20.4368 188.089 19.2193C189.023 18.0639 190.175 17.4708 191.545 17.4708C192.853 17.4708 194.129 18.0953 195.343 19.313L196.682 17.627C195.219 16.1596 193.506 15.4101 191.576 15.4101C189.521 15.4101 187.809 16.1908 186.439 17.7519C185.038 19.3442 184.353 21.3738 184.353 23.8093V24.0278C184.353 26.4631 185.038 28.4615 186.408 30.0226L186.407 30.0224Z" fill="#5B5B5B"/>
                             <path d="M200.916 30.0847C202.255 31.5835 203.967 32.3328 205.991 32.3328C208.139 32.3328 209.976 31.521 211.564 29.8973L210.288 28.461C209.042 29.7099 207.641 30.3344 206.084 30.3344C204.746 30.3344 203.625 29.8661 202.722 28.8981C201.757 27.8677 201.196 26.4628 201.072 24.7455H211.969C212 24.5581 212 24.2458 212 23.8088C212 21.311 211.44 19.3128 210.287 17.7826C209.104 16.1901 207.516 15.4096 205.493 15.4096C203.594 15.4096 202.006 16.1903 200.729 17.7514C199.453 19.3437 198.799 21.3733 198.799 23.8399V23.9959C198.799 26.5249 199.515 28.5545 200.916 30.0844L200.916 30.0847ZM201.072 22.9969C201.165 21.311 201.632 19.937 202.473 18.9069C203.282 17.8765 204.279 17.3769 205.493 17.3769C206.769 17.3769 207.797 17.939 208.575 19.0317C209.291 20.0621 209.665 21.3735 209.758 22.9969H201.072Z" fill="#5B5B5B"/>
                             <path fill-rule="evenodd" clip-rule="evenodd" d="M38.1223 0.207055L23.5632 8.63691C23.0863 8.91307 22.8132 9.38715 22.8132 9.93946C22.8132 10.4918 23.0863 10.9661 23.5632 11.242L38.1223 19.6719C38.5993 19.948 39.1451 19.948 39.6223 19.6719C40.0992 19.3957 40.3722 18.9216 40.3722 18.3693V1.5096C40.3722 0.957287 40.0992 0.483209 39.6223 0.207055C39.1453 -0.0690997 38.5995 -0.0690997 38.1223 0.207055Z" fill="#62BF3B"/>
                             <path fill-rule="evenodd" clip-rule="evenodd" d="M38.1223 26.3279L23.5632 34.7578C23.0863 35.0339 22.8132 35.508 22.8132 36.0603C22.8132 36.6126 23.0863 37.0867 23.5632 37.3628L38.1223 45.7927C38.5993 46.0689 39.1451 46.0689 39.6223 45.7927C40.0992 45.5166 40.3722 45.0425 40.3722 44.4902V27.6304C40.3722 27.0781 40.0992 26.6041 39.6223 26.3279C39.1453 26.0517 38.5995 26.0517 38.1223 26.3279Z" fill="#57A7B3"/>
                             <path fill-rule="evenodd" clip-rule="evenodd" d="M22.4752 13.2676L37.0344 21.6975C37.5113 21.9736 37.7843 22.4477 37.7843 23C37.7843 23.5523 37.5113 24.0266 37.0344 24.3025L22.4752 32.7324C21.9983 33.0086 21.4525 33.0086 20.9753 32.7324C20.4984 32.4562 20.2253 31.9822 20.2253 31.4299V14.5701C20.2253 14.0178 20.4984 13.5438 20.9753 13.2676C21.4522 12.9914 21.9981 12.9914 22.4752 13.2676Z" fill="#548E65"/>
                             <path fill-rule="evenodd" clip-rule="evenodd" d="M15.3093 13.2676L0.749959 21.6975C0.273031 21.9736 0.000233559 22.4477 0 23C0.000233559 23.5523 0.273031 24.0266 0.749959 24.3025L15.3091 32.7324C15.786 33.0086 16.3319 33.0086 16.809 32.7324C17.2859 32.4562 17.559 31.9822 17.559 31.4299V14.5701C17.559 14.0178 17.2859 13.5438 16.809 13.2676C16.3321 12.9914 15.7863 12.9914 15.3091 13.2676H15.3093Z" fill="#92C02C"/>
                             </g>
                             <defs>
                             <clipPath id="clip0">
                             <rect width="212" height="46" fill="white"/>
                             </clipPath>
                             </defs>
                         </svg>
                       </div>



                     </div>
                    <div class="o100-noqte-title">
                        <p class="mt-1">KREDİT</p>
                    </div>
                    <div class="content-100-noqte mt-20">
                        <p>
                            Partnyorumuz City Finance BOKT-un cəlbedici kredit və ödəniş şərtləri Auto Pegesusun dəqiq xidmətilə sizlərə təqdim edilir. Siz Auto Pegasusun satış mərkəzinə yaxınlaşaraq qısa zaman ərzində kredit əldə edə bilərsiniz. <br> <br>

                            Peşəkar satış və kredit mütəxəssislərimiz bəyəndiyiniz avtomobili ən qısa yol və qısa müddət ərzində əldə etmənizi təmin edəcəklər. <br> <br>

                            Bütün kredit əməliyyatlarınız bir ofisdə baş tutur və etibarlı şəkildə tez və zəhmətsiz formada avtomobilinə sahib olursunuz.</p>

                    </div>
                    <div class="img-100-noqte mt-5" style="display: flex; justify-content:center">
                        <img src="{{asset('/front/autima/')}}/assets/img/service/kredit.png">
                    </div>
                  </div>
                  <div id="qiymetlendirme"   class="tabcontent"  >
                    <div class="o100-noqte-title">
                        <p>Qiymətləndirmə</p>
                    </div>
                    <div class="content-100-noqte mt-20">
                       <div class="row">
                           <div class="col-lg-8">
                               <p>Auto Pegasusun avtomobil qiymətləndirmə aləti çox özəl alqoritm və süni zəkanın yardımı ilə nəticələnən bir prosesdir. Sizin avtomobilinizin bazar dəyərinin hesablanması və ilkin təklifin verilməsilə nəticələnən bu xidmət, məhz rahatlığınız üçün hazırlanmışdır.</p>
                           </div>
                           <div class="col-lg-4"><img src="{{asset('/front/autima/')}}/assets/img/service/image 1.png"></div>
                       </div>
                       <p> <br>
                        Online qiymət təklifimizdən sonra servisimizə yaxınlaşırsınız, avtomobilinizin vəziyyəti mütəxəssislərimiz tərəfindən yoxlanılır, qiymətdən xoşunuz gəlmirsə, avtomobilinizi satmaq məcburiyyətində deyilsiniz. <br> <br>

                        Qiymət təklifi avtomobiliniz haqqında verdiyiniz məlumatlara əsaslanır. Təklif almaq üçün avtomobiliniz haqqında tələb olunan məlumatları bizə verməyiniz kifayət edir. Əgər servisdə yoxlanış zamanı qeyd etdiyinizdən daha fərqli bir nüans aşkarlanarsa, qiymət təklifi qüvvədən düşür və ya dəyişir. <br> <br>

                        Qiymət təklifimiz bir (1) iş günü müddətində etibarlıdır. Əgər qiymət təklifinizi yenidən almaq istəsəniz, avtomobiliniz haqqında məlumatları yenidən yerləşdirməlisiniz. Lakin nəzərə almalısınız ki, eyni qiymət təklifini almağınızı vəd etmirik, bazarın dəyişən qiymət tendensiyasına uyğun hər dəfə qiymətlərimiz yenidən hesablanır. <br>

                        Əgər sizə verdiyimiz qiyməti bəyəndinizsə, TƏKLİF AL düyməsinə klik etməyiniz kifayət edir. Beləcə peşəkar ekspertlərimiz dərhal sizinlə əlaqə saxlayacaq və sizə uyğun görüş tariximizi dəqiqləşdirəcəklər. Məlumatlar sizə zəng, elektron poçt və SMS formatında göndərilə bilər. Avtomobiliniz sizin yanınızda peşəkar ustalarımız tərəfindən yoxlanılır, yoxlanış nəticələrinin sizin verdiyiniz məlumatlara uyğunluğu təhlil edilir. Əgər təklif xoşunuza gəlməsə, alqı-satqıdan imtina edə bilərsiniz. <br> <br>

                        Qeyd etmək istəyirik ki, həftədə yalnız bir dəfə qiymət təklifi ala bilərsiniz.
                       </p>
                    </div>

                 </div>
                 <div id="sifaris" style="display: block"      class="tabcontent"  >
                    <div class="o100-noqte-title">
                        <p>Sifariş ver</p>
                    </div>
                    <div class="content-100-noqte mt-20">
                        <p>
                            Ölkədaxili, Amerika, Asiya və Avropadan istədiyiniz avtomobili sizin üçün tapırıq. Peşəkar ekspertlərimiz tərəfindən yoxlanışdan keçir. Üstəlik siz nağd və kreditlə avtomobili əldə edə biləcəksiniz. <br> <br>

                            Könlünüzdən keçən avtomobili əldə etməyiniz üçün lazım olan bütün şəraiti yaradırıq. Sizə bircə sevdiyiniz avtomobili seçmək və ürəyiniz istədiyi kimi sürmək qalır. <br> <br>

                            Ad, Soyad
                            Əlaqə Nömrəsi

                            Sizə zəng edərək görüş təyin edəcəyik, beləcə sifarişin detallarını müzakirə edə biləcəyik. Sizin istəklərini tam öyrənib qarşılamaqdan məmnun olarıq. Qarısında da düymə.

                            Suallar hissəsi bura qoyulur:
                            http://new.autopegasus.az/sifarisver - buradakı sual-cavab hissəsi aşağı düşür.</p>

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
       var ban_title=document.querySelector(".banner-title")
    function openCity(evt, cityName,banTitle) {

      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace("active-link", "");
      }

      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += "active-link";
      ban_title.innerText=banTitle;
    }
    </script>
@endsection
@endsection
