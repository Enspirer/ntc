@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@push('after-styles')
    <link href="{{ url('css/careers.css') }}" rel="stylesheet">
@endpush

@section('content')
      
  

    <div class="container-fluid banner p-5" style="margin-top: 6.5rem;" data-aos="zoom-out" data-aos-duration="500">
        <div class="container-md text-center text-white">
          <h1 class="fs-1 mt-5 mb-3" data-aos="fade-down" data-aos-duration="500" data-aos-delay="700">Join Our Team</h1>
          <div class="row justify-content-center">
            <div class="col-sm-6" data-aos="fade-up" data-aos-duration="500" data-aos-delay="700">
              <p>Our biggest asset is our workforce. We value our employees and their expertise as we believe it is the
                influence of Success. We are on the lookout for the experienced as well as the new.</p>
            </div>
          </div>
          <a href="#" class="btn m-5 text-white" role="button" data-aos="flip-down" data-aos-duration="500" data-aos-delay="1100" style="background-color: #68AE42;">Show latest job openings</a>
        </div>
    </div>



    <div class="container" style="margin-top: 4rem;">
      <div class="row justify-content-center align-items-center">
        <div class="col-sm-5" data-aos="zoom-out-right" data-aos-duration="500">
          <video id="video" width="480" height="280" controls>
            <source src="{{ url('img/frontend/careers/video.mp4') }}" type="video/mp4">
            <track label="English" kind="subtitles" srclang="en" src="{{ url('img/frontend/careers/video.vtt') }}" default>
          </video>
        </div>
        <div class="col-sm-5 px-5">
          <h1 data-aos="zoom-out-left mb-2" data-aos-duration="500">Life at NTC</h1>
          <p data-aos="zoom-out-left mb-4" data-aos-duration="500" data-aos-delay="500">We welcome young energetic employees and we train them to be skilled and experienced. at NTC we ensure our employees are enjoying and committed to our organization as we pride ourselves as a faithful employer.</p>

          <h1 data-aos="zoom-out-left" data-aos-duration="500" data-aos-delay="500">Stay connected with us</h1>
              <a href="" class="d-inline-block mx-3 text-body fs-2" data-aos="fade-up" data-aos-duration="500" data-aos-delay="600"><i class="bi bi-facebook"></i></a>
              <a href="" class="d-inline-block mx-3 text-body fs-2" data-aos="fade-up" data-aos-duration="500" data-aos-delay="700"><i class="bi bi-instagram"></i></a>
              <a href="" class="d-inline-block mx-3 text-body fs-2" data-aos="fade-up" data-aos-duration="500" data-aos-delay="800"><i class="bi bi-linkedin"></i></a>
              <a href="" class="d-inline-block mx-3 text-body fs-2" data-aos="fade-up" data-aos-duration="500" data-aos-delay="900"><i class="bi bi-youtube"></i></a>
        </div>
      </div>
    </div>



    <div class="container" style="margin-top: 6rem; margin-bottom: 6rem">
      <div class="row justify-content-between">
        <div class="col-sm-7">
          <h2 data-aos="fade-right" data-aos-duration="500">Latest</h2>
          <h1 data-aos="fade-right" data-aos-duration="500" data-aos-delay="200">Job Openings</h1>
          <p class="mt-4" data-aos="fade-right" data-aos-duration="500" data-aos-delay="400">NTC HR policy ensures that people who will contribute positively to the company’s vision, mission, and objectives are selected, trained motivated, retained and  adequately rewarded. Follow this space for available Career Openings at NTC Group of Companies.</p>

          <div class="accordion mt-5" id="jobs" data-aos="flip-up" data-aos-duration="500" data-aos-delay="600">
            <div class="accordion-item mb-3 rounded p-2" style="box-shadow: 0px 5px 10px #888888">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Lorem ipsum engineer
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#jobs">
                <div class="accordion-body">
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam illo delectus reiciendis unde praesentium omnis quis, ab blanditiis, facere possimus vero culpa deleniti sint animi, quia velit aspernatur. Earum, quis!</p>
                  <div class="clearfix">
                    <div class="float-end">
                      <button class="btn btn-success border-0 px-5" data-bs-toggle="modal" data-bs-target="#apply" style="background-color: #68AE42;">Apply Now</button>
                    </div>      
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item mb-3 rounded p-2" style="box-shadow: 0px 5px 10px #888888">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Lorem ipsum engineer
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#jobs">
                <div class="accordion-body">
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam illo delectus reiciendis unde praesentium omnis quis, ab blanditiis, facere possimus vero culpa deleniti sint animi, quia velit aspernatur. Earum, quis!</p>
                  <div class="clearfix">
                    <div class="float-end">
                      <button class="btn btn-success border-0 px-5" data-bs-toggle="modal" data-bs-target="#apply" style="background-color: #68AE42;">Apply Now</button>
                    </div>      
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!--form-->
        <div class="col-sm-4 p-3 rounded text-white" style="background-color: #245C06;">
          <h1 class="text-center" data-aos="fade-down" data-aos-duration="500" data-aos-delay="200">Wants to work with us</h1>
          <p class="text-center" data-aos="fade-down" data-aos-duration="500">We would love to here your talents, send us your application and we will contact you.</p>

          <form class="px-2">
            <div class="mb-2">
              <label for="name" class="form-label" data-aos="fade-right" data-aos-duration="500" data-aos-delay="300">Name</label>
              <input type="text" class="form-control border-0" id="name" data-aos="fade-left" data-aos-duration="500" data-aos-delay="500" style="background-color: #587d45;">
            </div>
            <div class="mb-2">
              <label for="contact-number" class="form-label" data-aos="fade-right" data-aos-duration="500" data-aos-delay="300">Contact number</label>
              <input type="text" class="form-control border-0" id="contact-number" data-aos="fade-left" data-aos-duration="500" data-aos-delay="500" style="background-color: #587d45;">
            </div>
            <div class="mb-2">
              <label for="email" class="form-label" data-aos="fade-right" data-aos-duration="500" data-aos-delay="300">Email</label>
              <input type="email" class="form-control border-0" id="email" data-aos="fade-left" data-aos-duration="500" data-aos-delay="500" style="background-color: #587d45;">
            </div>
            <div class="mb-2">
              <label for="upload-cv" class="form-label" data-aos="fade-right" data-aos-duration="500" data-aos-delay="300">Upload your cv</label>
              <input type="file" class="form-control border-0" id="upload-cv" data-aos="fade-left" data-aos-duration="500" data-aos-delay="500" style="background-color: #587d45;">
            </div>
            <div class="mb-4">
              <label for="message" class="form-label" data-aos="fade-right" data-aos-duration="500" data-aos-delay="300">Message</label>
              <input type="text" class="form-control border-0" id="message" data-aos="fade-left" data-aos-duration="500" data-aos-delay="500" style="background-color: #587d45;">
            </div>
            <div class="mb-2 text-center" data-aos="flip-down" data-aos-duration="500" data-aos-delay="700">
              <button type="submit" class="btn btn-secondary px-5">Apply</button>
            </div>
          </form>
        </div>
      </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="apply" tabindex="-1" aria-labelledby="applyLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header text-white" style="background-color: #1D5001;">
            <h5 class="modal-title" id="apply-modal">Lorem ipsum engineer</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime cupiditate at modi delectus eaque repudiandae consequatur voluptate odit possimus. Dolor ducimus perspiciatis facere quam sequi assumenda molestiae molestias, sapiente non? Incidunt vitae cupiditate dolorum recusandae, voluptatem omnis aliquid architecto animi maxime magnam placeat, blanditiis, perferendis ullam corrupti dolore facere repellendus!</p>

            <p class="fw-bold">Your responsibilities</p>

            <ul>
              <li class="mb-2" style="font-size: 0.8rem;">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati magnam saepe est inventore totam ipsam!
              </li>
              <li class="mb-2" style="font-size: 0.8rem;">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati magnam saepe est inventore totam ipsam!
              </li>
            </ul>
            <form class="mt-2">
              <div class="mb-2">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" class="form-control" id="name">
              </div>
              <div class="mb-2">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email">
              </div>
              <div class="mb-2">
                <label for="telephone" class="form-label">Telephone</label>
                <input type="text" class="form-control" id="telephone">
              </div>
              <div class="mb-2">
                <label for="cv" class="form-label">Upload your cv</label>
                <input type="file" class="form-control" id="cv">
              </div>
              <div class="mb-2">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" name="message" id="message" cols="30" rows="3"></textarea>
              </div>
            </form>
          </div>
          <div class="modal-footer justify-content-center">
            <button type="button" class="btn" data-bs-dismiss="modal" style="color: #68AE42;">Cancel</button>
            <button type="button" class="btn text-white px-5" style="background-color: #68AE42;">Apply Now</button>
          </div>
        </div>
      </div>
    </div>
    
@endsection