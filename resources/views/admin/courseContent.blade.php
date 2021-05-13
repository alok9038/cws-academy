@extends('layouts.adminbase')
@section('page_title','Admin | Create Course')
@section('create_course_content_select','active')
@section('content')
<h6 class="h4 container">Create Course Content</h6>
    <div class="container my-4">
        <div class="card border-0 cws-shadow rounded-15">
            <h6 class="text-dark ms-3 mt-3 h5">Course Content</h6>
            <div class="card-body">
                <div class="mb-3">
                    <label for="">Course Content Title*</label>
                    <input type="text" name="course_content_title" class="form-control shadow-none rounded-10">
                </div>

                <h6>Add Lecture</h6>
                <hr class="bg-light text-light">
                <div class="mb-3 row">
                    <div class="col">
                        <label for="">Lecture title <span class="text-danger"><sup>*</sup></span></label>
                        <input type="text" name="lecture_title" class="form-control rounded-10 shadow-none">
                    </div>
                    <div class="col">
                        <label for="">File <small>( pdf, video )</small> <span class="text-danger"><sup>*</sup></span></label>
                        <input type="file" placeholder="(pdf , video)" name="lecture_title" class="form-control rounded-10 shadow-none">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="">Description <span class="text-danger"><sup>*</sup></span></label>
                    <textarea name="course_description" id="" cols="30" class="form-control rounded-10 shadow-none" rows="8"></textarea>
                </div>
                <div class="mb-3 row">
                    <div class="col">
                        <label for="">Volume <span class="text-danger"><sup>*</sup></span></label>
                        <input type="number" name="lecture_title" placeholder=" in megabytes (mb)" class="form-control rounded-10 shadow-none">
                    </div>
                    <div class="col">
                        <label for="">Duration<span class="text-danger"><sup>*</sup></span></label>
                        <input type="number" placeholder=" in minutes" name="lecture_title" class="form-control rounded-10 shadow-none">
                    </div>
                </div>
                <div class="mb-3">
                    <input type="submit" value="Add" class="btn float-end btn-dark shadow-none">
                </div>
            </div>
        </div>
    </div>

@endsection
