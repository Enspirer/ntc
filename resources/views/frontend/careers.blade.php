@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('Careers'))

@push('after-styles')
    <link href="{{ url('css/careers.css') }}" rel="stylesheet">
@endpush

@section('content')
 

@if ( session()->has('message') )

  <div class="container" style="background-color: #98FB98; padding-top:5px; margin-bottom:50px; border-radius: 50px 50px; text-align:center;">

      <h1 style="margin-top:150px;" class="fs-1">Thank You!</h1><br>
      <p class="lead mb-3"><h4>We received your application. We appreciate you taking the time to apply.<br><br>  If you are selected for an interview, our human resources department will be in contact with you.<br><br> Have a great day!</h4></p>
      <br><hr><br>    
      <p class="lead">
          <a class="btn btn-success btn-md mt-2 mb-2" href="{{url('careers')}}" role="button">Go Back to Careers Page</a>
      </p>
      <br>
  </div>

@else  

    <div class="container-fluid banner p-2 p-md-5" style="margin-top: 6.5rem;" data-aos="fade-up" data-aos-duration="500">
        <div class="container-md text-center text-white">
          <h1 class="fs-1 mt-5 mb-3" data-aos="fade-down" data-aos-duration="500" data-aos-delay="700">Join Our Team</h1>
          <div class="row justify-content-center">
            <div class="col-12 col-md-6" data-aos="fade-up" data-aos-duration="500" data-aos-delay="700">
              <p>Our biggest asset is our workforce. We value our employees and their expertise as we believe it is the
                influence of Success. We are on the lookout for the experienced as well as the new.</p>
            </div>
          </div>
          <a href="#" class="btn m-1 m-md-5 text-white" role="button" data-aos="flip-down" data-aos-duration="500" data-aos-delay="1100" style="background-color: #68AE42;">Show latest job openings</a>
        </div>
    </div>



    <div class="container" style="margin-top: 8rem;">
      <div class="row justify-content-center align-items-center">
        <div class="col-12 col-md-5 mb-3 mb-md-0" data-aos="fade-up" data-aos-duration="500">
          <video id="video" width="480" height="280" controls>
            <source src="{{ url('img/frontend/careers/video.mp4') }}" type="video/mp4">
            <track label="English" kind="subtitles" srclang="en" src="{{ url('img/frontend/careers/video.vtt') }}" default>
          </video>
        </div>
        <div class="col-12 col-md-5 px-md-5">
          <h1 data-aos="fade-up" data-aos-duration="500">Life at NTC</h1>
          <p data-aos="fade-up" data-aos-duration="500" data-aos-delay="500">We welcome young energetic employees and we train them to be skilled and experienced. at NTC we ensure our employees are enjoying and committed to our organization as we pride ourselves as a faithful employer.</p>

          <h1 data-aos="fade-up" data-aos-duration="500" data-aos-delay="500">Stay connected with us</h1>
              <a href="" class="d-inline-block mx-3 text-body fs-2" data-aos="fade-up" data-aos-duration="500" data-aos-delay="600"><i class="bi bi-facebook"></i></a>
              <a href="" class="d-inline-block mx-3 text-body fs-2" data-aos="fade-up" data-aos-duration="500" data-aos-delay="700"><i class="bi bi-instagram"></i></a>
              <a href="" class="d-inline-block mx-3 text-body fs-2" data-aos="fade-up" data-aos-duration="500" data-aos-delay="800"><i class="bi bi-linkedin"></i></a>
              <a href="" class="d-inline-block mx-3 text-body fs-2" data-aos="fade-up" data-aos-duration="500" data-aos-delay="900"><i class="bi bi-youtube"></i></a>
        </div>
      </div>
    </div>



    <div class="container latest" style="margin-top: 8rem; margin-bottom: 8rem">
      <div class="row justify-content-between">
        <div class="col-sm-7">
          <h2 data-aos="fade-up" data-aos-duration="500">Latest</h2>
          <h1 data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">Job Openings</h1>
          <p class="mt-4" data-aos="fade-up" data-aos-duration="500" data-aos-delay="400">NTC HR policy ensures that people who will contribute positively to the company’s vision, mission, and objectives are selected, trained motivated, retained and  adequately rewarded. Follow this space for available Career Openings at NTC Group of Companies.</p>

          <div class="accordion mt-5" id="jobs" data-aos="flip-up" data-aos-duration="500" data-aos-delay="600">

          @if(count($jobs) == 0)
            <h1 class="text-center career-alert-info" data-aos="fade-down" data-aos-duration="500" data-aos-delay="200" style="color:grey; margin-top:100px;">No any job vacancy openings for now. But we would love to here your talents, send us your application and we will contact you.</h1>
                        
          @else

            @foreach($jobs as $key=> $job)
              <div class="accordion-item mb-3 rounded p-2" style="box-shadow: 0px 5px 10px #888888">
                <h2 class="accordion-header" id="headingTwo">
                  <h5 class="collapsed p-3" type="button" data-bs-target="#collapseTwo{{$job->id}}" aria-expanded="false" aria-controls="collapseTwo">
                      {{$job->title}}
                  </h5>
                </h2>
                <div id="collapseTwo{{$job->id}}" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#jobs">
                  <div class="accordion-body">
                    <div class="mb-3" style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;position:relative;overflow-x:hidden;">{!!$job->description!!}</div>
                    
                    <div class="clearfix">
                      <div class="float-end">
                        <button class="btn btn-success border-0 px-5" data-bs-toggle="modal" data-bs-target="#apply{{$job->id}}" style="background-color: #68AE42;">Apply Now</button>
                      </div>      
                    </div>
                  </div>
                </div>
              </div>
            @endforeach

          @endif            

          </div>
        </div>

        <!--form-->
        <div class="col-sm-4 p-3 rounded text-white" style="background-color: #245C06;">
          <h1 class="text-center" data-aos="fade-down" data-aos-duration="500" data-aos-delay="200">Wants to work with us</h1>
          <p class="text-center" data-aos="fade-down" data-aos-duration="500">We would love to here your talents, send us your application and we will contact you.</p>

          <form action="{{ route('frontend.careers.general_candidate') }}" class="px-2" method="post" enctype="multipart/form-data">
          {{csrf_field()}}

            <div class="mb-2">
              <label for="name" class="form-label" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">Name</label>
              <input type="text" class="form-control border-0" name="name" data-aos="fade-up" data-aos-duration="500" data-aos-delay="500" style="background-color: #587d45;" required>
            </div>
            <div class="mb-2">
              <label for="contact-number" class="form-label" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">Contact number</label>
              <input type="text" class="form-control border-0" name="contact_number" data-aos="fade-up" data-aos-duration="500" data-aos-delay="500" style="background-color: #587d45;" required>
            </div>
            <div class="mb-2">
              <label for="email" class="form-label" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">Email</label>
              <input type="email" class="form-control border-0" name="email" data-aos="fade-up" data-aos-duration="500" data-aos-delay="500" style="background-color: #587d45;" required>
            </div>
            <div class="mb-2">
              <label for="upload-cv" class="form-label" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">Upload your cv</label>
              <input type="file" class="form-control border-0" name="cv_upload" data-aos="fade-up" data-aos-duration="500" data-aos-delay="500" style="background-color: #587d45;" required>
            </div>
            <div class="mb-4">
              <label for="message" class="form-label" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">Message</label>
              <input type="text" class="form-control border-0" name="message" data-aos="fade-up" data-aos-duration="500" data-aos-delay="500" style="background-color: #587d45;" required>
            </div>

            <div class="row mb-4 justify-content-center">
                <div class="col-12 text-center">
                    <div class="g-recaptcha d-inline-block" data-callback="checked" data-sitekey="6Lel4Z4UAAAAAOa8LO1Q9mqKRUiMYl_00o5mXJrR"></div>
                </div>
            </div>
            <div class="mb-2 text-center" data-aos="flip-down" data-aos-duration="500" data-aos-delay="700">
              <button type="submit" class="btn btn-secondary px-5" id="submit_btn" disabled>Apply</button>
            </div>
          </form>
        </div>
      </div>
    </div>


    <!-- Modal -->
    @foreach($jobs as $key=> $job)
    <div class="modal fade" id="apply{{$job->id}}" tabindex="-1" aria-labelledby="applyLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <form action="{{ route('frontend.careers.job_candidate') }}" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
            <div class="modal-header text-white" style="background-color: #1D5001;">
              <h5 class="modal-title" id="apply-modal">{{$job->title}}</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              {!!$job->description!!}

             
                <div class="mt-4 mb-2">
                  <label for="name" class="form-label">Your Name</label>
                  <input type="text" class="form-control" name="name" required>
                </div>
                <div class="mb-2">
                  <label for="email" class="form-label">Email address</label>
                  <input type="email" class="form-control" name="email" required>
                </div>
                <div class="mb-2">
                  <label for="telephone" class="form-label">Contact Number</label>
                  <input type="text" class="form-control" name="contact_number" required>
                </div>
                <div class="mb-2">
                  <label for="cv" class="form-label">Upload your cv</label>
                  <input type="file" class="form-control" name="cv_upload" required>
                </div>
                <div class="mb-2">
                  <label for="message" class="form-label">Message</label>
                  <textarea class="form-control" name="message" id="message" cols="30" rows="3" required></textarea>
                </div>
            </div>
            <div class="modal-footer justify-content-center">
              <input type="hidden" name="position" value="{{$job->title}}" />
              <button type="button" class="btn" data-bs-dismiss="modal" style="color: #68AE42;">Cancel</button>
              <button type="submit" class="btn text-white px-5" style="background-color: #68AE42;">Apply Now</button>
            </div>
            
          </form>
        </div>
      </div>
    </div>
    @endforeach

    
@endif

@endsection

@push('after-scripts')
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script>
    function checked() {
        $('#submit_btn').removeAttr('disabled');
    };
</script>


@endpush
