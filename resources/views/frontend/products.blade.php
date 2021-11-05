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
        <div class="container mb-3" style="margin-top: 6.5rem;">
            <p class="mb-0">
              <a href="{{url('/')}}" style="color:black;">Home</a> / Products / 
              @foreach($categories as $key => $cat)
                @if($cat->id == $category_id)
                  {{$cat->name}}
                @endif  
              @endforeach()
            </p>
        </div>
    </section>


    <div class="container text-white">
        <div class="row text-center mx-1 mx-md-0">


        @foreach($categories as $key => $category)
       
          @if($category->id == $category_id)
            <div class="col-12 col-md mx-md-2 product-category" data-aos="flip-left" data-aos-duration="500" style="background: linear-gradient(to bottom, rgba(104, 174, 66, 0.5), rgba(104, 174, 66, 0.5)),url({{ url(uploaded_asset($category->image)) }}); height: 18rem;">
              <a href="{{ route('frontend.category.all_product',$category->id) }}" style="text-decoration: none">
                <div class="product-text" style="margin-top: 5rem;">
                    <img src="{{uploaded_asset($category->icon) }}" alt="" height="80" style="filter: brightness(50)">
                    <p class="lead fw-bold mt-md-4" style="color: white">{{$category->name}}</p>
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


    <div class="container mt-5 all-products" style="margin-bottom: 7rem;">
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
                  <div class="tab-content">
                      <div class="tab-pane fade active show" id="destoner" aria-labelledby="destoner-tab">
                          <div class="row align-items-center">
                            @if(count($products) == 0)
                                @include('frontend.includes.not_found',[
                                    'not_found_title' => 'Products Not Found',
                                ])
                            @else

                        
                            @foreach($products as $key => $product)
                               
                              <div class="col-12 col-md-4 p-md-1 right-products">
                                  <div class="card" style="min-height: 370px; max-height: 370px;">
                                  
                                    @if( App\Models\Products::where('product_name',$product->product_name)->where('feature_image','=','1')->first())
                                      
                                      <img src="{{uploaded_asset(json_decode(App\Models\Products::where('product_name',$product->product_name)->where('feature_image','=','1')->first()->multiple_images)[0]->image1) }}" style="height: 200px; object-fit:cover;" class="card-img-top" alt="...">
                                    @else
                                      <img src="{{uploaded_asset(json_decode($product->multiple_images)[0]->image1) }}" style="height: 200px; object-fit:cover;" class="card-img-top" alt="...">
                                    @endif
                                      
                                      <div class="card-body">

                                      @if($product->group_by_name == 0 )
                                        <a href="{{ route('frontend.solo_product',$product->id) }}" class="text-decoration-none" style="color: #68AE42;">
                                          <h5 class="card-title" style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical; font-size:18px;">
                                            {{ $product->product_name }}</h5>
                                        </a>
                                      @else
                                        <a href="{{ route('frontend.product_model',$product->id) }}" class="text-decoration-none" style="color: #68AE42;">
                                          <h5 class="card-title" style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical; font-size:18px;">
                                            {{ $product->product_name }}</h5>
                                        </a>
                                      @endif
                                      
                                        <p class="card-text mb-1" style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 4; -webkit-box-orient: vertical;">{{ $product->description }}</p>

                                        <div class="row justify-content-end">
                                          <div class="col-2 text-end pe-1">
                                            <a href="{{ route('frontend.product_model',$product->id) }}" class="text-decoration-none"><i class="bi bi-arrow-right-circle" style="font-size: 1.1rem;"></i></a>
                                          </div>
                                        </div>
                                                                                  
                                      </div>
                                  </div>
                              </div>
                            @endforeach  

                            @endif

                                
                          </div>
                            
                      </div>
                  </div>
              </div>

        </div>
    </div>


@endsection

@push('after-scripts')
  <!--product image change-->
    <!-- <script>
      $(document).ready(function(){
        $("#image1").click(function(){
        $("#main-image").attr("src", "/img/frontend/index/TQSX85 Rice milling machine.svg");
        });

        $("#image2").click(function(){
        $("#main-image").attr("src", "/img/frontend/index/JQSX 10030.svg");
        });

        $("#image3").click(function(){
        $("#main-image").attr("src", "/img/frontend/index/TQSX85 Rice milling machine.svg");
        });
      });
    </script> -->
@endpush


@endif

