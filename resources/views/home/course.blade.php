@extends('layouts.base')
@section('content')
    <div class="container-fluid" style="background-color: #fbfbf8;">
        <div class="container py-3">
            <div class="row">
                <div class="col-lg-4">
                    <div class="post-slide bg-transparent border-0 cws-shadow-md">
                        {{-- <div class="post-img"> --}}
                            <img src="{{ asset('assets/images/1.png') }}" class="img-fluid rounded-15" alt="">
                            {{-- <a href="#" class="over-layer"><i class="far fa-play-circle" style="font-size: 50px;"></i></a> --}}
                        {{-- </div> --}}
                    </div>
                </div>
                <div class="col-lg-8 pt-3">
                    <h4 class="text-dark">The Web Developer Bootcamp</h4>
                    <p class="text-dark small">The only course you need to learn web development - HTML, CSS, JS, Node, and More!</p>
                    <span class="badge bg-warning rounded-25 p-2 px-3"><i class="fa fa-star"></i> 4.5</span><span class="text-dark small"> (81,665 ratings)</span>
                    <p class="small text-dark mt-4">114,521 students enrolled</p>
                    <div class="btn-group">
                        <a href="" class="btn btn-outline-danger rounded-circle"><i class="fa fa-heart"></i></a>
                        <a href="" class="btn btn-outline-info ms-3 rounded-25">Add to cart</a>
                        {{-- <a href="" class="btn btn-outline-info rounded-25 ms-3">Buy Now</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-7 mb-4">
                <div class="card cws-shadow-md rounded-15 border-0" style="background-color: #fbfbf8;">
                    <div class="card-body">
                        <h4>What you'll learn</h4>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li class="small">How to build websites using HTML5, CSS, Javascript and jQuery</li>
                                    <li class="small">Start your career as a Web Developer</li>
                                    <li class="small">Handle forms and send e-mails from you website</li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li class="small">Build responsive Websites that load perfectly on desktops, tablets and mobile devices</li>
                                    <li class="small">HTML5 semantic elements and best practices</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5" >
                <div class="card border-0 cws-shadow-md rounded-15 ">
                    <div class="card-body">
                        <div class="post-slide bg-transparent border-0 shadow-none w-100 p-0 m-3">
                            <div class="post-img">
                                <img src="{{ asset('assets/images/html.jpg') }}" alt="" class="img-fluid">
                                <a href="#" class="over-layer"><span><i class="far fa-play-circle" style="font-size: 50px;"></i></span></a>
                            </div>
                            <p class="text-muted text-center mt-3"><a href="" class="">Preview this course</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection