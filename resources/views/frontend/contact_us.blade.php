@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('Contact Us'))

@push('after-styles')
    <link href="{{ url('css/contact-us.css') }}" rel="stylesheet">
@endpush

@section('content')

    <div class="container-fluid position-relative" style="margin-top: 6.5rem;">
        <div class="mapouter"><div class="gmap_canvas"><iframe  id="gmap_canvas" src="https://maps.google.com/maps?q=gangalegoda%20Banda%20Raja%20Mawatha,%20Peliyagoda&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" style="filter:brightness(70%); width:100%; height:460px"></iframe><a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div>

        <div class="container-md text-white get-in-touch" data-aos="flip-left" data-aos-delay="1000" data-aos-duration="1000" style="position: absolute; left: 50px; top: 150px;">
            <h1 class="fs-2">Get in touch</h1>
            <div class="row px-2 px-md-0">
                <div class="col-12 col-md-3">
                    <p>For Any Inquiries & Assistance, Please Get In Touch With Us Anytime. We are happy to serve you.</p>
                </div>
            </div>
            
        </div>
    </div>



    <div class="container text-center contact-information" style="margin-bottom: 8rem; margin-top: 8rem;">
        <h1 style="margin-bottom: 4rem;" data-aos="fade-down" data-aos-duration="500">Contact Information</h1>
        <div class="row mt-5 justify-content-center">
            <div class="col-12 col-lg-3">
                <div class="card border-top-0" data-aos="flip-left" data-aos-duration="500" style="height: 17rem; width: 17rem; box-shadow: 0 10px 10px 2px #888888;">
                    <div class="card-body">
                        <i class="bi bi-geo-alt-fill fs-3 position-relative d-inline rounded-circle contact-icons"></i>
                        <h5 class="card-title mt-3">Address</h5>
                        <p class="card-text mt-4">25/13, New Nuge Road, Peliyagoda, Sri Lanka</p>
                    </div>
                    </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="card border-top-0" data-aos="flip-right" data-aos-duration="500" data-aos-delay="300" style="height: 17rem; width: 17rem; box-shadow: 0 10px 10px 2px #888888;">
                    <div class="card-body">
                        <i class="bi bi-telephone-fill fs-3 position-relative d-inline rounded-circle contact-icons"></i>
                        <h5 class="card-title mt-3">Telephone</h5>
                        <p class="card-text mt-4">011-2942939 <br> 0773344391</p>
                    </div>
                    </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="card border-top-0" data-aos="flip-left" data-aos-duration="500" data-aos-delay="500" style="height: 17rem; width: 17rem ; box-shadow: 0 10px 10px 2px #888888;">
                    <div class="card-body">
                        <i class="bi bi-envelope-fill fs-3 position-relative d-inline rounded-circle contact-icons"></i>
                        <h5 class="card-title mt-3">Email</h5>
                        <p class="card-text mt-4">info@ntc.lk</p>
                    </div>
                    </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="card border-top-0" data-aos="flip-right" data-aos-duration="500" data-aos-delay="700" style="height: 17rem; width: 17rem ; box-shadow: 0 10px 10px 2px #888888;">
                    <div class="card-body">
                        <i class="bi bi-clock-fill fs-3 position-relative d-inline rounded-circle contact-icons"></i>
                        <h5 class="card-title mt-3">Opening Hours</h5>
                        <p class="card-text mt-4">Open 09.00 AM - 06.00 PM</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('after-scripts')
    @if(config('access.captcha.contact'))
        @captchaScripts
    @endif
@endpush