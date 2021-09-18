@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@push('after-styles')
    <link href="{{ url('css/news.css') }}" rel="stylesheet">
@endpush

@section('content')

    <!--navigation path-->
    <section id="path">
        <div class="container mb-3" style="margin-top: 6.5rem;">
            <p class="mb-0">Home / News / Lorem ipsum</p>
        </div>
    </section>


    <!--content-->
    <section id="content">
      <div class="container" style="margin-bottom: 5rem;">
        <div class="row justify-content-center">
          <div class="col-8">
            <img src="{{ url('img/frontend/news/news-1.svg') }}" alt="" width="100%" height="auto" data-aos="fade-right" data-aos-duration="500">
            <h1 class="mt-4" data-aos="fade-right" data-aos-duration="500" data-aos-delay="300">How to start rice mill business ?</h1>
            <p class="text-secondary" data-aos="fade-right" data-aos-duration="500" data-aos-delay="500" style="font-size: 0.7rem;">Posted on 21.03.2021 &nbsp &nbsp By J.Mayanthan</p>

            <div class="row mt-3">
              <div class="col-6" data-aos="fade-up" data-aos-duration="500" data-aos-delay="700">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi saepe sapiente esse necessitatibus voluptas voluptate accusantium hic voluptatibus architecto quasi. Corrupti adipisci illo repellat quidem iusto aperiam vel soluta error ratione, similique debitis suscipit? Expedita doloribus aperiam vitae perferendis unde quos debitis. Minus ex, voluptate inventore perspiciatis animi optio enim suscipit nulla accusantium praesentium nisi. Iste ad facilis dignissimos placeat molestiae id numquam necessitatibus aspernatur possimus blanditiis debitis est eligendi nisi, perferendis quae exercitationem. Similique animi saepe odio laudantium nihil!</p>
              </div>
              <div class="col-6" data-aos="fade-up" data-aos-duration="500" data-aos-delay="900">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi saepe sapiente esse necessitatibus voluptas voluptate accusantium hic voluptatibus architecto quasi. Corrupti adipisci illo repellat quidem iusto aperiam vel soluta error ratione, similique debitis suscipit? Expedita doloribus aperiam vitae perferendis unde quos debitis. Minus ex, voluptate inventore perspiciatis animi optio enim suscipit nulla accusantium praesentium nisi. Iste ad facilis dignissimos placeat molestiae id numquam necessitatibus aspernatur possimus blanditiis debitis est eligendi nisi, perferendis quae exercitationem. Similique animi saepe odio laudantium nihil!</p>
              </div>
            </div>
          </div>
          <div class="col-4">
            <h1 class="mb-5 ps-2" data-aos="fade-down" data-aos-duration="500">Recent News</h1>

            <div class="container mb-4" data-aos="fade-up" data-aos-duration="500">
              <div class="row border align-items-center">
                <div class="col-5 p-0">
                  <img src="{{ url('img/frontend/news/news-2.svg') }}" alt="" width="100%" height="auto">
                </div>
                <div class="col-7">
                 <p class="fw-bold">Lorem ipsum dolor sit.</p>
                 <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, iusto?</p>
                </div>
              </div>
            </div>

            <div class="container mb-4" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
              <div class="row border align-items-center">
                <div class="col-5 p-0">
                  <img src="{{ url('img/frontend/news/news-2.svg') }}" alt="" width="100%" height="auto">
                </div>
                <div class="col-7">
                 <p class="fw-bold">Lorem ipsum dolor sit.</p>
                 <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, iusto?</p>
                </div>
              </div>
            </div>

            <div class="container mb-4" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">
              <div class="row border align-items-center">
                <div class="col-5 p-0">
                  <img src="{{ url('img/frontend/news/news-2.svg') }}" alt="" width="100%" height="auto">
                </div>
                <div class="col-7">
                 <p class="fw-bold">Lorem ipsum dolor sit.</p>
                 <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, iusto?</p>
                </div>
              </div>
            </div>

            <div class="container mb-4" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">
              <div class="row border align-items-center">
                <div class="col-5 p-0">
                  <img src="{{ url('img/frontend/news/news-2.svg') }}" alt="" width="100%" height="auto">
                </div>
                <div class="col-7">
                 <p class="fw-bold">Lorem ipsum dolor sit.</p>
                 <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, iusto?</p>
                </div>
              </div>
            </div>

            <div class="container mb-4" data-aos="fade-up" data-aos-duration="500" data-aos-delay="400">
              <div class="row border align-items-center">
                <div class="col-5 p-0">
                  <img src="{{ url('img/frontend/news/news-2.svg') }}" alt="" width="100%" height="auto">
                </div>
                <div class="col-7">
                 <p class="fw-bold">Lorem ipsum dolor sit.</p>
                 <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, iusto?</p>
                </div>
              </div>
            </div>

            <div class="container mb-4" data-aos="fade-up" data-aos-duration="500" data-aos-delay="500">
              <div class="row border align-items-center">
                <div class="col-5 p-0">
                  <img src="{{ url('img/frontend/news/news-2.svg') }}" alt="" width="100%" height="auto">
                </div>
                <div class="col-7">
                 <p class="fw-bold">Lorem ipsum dolor sit.</p>
                 <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, iusto?</p>
                </div>
              </div>
            </div>

            
          </div>
        </div>
      </div>
    </section>

@endsection