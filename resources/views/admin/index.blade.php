@extends('layouts.adminbase')
@section('page_title','Admin | Dashboard')
@section('dashboard_select','active')
@section('content')
    <div class="container">
        <div class="row g-3 row-cols-1 row-cols-lg-4 row-cols-md-3 row-cols-sm-2">
            <div class="col">
                <div class="card border-0 cws-shadow rounded-10">
                    <div class="card-body d-flex">
                        <div class="w-50">
                            <p class="text-dark">Total sales</p>
                            <h6>$ 300</h6>
                            <span class="badge bg-danger rounded-10">new $20</span>
                        </div>
                        <div class="w-50">
                            <img src="{{ asset('assets/images/icons/achievement.svg') }}" style="height: 80px; width:80px; " alt="" class="img-fluid float-end">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0 cws-shadow rounded-10">
                    <div class="card-body d-flex">
                        <div class="w-50">
                            <p class="text-dark">Total Enroll</p>
                            <h6>1200</h6>
                            <span class="badge bg-danger rounded-10">new 120</span>
                        </div>
                        <div class="w-50">
                            <img src="{{ asset('assets/images/icons/graduation-cap.svg') }}" style="height: 80px; width:80px; " alt="" class="img-fluid float-end">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0 cws-shadow rounded-10">
                    <div class="card-body d-flex">
                        <div class="w-50">
                            <p class="text-dark">Total Course</p>
                            <h6>20</h6>
                            <span class="badge bg-danger rounded-10">new $20</span>
                        </div>
                        <div class="w-50">
                            <img src="{{ asset('assets/images/icons/online-course.svg') }}" style="height: 80px; width:80px; " alt="" class="img-fluid float-end">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0 cws-shadow rounded-10">
                    <div class="card-body d-flex">
                        <div class="w-75">
                            <p class="text-dark">Total Students</p>
                            <h6>124</h6>
                            <span class="badge bg-danger rounded-10">new $20</span>
                        </div>
                        <div class="w-50">
                            <img src="{{ asset('assets/images/icons/knowledge.svg') }}" style="height: 80px; width:80px; " alt="" class="img-fluid float-end">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="card border-0 cws-shadow rounded-10">
            <div class="card-body d-flex align-items-center">
                <div class="w-25">
                    <h6><img src="{{ asset('assets/images/icons/book.svg') }}" style="height: 20px;" alt="" class="img-fluid">Jump Into Course Creation</h6>
                </div>
                <div class="w-75 d-flex">
                    <a href="{{ route('add.course') }}" class="btn btn-info rounded-25 ms-auto">Create New Course</a>
                </div>
            </div>
        </div>
    </div>
@endsection
