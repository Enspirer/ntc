@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@push('after-styles')
    <link href="{{ url('css/index.css') }}" rel="stylesheet">
    
@endpush

@section('content')

  <!-- @foreach($categories as $key => $single_category)
    <style>
        .product-range-{{$single_category->id}}{
            
        }
        .product-range-{{$single_category->id}}:hover {
            background: url('{{url(uploaded_asset($single_category->image))}}');
            color: black;
            animation-name: fadein;
            animation-duration: 0.5s;
        }
    </style>
  @endforeach -->

    <div class="container-fluid banner" data-aos="zoom-in" data-aos-duration="500" style="margin-top: 6.5rem;">
      <div class="container-md">
        <div class="clearfix">

          <!--right side-->
          <div class="float-start text-white banner-text">
            <h2 class="fw-bold" data-aos="fade-right" data-aos-duration="500" data-aos-delay="500"></h2>
            @if($category == null)
              <a href="#" class="btn mt-4 fw-bold text-white" role="button" data-aos="fade-right" data-aos-duration="500" data-aos-delay="800" style="padding: 10px 95px; background-color: #68AE42;">View our products</a>
            @else
              <a href="{{ route('frontend.category.all_product',$category->id) }}" class="btn mt-4 fw-bold text-white" role="button" data-aos="fade-right" data-aos-duration="500" data-aos-delay="800" style="padding: 10px 95px; background-color: #68AE42;">View our products</a>
            @endif
          </div>

          <!--right side-->
          <div class="float-end">

            <div class="text-center text-white rounded px-5 pt-4 pb-5 banner-carousel" data-aos="fade-up-left" data-aos-duration="1000" data-aos-delay="700">
              <h2 class="fw-bold">Best Selling</h2>

              <div id="banner-carousel" class="carousel slide" data-ride="carousel">

                <ul class="carousel-indicators carousel-banner-indicators">
                  <li data-bs-target="#banner-carousel" data-bs-slide-to="0" class="active"></li>
                  <li data-bs-target="#banner-carousel" data-bs-slide-to="1"></li>
                  <li data-bs-target="#banner-carousel" data-bs-slide-to="2"></li>
                  <li data-bs-target="#banner-carousel" data-bs-slide-to="3"></li>
                  <li data-bs-target="#banner-carousel" data-bs-slide-to="4"></li>
                </ul>
              
                @if($best_selling != null)
                  <div class="carousel-inner justify-content-center" style="width: 300px; height: 325px;" >
                    <div class="carousel-item active">
                      <img src="{{uploaded_asset(json_decode($product1->multiple_images)[0]->image1) }}" height="270" width="270">
                      <p class="carousel-caption mt-3">
                        {{$product1->product_name}} 
                        @if($product1->model_number != 'No Model Number')
                          - {{$product1->model_number}}
                        @endif
                        
                      </p>
                    </div>
                    <div class="carousel-item">
                      <img src="{{uploaded_asset(json_decode($product2->multiple_images)[0]->image1) }}" height="270" width="270">
                      <p class="carousel-caption mt-3">
                        {{$product1->product_name}} 
                        @if($product1->model_number != 'No Model Number')
                          - {{$product1->model_number}}
                        @endif
                        
                      </p>
                    </div>
                    <div class="carousel-item">
                      <img src="{{uploaded_asset(json_decode($product3->multiple_images)[0]->image1) }}" height="270" width="270">
                      <p class="carousel-caption mt-3">
                        {{$product3->product_name}} 
                        @if($product3->model_number != 'No Model Number')
                          - {{$product3->model_number}}
                        @endif
                        
                      </p>
                    </div>
                    <div class="carousel-item">
                      <img src="{{uploaded_asset(json_decode($product4->multiple_images)[0]->image1) }}" height="270" width="270">
                      <p class="carousel-caption mt-3">
                        {{$product4->product_name}} 
                        @if($product4->model_number != 'No Model Number')
                          - {{$product4->model_number}}
                        @endif
                        
                      </p>
                    </div>
                    <div class="carousel-item">
                      <img src="{{uploaded_asset(json_decode($product5->multiple_images)[0]->image1) }}" height="270" width="270">
                      <p class="carousel-caption mt-3">
                        {{$product5->product_name}} 
                        @if($product5->model_number != 'No Model Number')
                          - {{$product5->model_number}}
                        @endif
                        
                      </p>
                    </div>
                  </div> 

                @else

                  <div class="carousel-inner justify-content-center" style="width: 300px; height: 325px;" >
                    <div class="carousel-item active">
                      <img src="{{ url('img/frontend/index/JQSX 10030.svg') }}" alt="JQSX 10030" height="300" width="300">
                      <p class="carousel-caption">JQSX 10030</p>
                    </div>
                  </div>               
                  

                @endif  
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      


    <div class="container" style="margin-top: 7rem;">
      <div class="row">
        <div class="col-md-6 col-lg-5" data-aos="fade-down-right" data-aos-duration="500" data-aos-delay="500">
          <img src="{{ url('img/frontend/index/rice.svg') }}" alt="" height="350" style="box-shadow: -5px 10px 10px #888888; mix-blend-mode: multiply;">
        </div>
        <div class="col-md-6 col-lg-6" data-aos="fade-down-left" data-aos-duration="500" data-aos-delay="500">
          <h3>We Refine</h3>
          <h1>the Seeds that Feed the Nation</h1>
          <p class="fw-normal mt-4 mb-0">Formed in 1975 as a trading partner to Nabeesa Group of Companies. We focus on importing Agricultural related equipment and graiin milling machineries.</p>
          <br>
          <p class="fw-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique dolorem corrupti ipsum aspernatur repellendus nisi pariatur consequuntur ab officia, fugit facilis hic tempore porro, numquam rem in, deleniti vitae dolore?</p>
          <a href="{{ route('frontend.about_us') }}" class="btn mt-4 text-white we-care-btn" role="button" data-aos="flip-up" data-aos-duration="500" style="padding: 10px 150px; font-size: 20px; background-color: #68AE42;">Discover more</a>
        </div>
        <div class="col-lg-1 text-center call-us" data-aos="flip-up" data-aos-duration="500" data-aos-delay="1000">
          <img src="{{ url('img/frontend/index/call-us.svg') }}" alt="" height="70">
        </div>
      </div>
    </div>


    <div class="container-fluid text-white text-center banner-products border-0" data-aos="zoom-in" data-aos-duration="500" style="margin-top: 7rem;">
      <div class="container p-5">
        <h2 class="fw-bold p-3 display-6" data-aos="fade-down" data-aos-duration="500" data-aos-delay="500">Get to Our Product Range</h2>
      </div>
      
      <div class="container" style="padding-top: 3rem ;padding-bottom: 7rem;">
        <div class="row text-center">

        @foreach($categories as $key => $single_category)
          <div class="col m-2 p-0 product-range-{{$single_category->id}}" style="background: linear-gradient(to bottom, rgba(0,0,0, 0.5), rgba(0,0,0, 100)),url('{{url(uploaded_asset($single_category->image))}}'); height: 18rem;" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">
            <div class="product-text position-relative">
              <h5 class="fw-bold">{{$single_category->name}}</h5>
              <div class="clearfix">
                <div class="float-end">
                  <a href="{{ route('frontend.category.all_product',$single_category->id) }}" class="btn btn-success rounded-0"><img src="{{ url('img/frontend/index/arrow.svg') }}" alt=""></a>
                </div>
              </div>
            </div>
          </div>
        @endforeach


          <!-- <div class="col m-2 p-0 product-range-1" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">
            <div class="product-text">
              <h5 class="fw-bold">Rice Milling Machine</h5>
              <div class="clearfix">
                <div class="float-end">
                  <a href="" class="btn btn-success rounded-0"><img src="{{ url('img/frontend/index/arrow.svg') }}" alt=""></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col m-2 p-0 product-range-2" data-aos="fade-up" data-aos-duration="500" data-aos-delay="500">
            <div class="product-text">
              <h5 class="fw-bold">Rubber Rollers</h5>
              <div class="clearfix">
                <div class="float-end">
                  <a href="" class="btn btn-success rounded-0"><img src="{{ url('img/frontend/index/arrow.svg') }}" alt=""></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col m-2 p-0 product-range-3" data-aos="fade-up" data-aos-duration="500" data-aos-delay="700">
            <div class="product-text">
              <h5 class="fw-bold">Electric Motors</h5>
              <div class="clearfix">
                <div class="float-end">
                  <a href="" class="btn btn-success rounded-0"><img src="{{ url('img/frontend/index/arrow.svg') }}" alt=""></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col m-2 p-0 product-range-4" data-aos="fade-up" data-aos-duration="500" data-aos-delay="900">
            <div class="product-text">
              <h5 class="fw-bold">Spare Motors</h5>
              <div class="clearfix">
                <div class="float-end">
                  <a href="" class="btn btn-success rounded-0"><img src="{{ url('img/frontend/index/arrow.svg') }}" alt=""></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col m-2 p-0 product-range-5" data-aos="fade-up" data-aos-duration="500" data-aos-delay="1100">
            <div class="product-text">
              <h5 class="fw-bold">Other Machinery</h5>
              <div class="clearfix">
                <div class="float-end">
                  <a href="" class="btn btn-success rounded-0"><img src="{{ url('img/frontend/index/arrow.svg') }}" alt=""></a>
                </div>
              </div>
            </div>
          </div> -->


        </div>
      </div>
    </div>
    


    <div class="container" style="margin-top: 7rem;">
      <div class="row justify-content-center">
        <div class="col-md-5">
          <h1 data-aos="fade-right" data-aos-duration="500">NTC</h1>
          <h1 data-aos="fade-right" data-aos-duration="500">Engineering</h1>
          <p class="mt-5" data-aos="fade-right" data-aos-duration="500" data-aos-delay="200">Ensuring the Quality &amp; Efficiency of Your Rice Mill, NTC Engineering is ready to serve you 24 Hours
            Online.</p>
          <p class="mt-3 mb-5" data-aos="fade-right" data-aos-duration="500" data-aos-delay="400">We are Focused to give you Quick, Innovative Solutions Focused exclusively for you.</p>

          <a href="{{ route('frontend.about_us') }}" class="btn text-white ntc-eng-btn" data-aos="flip-up" data-aos-duration="500" data-aos-delay="200" style="padding: 10px 150px; font-size: 20px; background-color: #68AE42;">Discover More</a>
        </div>

          <div class="col-md-5 text-center" data-aos="zoom-in-left" data-aos-duration="500" data-aos-delay="400">
            <img src="{{ url('img/frontend/index/team.svg') }}" alt="" height="400px" style="box-shadow: -5px 10px 10px #888888;">
          </div>
      </div>
    </div>



    <div class="container text-center" data-aos="fade-up" data-aos-duration="500" style="margin-top: 7rem;">
      <h1>What's new on NTC</h1>
      <div class="row justify-content-center">
        <div class="col-6" data-aos="fade-up" data-aos-duration="500" data-aos-delay="500">
          <p>With Many Unique Brands of Machinery, NTC is focused to give you super quality machinery and
            service. We pursue in superior customer satisfaction and effective solutions creation. Browse Our
            Articles for More Information.</p>
        </div>
      </div>
    </div>
    
    
  @if($news != null)
    <div class="container text-white" style="margin-top: 7rem; margin-bottom: 3rem;">
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          @foreach($news as $key => $new)
          
            <div class="swiper-slide">
            <a href="{{route('frontend.single_news',$new->id)}}" style="text-decoration:none">
                <img src="{{ uploaded_asset($new->feature_image) }}" alt="">
                <h5 style="">{{$new->title}}</h5>
                </a>
            </div>
      
          @endforeach  
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>
    

    <div class="container text-center justify-content-center" data-aos="flip-up" data-aos-duration="700">
      <a href="{{ route('frontend.news') }}" class="btn text-white m-5" style="padding: 10px 150px; font-size: 20px; background-color: #68AE42;">Discover More</a>
    </div>

  @endif
    

@endsection


@push('after-scripts')
    <!-- banner text change -->
    <script>

      var texts = new Array();
      texts.push("46 Years of Experience, <br> Bringing the Finest Machinery to Market.");
      texts.push("High Quality, Rice Refining Machinery <br> &amp; Innovative Solutions.");

      var point = 0;

      function changeText(){
        $('.banner-text h2').html(texts[point]);
        if(point < texts.length - 1){
          point ++;
        }else{
          point = 0;
        }
        setTimeout(changeText, 5000)
      }
      changeText(); 
    </script>



    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 4,
        spaceBetween: 30,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>

    <script>
      $('.swiper-slide img').hover(function() {
        $(this).addClass('slider-hover');
      }, function() {
        $(this).removeClass('slider-hover');
      });
    </script>
@endpush
