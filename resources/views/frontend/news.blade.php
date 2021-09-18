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


    <div class="container mb-5">
        <div class="row">
            <div class="col-7" data-aos="zoom-in-right" data-aos-duration="500">
                <img src="{{ url('img/frontend/news/news-main.svg') }}" alt="" width="100%" height="auto">
            </div>
            <div class="col-5 p-5">
                <h1 data-aos="fade-down-left" data-aos-duration="500" data-aos-delay="300">China release newest Rice Milling machine 2021</h1>
                <p class="mt-4" data-aos="fade-down-left" data-aos-duration="500" data-aos-delay="500">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet eligendi repellat porro, rerum corporis velit error, laborum ex sint non deleniti aperiam maxime vitae distinctio placeat in deserunt facilis ad natus ipsum blanditiis id hic. Dolorem, esse eos quia repudiandae repellat cum voluptates, vero consectetur fuga libero cupiditate maiores impedit!</p>

                <div class="clearfix">
                    <div class="float-end">
                        <a href="{{ route('frontend.single_news') }}" class="btn px-5" style="background-color: #68AE42;" data-aos="flip-down" data-aos-duration="500" data-aos-delay="700">View More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <div class="container" style="margin-top: 7rem;">
        <div class="row">
            <div class="col-4 p-0">
                <div class="card" data-aos="flip-right" data-aos-duration="500">
                    <img src="{{ url('img/frontend/news/news-1.svg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <a href="news-solo.html" class="text-reset text-decoration-none"><h5 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, natus.</h5></a>
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex beatae veritatis repellendus illum, reprehenderit harum iusto rerum pariatur commodi sint!</p>
                    </div>
                  </div>
            </div>
            <div class="col-4 p-0">
                <div class="card" data-aos="flip-right" data-aos-duration="500" data-aos-delay="200">
                    <img src="{{ url('img/frontend/news/news-2.svg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio, rerum.</h5>
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex beatae veritatis repellendus illum, reprehenderit harum iusto rerum pariatur commodi sint!</p>
                    </div>
                  </div>
            </div>
            <div class="col-4 p-0">
                <div class="card" data-aos="flip-right" data-aos-duration="500" data-aos-delay="400">
                    <img src="{{ url('img/frontend/news/news-3.svg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, maiores?</h5>
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex beatae veritatis repellendus illum, reprehenderit harum iusto rerum pariatur commodi sint!</p>
                    </div>
                  </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-4 p-0">
                <div class="card" data-aos="flip-left" data-aos-duration="500" data-aos-delay="400">
                    <img src="{{ url('img/frontend/news/news-4.svg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, natus.</h5>
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex beatae veritatis repellendus illum, reprehenderit harum iusto rerum pariatur commodi sint!</p>
                    </div>
                  </div>
            </div>
            <div class="col-4 p-0">
                <div class="card" data-aos="flip-left" data-aos-duration="500" data-aos-delay="200">
                    <img src="{{ url('img/frontend/news/news-5.svg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio, rerum.</h5>
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex beatae veritatis repellendus illum, reprehenderit harum iusto rerum pariatur commodi sint!</p>
                    </div>
                  </div>
            </div>
            <div class="col-4 p-0" data-aos="flip-left" data-aos-duration="500">
                <div class="card">
                    <img src="{{ url('img/frontend/news/news-6.svg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, maiores?</h5>
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex beatae veritatis repellendus illum, reprehenderit harum iusto rerum pariatur commodi sint!</p>
                    </div>
                  </div>
            </div>
        </div>

        <!--pagination-->
        <div class="my-5">
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <i class="bi bi-chevron-left fw-bold"></i>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">...</a></li>
                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <i class="bi bi-chevron-right"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    
@endsection