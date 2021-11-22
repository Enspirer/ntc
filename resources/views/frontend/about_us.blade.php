@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('About Us'))

@push('after-styles')
    <link href="{{ url('css/about-us.css') }}" rel="stylesheet">
@endpush

@section('content')
      

    <div class="container-fluid banner" data-aos="zoom-out" data-aos-duration="500" style="margin-top: 6.5rem;">
        <div class="container-md text-center text-white">
        <h2 data-aos="fade-down" data-aos-duration="500" data-aos-delay="700">Who we are</h2>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 mt-2 mt-md-4" data-aos="fade-up" data-aos-duration="500" data-aos-delay="700">
                <p style="line-height: 2rem;">We are the leading Rice Mill Machinery, Agriculture &amp; Engineering Service provider in Sri Lanka.
                  Formed in 1975, NTC (Pvt) Ltd is an Organization where we thrive on bringing Quality,
                  Innovative Solutions; Focused on Sri Lankan Agriculture.
                </p>
            </div>
        </div>
      </div>
    </div>



    <div class="container about-us" style="margin-top: 8rem;">
      <div class="row justify-content-center">
        <div class="col-12 col-md-5 mb-3 mb-md-0" data-aos="fade-right" data-aos-duration="500">
          <img src="{{ url('img/frontend/about/building.svg') }}" alt="" class="img-fluid" style="box-shadow: -5px 10px 10px #888888;">
        </div>
        <div class="col-12 col-md-5 px-md-5 mb-3 mb-md-0">
          <h3 data-aos="fade-up" data-aos-duration="500">About Us</h3>
          <p data-aos="fade-up" data-aos-duration="500">With over 48 Years of Experience, NTC is the preferred supplier and service provider for many Rice Mills in Sri Lanka. We provide Rice Milling Machinery, Rubber Rollers, Milling Spare Parts, Engineering and Repair Services to all types of Rice Extraction organizations. We help Rice Mills and undertake complete service and consultation from the initiation of factory and beyond.</p>
          <p data-aos="fade-up" data-aos-duration="500">Our Main office is located in Colombo that supply Rice Refining and Milling Services to the country. We are the sole agent for Double Lion Rubber Rollers in Sri Lanka which is considered to value over 65% of the Market Share and we are the sole agent &amp; distributor for Dingxin China - a renowned supplier for rice mill machinery.</p>
          <p data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">We cater to the complete rice mill value chain including machinery, spares and engineering services. As a social responsible corporate citizen we constantly support the agriculture communities in the country by sharing our expert knowledge free of charge.</p>
          <p data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">We are the trusted supplier for the major rice mills in Sri Lanka. We strive to share our expert knowledge with startup rice mills and we provide consultancy in B2B business activities. We believe Our business helps to nourish and serve the Nation.</p>
        </div>
      </div>
    </div>



    <div class="container text-center what-we-do" style="margin-top: 8rem;">
      <h1 data-aos="fade-up" data-aos-duration="500">What we do</h1>
      <div class="row justify-content-center">
        <div class="col-12 col-md-6" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">
          <p>We import, distribute, and service Rice Milling &amp; Agricultural Machinery and Accessories to all
            forms of growing industries in Sri Lanka. Our Network includes Over 120 Dealers and Agents
            Island-wide from Medium to Large Scale Rice Mills.</p>
        </div>
      </div>
    </div>



    <div class="container-fluid text-white text-center banner-products border-0" style="margin-top: 4rem;">
        <div class="container p-md-5 mt-3">
            <div class="row justify-content-center">
                <div class="col-12 col-md-4 mb-3 mb-md-0" data-aos="fade-down" data-aos-duration="1000">
                    <div class="card motive-card shadow-lg" style="width: 22rem; height: 25rem;">
                        <div class="card-body">
                            <h3 class="card-title">Our Goal</h3>
                            <p class="card-text mt-4">Our goal is to exceed the expectations of every client by offering outstanding customer service by providing good quality goods as per their needs. our hands on experience and proper dealings in international level and locally ensuring that our clients receive the most effective and professional service.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-3 mb-md-0" data-aos="fade-up" data-aos-duration="1000">
                    <div class="card motive-card shadow-lg" style="width: 22rem; height: 25rem;">
                        <div class="card-body">
                            <h3 class="card-title">Our Vision</h3>
                            <p class="card-text mt-4">To be the first choice among the brands from self to consuming; by enriching Sri Lanka's agriculture farming with the best quality product "NABEESA" pledges to nature hard at being every day.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-3 mb-md-0" data-aos="fade-up-down" data-aos-duration="1000">
                    <div class="card motive-card shadow-lg" style="width: 22rem; height: 25rem;">
                        <div class="card-body">
                            <h3 class="card-title">Our Mission</h3>
                            <p class="card-text mt-4">Serve the rural community, our customers and all other stakeholders through our core business-property service-and other related businesses, based on our three main principles of reducing the cost of space & agriculture production Enhancing local market bridging customer needs with environmental effects</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--statistics-->
    <section id="statistics">
        <div class="container text-center">
            <div class="row justify-content-center" style="margin-top: 4.5rem;">
                <div class="col-9 col-md-3 p-2 border-end-md-0 mb-3 mb-md-0 p-md-4 bg-white shadow-lg border-end" data-aos="flip-right" data-aos-duration="500">
                    <h1 class="fw-bold fs-1" style="color: #68AE42;">1200 +</h1>
                    <p class="mb-0" style="color: #999999;">Customers</p>
                </div>
                <div class="col-9 col-md-3 p-2 mb-3 mb-md-0 p-md-4 bg-white shadow-lg border-end" data-aos="flip-right" data-aos-duration="500" data-aos-delay="200">
                    <h1 class="fw-bold fs-1" style="color: #68AE42;">200 +</h1>
                    <p class="mb-0" style="color: #999999;">Products</p>
                </div>
                <div class="col-9 col-md-3 p-2 mb-3 mb-md-0 p-md-4 bg-white shadow-lg border-end" data-aos="flip-right" data-aos-duration="500" data-aos-delay="400">
                    <h1 class="fw-bold fs-1" style="color: #68AE42;">12 Years +</h1>
                    <p class="mb-0" style="color: #999999;">Experience</p>
                </div>
            </div>
        </div>
    </section>
    

@endsection