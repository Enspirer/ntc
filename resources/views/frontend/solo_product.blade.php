@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('Products'))

@push('after-styles')
    <link href="{{ url('css/products.css') }}" rel="stylesheet">
@endpush

@section('content')

@if ( session()->has('message') )

    <div class="container" style="background-color: #98FB98; padding-top:5px; margin-bottom:50px; border-radius: 50px 50px; text-align:center;">

        <h1 style="margin-top:150px;" class="fs-1">Thank You!</h1><br>
        <p class="lead mb-3"><h4>We appreciate you for your inquiry. One of our member will get back in touch with you soon!<br><br> Have a great day!</h4></p>
        <br><hr><br>    
        <p class="lead">
            <a class="btn btn-success btn-md mt-3 mb-3" href="{{url('/')}}" role="button">Go Back to Home Page</a>
        </p>
        <br>
    </div>

@else


    <!--navigation path-->
    <section id="path">
        <div class="container mb-3" style="margin-top: 8rem;">
            <p class="mb-0">
            <a href="{{url('/')}}" style="color:black;">Home</a> / Products / 
                @foreach($categories as $key => $cat)
                  @if($cat->id == $category_id)
                    {{$cat->name}}
                  @endif  
                @endforeach()
                / Product Review
            </p>
        </div>
    </section>


    <div class="container text-white">
        <div class="row text-center mx-1 mx-md-0">

        <!-- {{ url('img/frontend/products/products-rice-milling-machine.svg') }} -->

        @foreach($categories as $key => $category)
       
          @if($category->id == $category_id)
            <div class="col-12 col-md mx-md-2 product-category" data-aos="flip-left" data-aos-duration="500" style="background: linear-gradient(to bottom, rgba(104, 174, 66, 0.5), rgba(104, 174, 66, 0.5)),url({{ url(uploaded_asset($category->image)) }}); height: 18rem;">
              <a href="{{ route('frontend.category.all_product',$category->id) }}" style="text-decoration: none">
                <div class="product-text" style="margin-top: 5rem;">
                    <img src="{{uploaded_asset($category->icon) }}" alt="" height="80" style="filter: brightness(50)">
                    <p class="lead fw-bold mt-4" style="color: white">{{$category->name}}</p>
                </div>
              </a>  
            </div>  
          @else
            <div class="col-12 col-md mx-md-2 product-category" data-aos="flip-left" data-aos-duration="500" data-aos-delay="400" style="background: linear-gradient(to bottom, rgba(0,0,0, 0.5), rgba(0,0,0, 100)),url({{ url(uploaded_asset($category->image)) }}); height: 18rem;">
              <a href="{{ route('frontend.category.all_product',$category->id) }}" style="text-decoration: none">
                <div class="product-text">
                  <h5 class="fw-bold text-white">{{$category->name}}</h5>
                </div>
              </a>  
            </div>
          @endif   

        @endforeach
        </div>
      </div>


    <div class="container mt-5 single-product" style="margin-bottom: 7rem;">
        <div class="row">
            <div class="col-12 col-md-3 mb-4 mb-md-0" data-aos="fade-up" data-aos-duration="500" data-aos-delay="500">
                <div class="accordion" id="types">

                  <div class="accordion-item rounded p-1">
                      
                      @foreach($output_array as $key => $sub_category)
                      
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo{{ $sub_category['sub_category_id'] }}" aria-expanded="true" aria-controls="collapseTwo">
                            {{ $sub_category['sub_category_name'] }}
                            </button>
                        </h2>
                    
                  
                      <div id="collapseTwo{{ $sub_category['sub_category_id'] }}" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#types">
                          <div class="accordion-body">

                            <div class="accordion" id="heavy-machinery">

                                @foreach(App\Models\Products::where('sub_category',$sub_category['sub_category_id'])->where('group_by_name',1)->orderBy('order','DESC')->get()->unique('product_name') as $key => $single_product)
                                    <div class="accordion-item rounded p-1">
                                      <h2 class="accordion-header" id="heavy-machinery-one">
                                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#heavy-machinery-collapse-one{{$single_product->id}}" aria-expanded="false" aria-controls="heavy-machinery-collapse-one">                                                  
                                  
                                              {{$single_product->product_name}}                                                  
                                              
                                          </button>
                                      </h2>
                                      <div id="heavy-machinery-collapse-one{{$single_product->id}}" class="accordion-collapse collapse" aria-labelledby="heavy-machinery-one" data-bs-parent="#heavy-machinery-one">
                                          <div class="accordion-body ps-5">

                                          @foreach(App\Models\Products::where('product_name',$single_product->product_name)->where('sub_category',$sub_category['sub_category_id'])->orderBy('order','DESC')->get() as $key => $model_number)

                                            <a href="{{ route('frontend.solo_product',$model_number->id) }}" onMouseOver="this.style.color='green'" onMouseOut="this.style.color='black'" style="text-decoration: none; color:black">
                                              <p >{{ $model_number->model_number }}</p>
                                            </a>
                                        
                                          @endforeach
                                          </div>
                                      </div>
                                    </div>
                                    
                                    
                                @endforeach


                                @foreach(App\Models\Products::where('sub_category',$sub_category['sub_category_id'])->where('group_by_name',0)->orderBy('order','DESC')->get()->unique('product_name') as $key => $single_product)
                                    <div class="accordion-item rounded p-1">
                                      <h2 class="accordion-header" id="heavy-machinery-one">
                                          <a href="{{ route('frontend.solo_product',$single_product->id) }}" class="btn" onMouseOver="this.style.color='green'" onMouseOut="this.style.color='black'" aria-expanded="false" aria-controls="heavy-machinery-collapse-one">                                                  
                                  
                                              {{$single_product->product_name}}                                                  
                                              
                                          </a>
                                      </h2>
                                    
                                    </div>                                        
                                    
                                @endforeach
                              </div>

                          </div>
                      </div>
                      @endforeach
                  </div>
                </div>
            </div>

            <div class="col-12 col-md-9">
                <div class="row">
                  <div class="col-12 col-md-7 text-center mb-4 mb-md-0">
                    <img src="{{uploaded_asset(json_decode($product->multiple_images)[0]->image1) }}" id="main-image" alt="" style="height: 30rem; object-fit:contain; width:400px;">

                    <div class="row justify-content-center mt-3">
                      <div class="col-4 col-md-3">
                        <img src="{{uploaded_asset(json_decode($product->multiple_images)[0]->image1) }}" id="image1" alt="" style="height: 5rem; width: 80px; object-fit:contain; box-shadow: 0px 6px 12px #888888;">
                      </div>
                      <div class="col-4 col-md-3">
                        <img src="{{uploaded_asset(json_decode($product->multiple_images)[1]->image2) }}" alt="" id="image2" style="height: 5rem; width: 80px; object-fit:contain; box-shadow: 0px 6px 12px #888888;">
                      </div>
                      <div class="col-4 col-md-3">
                        <img src="{{uploaded_asset(json_decode($product->multiple_images)[2]->image3) }}" id="image3" alt="" style="height: 5rem; width: 80px; object-fit:contain; box-shadow: 0px 6px 12px #888888;">
                      </div>
                    </div>
                  </div>

                  <div class="col-12 col-md-5">
                    <h1 class="fs-2 fw-bold">{{ $product->product_name }}</h1>
                    <h4 class="mt-2">{{ $product->model_number }}</h4>

                    <p class="mt-4">{{ $product->description }}</p>

                    <table class="table table-striped table-hover mt-5">
                      <tbody>
                        <tr>
                          <td style="font-weight: 600;">Model</td>
                          <td>{{ $product->model_number }}</td>
                        </tr>
                        @foreach(json_decode($product->attributes) as $key => $attribute )
                          <tr>
                            <td style="font-weight: 600;">{{ $attribute->name }}</td>
                            <td>{{ $attribute->value }}</td>
                          </tr>
                        @endforeach()

                        
                      </tbody>
                    </table>

                    
                    <div class="text-center mt-5">
                      <a href="" class="btn d-block py-3 text-white fs-5 fw-bold" data-bs-toggle="modal" data-bs-target="#inquire" style="background-color: #68AE42;">Inquire Now</a>
                    </div>

                  </div>

                    
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="inquire" tabindex="-1" aria-labelledby="inquireLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">

          <form action="{{ route('frontend.product.inquire') }}" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
              <div class="modal-header text-white" style="background-color: #1D5001;">
                <h5 class="modal-title" id="inquire-modal">Send an Inquire</h5>
              </div>
              <div class="modal-body">
                  <div class="mb-2">
                    <label for="product-name" class="form-label">Product Name</label>
                    <input type="text" class="form-control" name="product_name" aria-describedby="product-name" value="{{ $product->product_name }}" readonly>
                  </div>
                  <div class="mb-2">
                    <label for="product-id" class="form-label">Model Number</label>
                    <input type="text" class="form-control" name="product_id" value="{{ $product->model_number }}" readonly>
                  </div>
                  <div class="mb-2">
                    <label for="first-name" class="form-label">First Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="first_name" required>
                  </div>
                  <div class="mb-2">
                    <label for="last-name" class="form-label">Last Name</label>
                    <input type="text" class="form-control" name="last_name">
                  </div>
                  <div class="mb-2">
                    <label for="contact-number" class="form-label">Contact Number <span class="text-danger">*</span></label>   
                    <input type="number" class="form-control" name="contact_number" required>
                  </div>
                  <div class="mb-2">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" name="email">
                  </div>
                  <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" name="message" cols="30" rows="5"></textarea>
                  </div>
                  
                  <div class="col-12 col-md-10 text-center">
                      <div class="g-recaptcha" data-callback="checked" data-sitekey="6LfGnB8dAAAAAH6Baz00Galvcr7s7aZyeGUYly4t" style="display: inline-block;"></div>
                  </div>
              </div>
              <div class="modal-footer justify-content-center">
                <button type="button" class="btn" data-bs-dismiss="modal" style="color: #68AE42;">Cancel</button>
                <input type="submit" class="submit-btn btn text-white px-5" style="background-color: #68AE42;" value="Send Request" disabled/>
              </div>
          </form>  
        </div>
      </div>
    </div>

@endsection

@push('after-scripts')
  <!--product image change-->
    <script>
      $(document).ready(function(){
        $("#image1").click(function(){
        $("#main-image").attr("src", "{{uploaded_asset(json_decode($product->multiple_images)[0]->image1) }}");
        });

        $("#image2").click(function(){
        $("#main-image").attr("src", "{{uploaded_asset(json_decode($product->multiple_images)[1]->image2) }}");
        });

        $("#image3").click(function(){
        $("#main-image").attr("src", "{{uploaded_asset(json_decode($product->multiple_images)[2]->image3) }}");
        });
      });
    </script>
    
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script>
        function checked() {
        $('.submit-btn').removeAttr('disabled');
    };
    </script>
@endpush


@endif

