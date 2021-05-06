@extends('layouts.base')
@section('content')
    <div class="container-fluid p-0 pt-4 mt-n5" style="background-color: #87EBD6;
        background: #87EBD6 -webkit-gradient(linear, left top, left bottom, from(#87BDEB), to(#87EBD6)) no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 mb-3 mx-auto d-flex">
                    <img src="{{ asset('assets/images/banner-coding.png') }}" class="img-fluid mx-lg-0 mx-auto" alt="">
                </div>
                <div class="col-lg-7 ">
                    <h1 class="display-4 text-center">
                        Better Learning. Better Results.
                    </h1>
                    <p class=" text-center text-muted">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos architecto debitis cum harum doloribus. In commodi omnis ipsum laborum quas, quisquam accusamus distinctio deserunt tempore et facilis possimus odio magnam?</p>
                    <div class="col-9 mb-4 mx-auto d-flex pt-3"><a href="#" class="btn btn-outline-success rounded-25 mx-auto" style="width: 150px;">Know more</a></div>
                </div>
            </div>
        </div>
    </div>
        <!-- recommended for you section -->
        <div class="container mt-4">
            <h5>New Courses <span class="small text-muted fw-light float-end" style="font-size: 13px;">see all</span></h5>
            <div class="row">
              <div class="col-md-12">
                <div id="news-slider" class="owl-carousel">
                    @php
                        for($i = 1; $i<7; $i++):
                    @endphp
                    
                  <div class="post-slide shadow-sm m-2">
                    <div class="post-img m-0 p-0">
                      <img src="{{ asset('assets/images/'.$i.'.png') }}" alt="{{ asset('assets/images/'.$i.'png') }}">
                      <a href="{{ route('course') }}" class="over-layer"><i class="far fa-play-circle" style="font-size: 50px;"></i></a>
                    </div>
                    <div class="post-content">
                      <h3 class="post-title">
                        <a href="#">Lorem ipsum dolor sit amet.</a>
                      </h3>
                      <p class="post-description">
                          Design | html5 & css3
                      </p>
                      <!-- <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam consectetur cumque dolorum, ex incidunt ipsa laudantium necessitatibus neque quae tempora......</p> -->
                      <span class="post-date"><i class="fa fa-clock-o"></i>1.5 hours</span>
                      <a href="#" class="read-more">₹ 1000/-</a>
                    </div>
                  </div>
                  @php
                      endfor;
                  @endphp
                </div>
              </div>
            </div>
          </div>
        <!-- Page Content  -->
@endsection