<!--footer-->
<section id="footer">
      <div class="container-fluid text-white p-5" style="background-color: #245C06;">
        <div class="container">
          <div class="row">
            <div class="col-sm-3" data-aos="fade-up" data-aos-duration="1000">
              <h4>NTC Group of Companies</h4>
              <p>Servicing and Selling Top Tier Agricultural Machinery &amp; Equipment to Sri Lanka Since 1975. Quality.
                Innovative. Focused.</p>
            </div>
            <div class="col-sm-3 text-center" data-aos="fade-up" data-aos-duration="1000">
              <h4 class="mb-3">Our Products</h4>
              
                @if(count(App\Models\Category::where('status','Enabled')->get()) == 0)
                  No Any Products
                @else
                  @foreach(App\Models\Category::where('status','=','Enabled')->get() as $key => $category)
                    <a href="{{ route('frontend.category.all_product',$category->id) }}" style="text-decoration: none; color: white" class="d-block mt-2">{{ $category->name }}</a>
                  @endforeach
                @endif
                
            </div>
            <div class="col-sm-3 pl-5" data-aos="fade-up" data-aos-duration="1000">
              <h4>Contact Us</h4>
              <div class="row">
                <div class="col-1">
                  <i class="bi bi-geo-alt-fill"></i>
                </div>
                <div class="col-11">
                  <p>lorem ipsum address</p>
                </div>
              </div>
              <div class="row">
                <div class="col-1">
                  <i class="bi bi-telephone-fill"></i>
                </div>
                <div class="col-11">
                  <p class="mb-0">0112 xxxxxxxx</p>
                  <p>0112 xxxxxxxx</p>
                </div>
              </div>
              <div class="row">
                <div class="col-1">
                  <i class="bi bi-envelope"></i>
                </div>
                <div class="col-11">
                  <p>lorem@loremipsum.com</p>
                </div>
              </div>
            </div>
            <div class="col-sm-3 text-center" data-aos="fade-up" data-aos-duration="1000">
              <h5>Follow Us</h5>
              <a href="" class="d-inline-block m-2 text-white fs-3"><i class="bi bi-facebook"></i></a>
              <a href="" class="d-inline-block m-2 text-white fs-3"><i class="bi bi-instagram"></i></a>
              <a href="" class="d-inline-block m-2 text-white fs-3"><i class="bi bi-linkedin"></i></a>
              <a href="" class="d-inline-block m-2 text-white fs-3"><i class="bi bi-youtube"></i></a>
            </div>
          </div>
        </div>
        
      </div>
    </section>
    