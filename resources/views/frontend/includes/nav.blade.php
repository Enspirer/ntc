<nav class="navbar fixed-top navbar-expand-lg navbar-light border-bottom-5 pt-3 bg-light">

  <div class="container">
    <a class="navbar-brand" href="{{ route('frontend.index') }}" data-aos="zoom-out" data-aos-duration="1000"><img src="{{ url('img/logo.svg') }}" alt="NTC Logo" height="60"></a>
    
    <div class="row logos d-none">
      <div class="col-6">        
        <div data-aos="zoom-out" data-aos-duration="1000">
        <img src="{{ url('img/frontend/index/dl.jpg') }}" alt="dl" height="35">
        </div>
      </div>
      <div class="col-6">
        <div data-aos="zoom-out" data-aos-duration="1000">
        <img src="{{ url('img/frontend/index/dingxin.png') }}" alt="dingxin" height="35">
        </div>
      </div>
    </div>

    <!-- <div  >
      <img src="{{ url('img/frontend/index/dl.jpg') }}" class="text-center" height="60">
      <img src="{{ url('img/frontend/index/dingxin.png') }}" class="text-center" height="60">
    </div> -->


    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    

    <div class="collapse navbar-collapse" id="navbar">
      <ul class="navbar-nav ms-auto align-item-center">

        <li class="nav-item {{ Request::is('/') ? 'active' : '' }} mx-2" data-aos="fade-left" data-aos-duration="300">
          <img src="{{ url('img/frontend/index/dl.jpg') }}" alt="dl" height="50">
        </li>
        <li class="nav-item {{ Request::is('/') ? 'active' : '' }} mx-2" data-aos="fade-left" data-aos-duration="300">
          <img src="{{ url('img/frontend/index/dingxin.png') }}" class="mr-3" alt="dingxin" height="50">
        </li>

        <li class="nav-item {{ Request::is('/') ? 'active' : '' }} mx-2" data-aos="fade-left" data-aos-duration="300">
          <a href="{{ url('/') }}" class="nav-link">Home</a>
        </li>

        <li class="nav-item large-dropdown mx-2" data-aos="fade-left" data-aos-duration="600">
          <a class="nav-link {{ Request::segment(1)=='product' ? 'active' : '' }}" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor: pointer;">Products</a>

          <div class="dropdown-menu large-menu" aria-labelledby="dropdown-menu">
            <div class="container justify-content-center">
              <div class="row text-center">


              @foreach(App\Models\Category::where('status','=','Enabled')->get() as $key => $category)
                                  
                  <div class="col-12 col-md">
                    <div class="card py-5" data-aos="flip-right" data-aos-duration="500">
                      <a href="{{ route('frontend.category.all_product',$category->id) }}" class="text-decoration-none">
                      <img src="{{uploaded_asset($category->icon) }}" class="card-img-top px-5 d-none d-md-block" alt="..." style="height: 6rem;" >
                      <div class="card-body">
                        <h5 class="card-title" style="color: #68AE42;">{{ $category->name }}</h5>
                      </div>
                      </a>
                    </div>
                  </div>
                
              @endforeach
              </div>
            </div>
          </div>
        </li>

        <li class="nav-item dropdown small-dropdown mx-2" data-aos="fade-left" data-aos-duration="600">
          <a class="nav-link {{ Request::segment(1)=='product' ? 'active' : '' }}" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor: pointer;">Products</a>

          <ul class="dropdown-menu px-0 small-menu" aria-labelledby="navbarDropdown">
              @foreach(App\Models\Category::where('status','=','Enabled')->get() as $key => $category)
                  <li><a href="{{ route('frontend.category.all_product',$category->id) }}" class="dropdown-item text-secondary">{{ $category->name }}</a></li>
              @endforeach
          </ul>
        </li>

        <li class="nav-item {{ Request::segment(1)=='news' ? 'active' : '' }} mx-2" data-aos="fade-left" data-aos-duration="900">
          <a href="{{ url('news') }}" class="nav-link">News</a>
        </li>       
        <li class="nav-item {{ Request::is('about-us') ? 'active' : '' }} mx-2" data-aos="fade-left" data-aos-duration="1500">
          <a href="{{ url('about-us') }}" class="nav-link">About Us</a>
        </li>
        <li class="nav-item {{ Request::is('careers') ? 'active' : '' }} mx-2" data-aos="fade-left" data-aos-duration="1800">
          <a href="{{ url('careers') }}" class="nav-link">Careers</a>
        </li>
        <li class="nav-item {{ Request::is('contact-us') ? 'active' : '' }} mx-2" data-aos="fade-left" data-aos-duration="2100">
          <a href="{{ url('contact-us') }}" class="nav-link">Contact Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

@push('after-scripts')
  <script>
      $('.large-dropdown').hover(function() {
          $(this).find('.large-menu').stop(true, true).delay(100).fadeIn(100);
      }, function() {
          $(this).find('.large-menu').stop(true, true).delay(100).fadeOut(100);
      }); 

      var mq = window.matchMedia( "(max-width: 576px)" );
      if (mq.matches) {
      // window width is at less than 570px
        $('.logos').removeClass('d-none');
      }
      else {
      // window width is greater than 570px
      $('.logos').addClass('d-none');
      }
  </script>

@endpush