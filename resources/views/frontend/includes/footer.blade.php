<!--footer-->
  <section id="footer" data-aos="fade-up" data-aos-duration="1000">
      <div class="container-fluid text-white py-4 px-0 p-md-5" style="background-color: #245C06;">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-3 mb-4 mb-md-0">
              <h4>NTC Group of Companies</h4>
              <p>Servicing and Selling Top Tier Agricultural Machinery &amp; Equipment to Sri Lanka Since 1975. Quality.
                Innovative. Focused.</p>
            </div>
            <div class="col-12 col-md-3 text-left mb-4 mb-md-0">
              <h4 class="mb-3 ml-0 ml-md-5">Our Products</h4>
              
                @if(count(App\Models\Category::where('status','Enabled')->get()) == 0)
                  <p class="ml-3 ml-md-5">No Any Products</p>
                @else
                  @foreach(App\Models\Category::where('status','=','Enabled')->get() as $key => $category)
                    <a href="{{ route('frontend.category.all_product',$category->id) }}" style="text-decoration: none; color: white" class="d-block mt-2 ml-3 ml-md-5">{{ $category->name }}</a>
                  @endforeach
                @endif
                
            </div>
            <div class="col-12 col-md-3 pl-md-5 mb-4 mb-md-0">
              <h4>Contact Us</h4>
              <div class="row mt-3 ml-1 ml-md-0">
                <div class="col-2">
                  <i class="bi bi-geo-alt-fill"></i>
                </div>
                <div class="col-10">
                  <p>No 25/13, New Nuge Road, Peliyagoda, Sri Lanka</p>
                </div>
              </div>
              <div class="row ml-1 ml-md-0">
                <div class="col-2">
                  <i class="bi bi-telephone-fill"></i>
                </div>
                <div class="col-10">
                  <p class="mb-0">+94 11-2942939</p>
                  <p>+94 773344391</p>
                </div>
              </div>
              <div class="row ml-1 ml-md-0">
                <div class="col-2">
                  <i class="bi bi-envelope"></i>
                </div>
                <div class="col-10">
                  <p>info@ntc.lk</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-3 text-center">
              <h5>Follow Us</h5>
              <a href="https://www.facebook.com/ntcslr" class="d-inline-block m-2 text-white fs-3" target="_blank"><i class="bi bi-facebook"></i></a>
              <a href="https://www.instagram.com/ntcprivateltd/" class="d-inline-block m-2 text-white fs-3" target="_blank"><i class="bi bi-instagram"></i></a>
              <a href="https://www.linkedin.com/company/ntc-trading-company" class="d-inline-block m-2 text-white fs-3" target="_blank"><i class="bi bi-linkedin"></i></a>
              <a class="d-inline-block m-2 text-white fs-3" target="_blank"><i class="bi bi-youtube"></i></a>
            </div>



              <div class="col-12">
                <hr>
              </div>
            


                <div class="col-12 text-center col-md-6 text-md-left">
                    <small>© All Rights Reserved | NTC 2021</small>
                </div>
                <div class="col-12 text-center col-md-6 text-md-right">
                    <small>Powered by <a href="https://www.enspirer.com/" class="text-black fw-bold">Enspirer</a></small>
                </div>

          </div>
        </div>
        
      </div>
    </section>
    