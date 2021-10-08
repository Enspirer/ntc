@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('Single News'))

@push('after-styles')
    <link href="{{ url('css/news.css') }}" rel="stylesheet">
@endpush

@section('content')

    <!--navigation path-->
    <section id="path">
        <div class="container mb-3" style="margin-top: 6.5rem;">
            <p class="mb-0"><a href="{{url('/')}}" style="color:black;">Home</a> / News / {{$single_news->title}}</p>
        </div>
    </section>


    <!--content-->
    <section id="content">
      <div class="container" style="margin-bottom: 5rem;">
        <div class="row justify-content-center">
          <div class="col-12 col-md-8 mb-4 mb-md-0">
            <img src="{{uploaded_asset($single_news->feature_image) }}" alt="" width="100%" height="350px" style="object-fit:cover;" data-aos="fade-right" data-aos-duration="500">
            <h1 class="mt-4" data-aos="fade-right" data-aos-duration="500" data-aos-delay="300">{{ $single_news->title }}</h1>
            <p class="text-secondary mb-0" data-aos="fade-right" data-aos-duration="500" data-aos-delay="500" style="font-size: 0.7rem;">
              Posted on {{ $single_news->created_at->toDateString() }} &nbsp &nbsp

              @if(App\Models\Auth\User::where('id',$single_news->user_id)->first() !== null) 
                By {{App\Models\Auth\User::where('id',$single_news->user_id)->first()->first_name}} {{App\Models\Auth\User::where('id',$single_news->user_id)->first()->last_name}} 
              @endif
          
            </p>

            <div class="row mt-2 mt-md-3">
              <div class="col-12" data-aos="fade-up" data-aos-duration="500" data-aos-delay="700">
                {!! $single_news->description !!}
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <h1 class="mb-3 mb-md-5 ps-md-2" data-aos="fade-down" data-aos-duration="500">Recent News</h1>

            @if(count($latest_news) == 0)
              <h5 class="p-3 text-secondary" style="text-align: center">No Any Recent News</h5>
            @else
              @foreach($latest_news as $key => $news)
                <a href="{{ route('frontend.single_news',$news->id) }}" class="text-reset text-decoration-none">
                  <div class="container mb-4" data-aos="fade-up" data-aos-duration="500">
                    <div class="row border align-items-center">
                      <div class="col-5 p-0">
                        <img src="{{uploaded_asset($news->feature_image) }}" alt="" width="100%" height="100px;" style="object-fit:cover">
                      </div>
                      <div class="col-7">
                      <div style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                        <p class="fw-bold">{{ $news->title }}</p>
                      </div>
                      <div  style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                          <p class="mb-0" data-aos="fade-down-left" data-aos-duration="500" data-aos-delay="500">{!! $news->description !!}</p>
                      </div>
                      </div>
                    </div>
                  </div>
                </a>
              @endforeach
            @endif
            
                  
          </div>
        </div>
      </div>
    </section>

@endsection