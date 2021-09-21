@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

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
            <p class="mb-0">Home / Products / Rice Milling Machine</p>
        </div>
    </section>


    <div class="container text-white">
        <div class="row text-center">
          <div class="col mx-2" data-aos="flip-left" data-aos-duration="500" style="background: linear-gradient(to bottom, rgba(104, 174, 66, 0.5), rgba(104, 174, 66, 0.5)),url(../img/frontend/index/rice-milling-machine.svg); height: 18rem;">
            <div class="product-text" style="margin-top: 5rem;">
                <img src="{{ url('img/frontend/products/products-rice-milling-machine.svg') }}" alt="" height="80">
                <p class="lead fw-bold mt-4">Rice Milling Machine</p>
            </div>
          </div>
          <div class="col mx-2" data-aos="flip-left" data-aos-duration="500" data-aos-delay="200" style="background: linear-gradient(to bottom, rgba(0,0,0, 0.5), rgba(0,0,0, 100)),url(../img/frontend/index/rubber-rollers.svg); height: 18rem;">
            <div class="product-text">
              <h5 class="fw-bold">Rubber Rollers</h5>
            </div>
          </div>
          <div class="col mx-2" data-aos="flip-left" data-aos-duration="500" data-aos-delay="400" style="background: linear-gradient(to bottom, rgba(0,0,0, 0.5), rgba(0,0,0, 100)),url(../img/frontend/index/electric-motors.svg); height: 18rem;">
            <div class="product-text">
              <h5 class="fw-bold">Electric Motors</h5>
            </div>
          </div>
          <div class="col mx-2" data-aos="flip-left" data-aos-duration="500" data-aos-delay="600" style="background: linear-gradient(to bottom, rgba(0,0,0, 0.5), rgba(0,0,0, 100)),url(../img/frontend/index/spare-parts.svg); height: 18rem;">
            <div class="product-text">
              <h5 class="fw-bold">Spare Motors</h5>
            </div>
          </div>
          <div class="col mx-2" data-aos="flip-left" data-aos-duration="500" data-aos-delay="800" style="background: linear-gradient(to bottom, rgba(0,0,0, 0.5), rgba(0,0,0, 100)),url(../img/frontend/index/other-machinery.svg); height: 18rem;">
            <div class="product-text">
              <h5 class="fw-bold">Other Machinery</h5>
            </div>
          </div>
        </div>
      </div>


    <!--filter-->
    <section id="filters">
      <div class="container mt-5">
          <div class="clearfix">
              <div class="float-start">
                  <p class="fw-bold">04 items found</p>
              </div>
              <div class="float-end filter">
                  <label class="fw-bold" for="sort">Sort By:</label>
                      <select name="sort" id="sort">
                          <option value="latest">Latest</option>
                      </select>
              </div>
          </div>
      </div>
    </section>


    <div class="container" style="margin-bottom: 7rem;">
        <div class="row">
            <div class="col-3" data-aos="fade-up" data-aos-duration="500" data-aos-delay="500">
                <div class="accordion" id="types">

                    <div class="accordion-item rounded p-1">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                Small Machinery
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#types">
                                <div class="accordion-body">
                                </div>
                            </div>
                    </div>

                    <div class="accordion-item rounded p-1">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                Heavy Machinery
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#types">
                            <div class="accordion-body">

                                <div class="accordion" id="heavy-machinery">

                                        <div class="accordion-item rounded p-1">
                                        <h2 class="accordion-header" id="heavy-machinery-one">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#heavy-machinery-collapse-one" aria-expanded="false" aria-controls="heavy-machinery-collapse-one">
                                              Destoner
                                            </button>
                                        </h2>
                                        <div id="heavy-machinery-collapse-one" class="accordion-collapse collapse" aria-labelledby="heavy-machinery-one" data-bs-parent="#heavy-machinery-one">
                                            <div class="accordion-body ps-5">
                                            <p>TQSX85</p>
                                            <p>TQSX100</p>
                                            <p>TQSX125</p>
                                            <p>JQSX 100*30</p>
                                            </div>
                                        </div>
                                        </div>
                                        
                                        <div class="accordion-item rounded p-1">
                                        <h2 class="accordion-header" id="heavy-machinery-two">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#heavy-machinery-collapse-two" aria-expanded="false" aria-controls="heavy-machinery-collapse-two">
                                            Lorem ipsum
                                            </button>
                                        </h2>
                                        <div id="heavy-machinery-collapse-two" class="accordion-collapse collapse" aria-labelledby="heavy-machinery-two" data-bs-parent="#heavy-machinery-two">
                                            <div class="accordion-body ps-5">
                                                <p>TQSX85</p>
                                                <p>TQSX100</p>
                                                <p>TQSX125</p>
                                                <p>JQSX 100*30</p>
                                            </div>
                                        </div>
                                        </div>

                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="accordion-item rounded p-1">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                            Combined Cleaner
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#types">
                            <div class="accordion-body">
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item rounded p-1">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                            Husker
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#types">
                            <div class="accordion-body">
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item rounded p-1">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                            Water Polisher
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#types">
                            <div class="accordion-body">
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item rounded p-1">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                            Lorem ipsum
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#types">
                            <div class="accordion-body">
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item rounded p-1">
                        <h2 class="accordion-header" id="headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                            Lorem ipsum
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#types">
                            <div class="accordion-body">
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item rounded p-1">
                        <h2 class="accordion-header" id="headingEight">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                            Lorem ipsum
                            </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#types">
                            <div class="accordion-body">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-9">
                <div class="row">
                  <div class="col-7 text-center">
                    <img src="{{ url('img/frontend/index/TQSX85 Rice milling machine.svg') }}" id="main-image" alt="" style="height: 30rem;">

                    <div class="row justify-content-center">
                      <div class="col-3">
                        <img src="{{ url('img/frontend/index/TQSX85 Rice milling machine.svg') }}" id="image1" alt="" style="height: 5rem; box-shadow: 0px 6px 12px #888888;">
                      </div>
                      <div class="col-3">
                        <img src="{{ url('img/frontend/index/JQSX 10030.svg') }}" alt="" id="image2" style="height: 5rem; box-shadow: 0px 6px 12px #888888;">
                      </div>
                      <div class="col-3">
                        <img src="{{ url('img/frontend/index/TQSX85 Rice milling machine.svg') }}" id="image3" alt="" style="height: 5rem; box-shadow: 0px 6px 12px #888888;">
                      </div>
                    </div>
                  </div>

                  <div class="col-5">
                    <h1 class="fs-1 fw-bold">Destoner</h1>
                    <h4 class="mt-2">TQSX85</h4>

                    <p class="mt-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque ipsam odio sint quae quam fugit, aspernatur facere? Omnis suscipit aperiam eum quaerat ea accusantium qui iure est? Vero provident cumque quod, laudantium veritatis iste, ipsa asperiores porro earum laboriosam ipsam.</p>

                    <table class="table table-striped table-hover mt-5">
                      <tbody>
                        <tr>
                          <td style="font-weight: 600;">Model</td>
                          <td>TQSX85</td>
                        </tr>
                        <tr>
                          <td style="font-weight: 600;">Output(t/h)</td>
                          <td>Lorem, ipsum.</td>
                        </tr>
                        <tr>
                          <td style="font-weight: 600;">Power(k/w)</td>
                          <td>Lorem, ipsum.</td>
                        </tr>
                        <tr>
                          <td style="font-weight: 600;">Air Volume(m^2/h)</td>
                          <td>Lorem, ipsum.</td>
                        </tr>
                        <tr>
                          <td style="font-weight: 600;">Speed(rpm)</td>
                          <td>Lorem, ipsum.</td>
                        </tr>
                        <tr>
                          <td style="font-weight: 600;">Net weight(kg)</td>
                          <td>Lorem, ipsum.</td>
                        </tr>
                        <tr>
                          <td style="font-weight: 600;">Dimensions(m)</td>
                          <td>Lorem, ipsum.</td>
                        </tr>
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

          <form action="{{ route('frontend.product_rice_milling.inquire') }}" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
              <div class="modal-header text-white" style="background-color: #1D5001;">
                <h5 class="modal-title" id="inquire-modal">Send an Inquire</h5>
              </div>
              <div class="modal-body">
                  <div class="mb-2">
                    <label for="product-name" class="form-label">Product Name</label>
                    <input type="text" class="form-control" name="product_name" aria-describedby="product-name" value="Destoner" readonly>
                  </div>
                  <div class="mb-2">
                    <label for="product-id" class="form-label">Product ID</label>
                    <input type="text" class="form-control" name="product_id" value="TQSX85" readonly>
                  </div>
                  <div class="mb-2">
                    <label for="first-name" class="form-label">First Name</label>
                    <input type="text" class="form-control" name="first_name" required>
                  </div>
                  <div class="mb-2">
                    <label for="last-name" class="form-label">Last Name</label>
                    <input type="text" class="form-control" name="last_name" required>
                  </div>
                  <div class="mb-2">
                    <label for="contact-number" class="form-label">Contact Number</label>
                    <input type="number" class="form-control" name="contact_number" required>
                  </div>
                  <div class="mb-2">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" name="email" required>
                  </div>
                  <div class="mb-2">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" name="message" cols="30" rows="5" required></textarea>
                  </div>
              </div>
              <div class="modal-footer justify-content-center">
                <button type="button" class="btn" data-bs-dismiss="modal" style="color: #68AE42;">Cancel</button>
                <input type="submit" class="btn text-white px-5" style="background-color: #68AE42;" value="Send Request" />
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
        $("#main-image").attr("src", "/img/frontend/index/TQSX85 Rice milling machine.svg");
        });

        $("#image2").click(function(){
        $("#main-image").attr("src", "/img/frontend/index/JQSX 10030.svg");
        });

        $("#image3").click(function(){
        $("#main-image").attr("src", "/img/frontend/index/TQSX85 Rice milling machine.svg");
        });
      });
    </script>
@endpush


@endif

