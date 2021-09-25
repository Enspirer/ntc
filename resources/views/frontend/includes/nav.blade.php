<nav class="navbar fixed-top navbar-expand-lg navbar-light border-bottom-5 pt-3 bg-light">

  <div class="container">
    <a class="navbar-brand" href="{{ route('frontend.index') }}" data-aos="zoom-out" data-aos-duration="1000"><img src="{{ url('img/logo.svg') }}" alt="NTC Logo" height="60"></a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item active mx-2" data-aos="fade-left" data-aos-duration="300">
          <a href="{{ route('frontend.index') }}" class="nav-link">Home</a>
        </li>
        <li class="nav-item dropdown mx-2" data-aos="fade-left" data-aos-duration="600">
          <a class="nav-link" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor: pointer;">Products</a>
          <div class="dropdown-menu" aria-labelledby="dropdown-menu">
            <div class="container justify-content-center">
              <div class="row text-center">


              @foreach(App\Models\Category::where('status','=','Enabled')->get() as $key => $category)
                                  
                  <div class="col">
                    <div class="card py-5" data-aos="flip-right" data-aos-duration="500">
                      <a href="{{ route('frontend.category.all_product',$category->id) }}" class="text-decoration-none">
                      <img src="{{uploaded_asset($category->icon) }}" class="card-img-top px-5" alt="..." style="height: 6rem;" >
                      <div class="card-body">
                        <h5 class="card-title" style="color: #68AE42;">{{ $category->name }}</h5>
                        <!-- {{ url('img/frontend/nav/nav-rice.svg') }} -->
                        <!-- <p class="card-text text-body">lorem ipsum</p> -->
                      </div>
                      </a>
                    </div>
                  </div>
                
              @endforeach  

                <!-- <div class="col">
                  <div class="card py-5">
                    <img src="{{ url('img/frontend/nav/nav-rubber.svg') }}" class="card-img-top" alt="..." style="height: 6rem;">
                    <div class="card-body">
                      <h5 class="card-title" style="color: #68AE42;">Rubber Rollers</h5>
                      <p class="card-text">lorem ipsum
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card py-5">
                    <img src="{{ url('img/frontend/nav/nav-electric.svg') }}" class="card-img-top" alt="..." style="height: 6rem;">
                    <div class="card-body">
                      <h5 class="card-title" style="color: #68AE42;">Electric Motors</h5>
                      <p class="card-text">lorem ipsum
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card py-5">
                    <img src="{{ url('img/frontend/nav/nav-spare.svg') }}" class="card-img-top" alt="..." style="height: 6rem;">
                    <div class="card-body">
                      <h5 class="card-title" style="color: #68AE42;">Spare Parts</h5>
                      <p class="card-text">lorem ipsum
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card py-5">
                    <img src="{{ url('img/frontend/nav/nav-other.svg') }}" class="card-img-top" alt="..." style="height: 6rem;">
                    <div class="card-body">
                      <h5 class="card-title" style="color: #68AE42;">Other Machineries</h5>
                      <p class="card-text">lorem ipsum
                    </div>
                  </div>
                </div> -->

              </div>
            </div>
          </div>
        </li>
        <li class="nav-item mx-2" data-aos="fade-left" data-aos-duration="900">
          <a href="{{ route('frontend.news') }}" class="nav-link">News</a>
        </li>       
        <li class="nav-item mx-2" data-aos="fade-left" data-aos-duration="1500">
          <a href="{{ route('frontend.about_us') }}" class="nav-link">About Us</a>
        </li>
        <li class="nav-item mx-2" data-aos="fade-left" data-aos-duration="1800">
          <a href="{{ route('frontend.careers') }}" class="nav-link">Careers</a>
        </li>
        <li class="nav-item mx-2" data-aos="fade-left" data-aos-duration="2100">
          <a href="{{ route('frontend.contact_us') }}" class="nav-link">Contact Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

@push('after-scripts')
  <script>
      $('.dropdown').hover(function() {
          $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(100);
      }, function() {
          $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(100);
      }); 
  </script>

@endpush