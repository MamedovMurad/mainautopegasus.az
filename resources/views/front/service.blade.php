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
@include('front.widget.xidmetler')
@endsection
