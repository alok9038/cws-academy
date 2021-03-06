@extends('layouts.adminbase')
@section('page_title','Admin | Create Course')
@section('create_course_select','active')
@section('content')

<h6 class="h4 container">Create New Course</h6>
<form action="{{ route('store.course') }}" enctype="multipart/form-data" method="post">
    @csrf
    <div class="container mt-4">
        <div class="card border-0 cws-shadow rounded-15">
            <h6 class="text-dark ms-3 mt-3 h5">General Information</h6>
            <div class="card-body">
                <div class="mb-3">
                    <label for="">Course Title <span class="text-danger"><sup>*</sup></span></label>
                    <input type="text" name="course_title" value="{{ old('course_title') }}" class="rounded-10 shadow-none form-control">
                    @error('course_title')
                        <span class="small text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="">Course Description <span class="text-danger"><sup>*</sup></span></label>
                    <textarea name="course_description" id="" cols="30" class="form-control rounded-10 shadow-none" rows="8">{{ old('course_description') }}</textarea>
                    @error('course_description')
                        <span class="small text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3 row">
                    <div class="col">
                        <label for="">Language <span class="text-danger"><sup>*</sup></span></label>
                        <select name="language" id="" class="form-control rounded-10 shadow-none">
                            <option value="" hidden selected disabled>select language</option>
                            <option value="english">English</option>
                            <option value="hindi">Hindi</option>
                        </select>
                        @error('language')
                            <span class="small text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="">Course Category <span class="text-danger"><sup>*</sup></span></label>
                        <select name="course_category" id="" class="form-control rounded-10 shadow-none">
                            <option value="" hidden selected disabled>select category</option>
                            @foreach ($categories as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->cat_title }}</option>
                            @endforeach
                        </select>
                        @error('course_category')
                            <span class="small text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="">Course SubCategory <span class="text-danger"><sup>*</sup></span></label>
                        <select name="course_subcategory" id="" class="form-control rounded-10 shadow-none">
                            <option value="" hidden selected disabled>select Subcategory</option>
                            @foreach ($sub_categories as $s_cat)
                                <option value="{{ $s_cat->id }}">{{ $s_cat->title }}</option>
                            @endforeach
                        </select>
                        @error('course_subcategory')
                            <span class="small text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 col-6">
                    <label for="">Price</label>
                    <input type="number" name="price" value="{{ old('price') }}" placeholder=" enter course price" class="form-control rounded-10 shadow-none">
                    @error('price')
                        <span class="small text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
    </div>
    <div class="container my-4">
        <div class="card border-0 cws-shadow rounded-15">
            <h6 class="text-dark ms-3 mt-3 h5">View</h6>
            <div class="card-body">
                <div class="row gy-3 row-cols-lg-2 row-cols-1 row-cols-md-2 row-cols-sm-1">
                    <div class="col-lg-5">
                        <img src="{{ asset('assets/images/add_img.jpg') }}" class="img-fluid rounded-10" alt="add_img.jpg">
                    </div>
                    <div class="col">
                        <h6>Cover Image</h6>
                        <p>Upload your course image here. It must meet our course image quality standards to be accepted. Important guidelines: 750x422 pixels; .jpg, .jpeg,. gif, or .png. no text on the image.</p>
                        <input type="file" name="cover_image" class="form-control btn rounded-10 shadow-none" style="background-color: lightgrey" >
                        @error('cover_image')
                            <span class="small text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <hr>
                <div class="row gy-3 row-cols-lg-2 row-cols-1 row-cols-md-2 row-cols-sm-1">
                    <div class="col-lg-5">
                        <img src="{{ asset('assets/images/add_video.jpg') }}" class="img-fluid rounded-10" alt="add_img.jpg">
                    </div>
                    <div class="col">
                        <h6>Promotional Video</h6>
                        <p>Students who watch a well-made promo video are 5X more likely to enroll in your course. We've seen that statistic go up to 10X for exceptionally awesome videos. Learn how to make yours awesome!</p>
                        <input type="file" name="promo_video" class="form-control btn rounded-10 shadow-none" style="background-color: lightgrey" >
                        @error('promo_video')
                            <span class="small text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <input type="submit" value="Add" class="btn float-end btn-dark shadow-none">
                </div>
            </div>
        </div>
    </div>
</form>

@endsection
