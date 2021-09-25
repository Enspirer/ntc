@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@push('after-styles')
    <link href="{{ url('css/news.css') }}" rel="stylesheet">
@endpush

@section('content')

    <section id="path">
        <div class="container mb-3" style="margin-top: 6.5rem;">
            <p class="mb-0">Home / News</p>
        </div>
    </section>
    
    @if($news_latest == null)
        @include('frontend.includes.not_found',[
            'not_found_title' => 'News Not Found',
        ])
    @else
        <div class="container mb-5">
            <div class="row">
                <div class="col-7" data-aos="zoom-in-right" data-aos-duration="500">
                    <img src="{{uploaded_asset($news_latest->feature_image) }}" alt="" width="100%" height="350px" style="object-fit:cover;">
                </div>
                <div class="col-5 p-5">
                    <h1 data-aos="fade-down-left" data-aos-duration="500" data-aos-delay="300">{{ $news_latest->title }}</h1>
                    <div style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 6; -webkit-box-orient: vertical;">
                        <p class="mt-4" data-aos="fade-down-left" data-aos-duration="500" data-aos-delay="500">{!! $news_latest->description !!}</p>
                    </div>
                    <div class="clearfix">
                        <div class="float-end mt-4">
                            <a href="{{ route('frontend.single_news',$news_latest->id) }}" class="btn px-5" style="background-color: #68AE42;" data-aos="flip-down" data-aos-duration="500" data-aos-delay="700">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <div class="container" style="margin-top: 7rem;">
            <div class="row">

                @foreach($news as $key => $new)
                    <div class="col-4 p-1 p-0">
                        <div class="card" data-aos="flip-right" data-aos-duration="500" style="min-height: 410px; max-height: 410px;">
                            <img src="{{uploaded_asset($news_latest->feature_image) }}" style="height:220px; object-fit:cover" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a href="{{ route('frontend.single_news',$new->id) }}" class="text-reset text-decoration-none">
                                    <div style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">
                                        <h5 class="card-title">{{ $new->title }}</h5>
                                    </div>
                                </a>
                                <div style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">
                                    <p class="card-text">{!! $new->description !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach  
            </div>

        
            <!--pagination-->
            <div class="my-5">
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <!-- <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <i class="bi bi-chevron-left fw-bold"></i>
                            </a>
                        </li> -->
                        <li class="page-item">{{ $news->links() }}</li>
                        <!-- <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="#">6</a></li> -->
                        <!-- <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <i class="bi bi-chevron-right"></i>
                            </a>
                        </li> -->
                    </ul>
                </nav>
            </div>
        </div>
    @endif

    
@endsection