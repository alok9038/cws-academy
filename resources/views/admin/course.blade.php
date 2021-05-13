@extends('layouts.adminbase')
@section('page_title','Admin | Course')
@section('course_select','active')
@section('content')
<h6 class="h4 container">Create New Course</h6>
    <div class="container mt-4">
        <div class="card border-0 cws-shadwo rounded-10">
            <div class="card-body">
                <table class="table table-stripped table-hover">
                    <tr class="table-secondary table-borderless">
                        <th>Course No.</th>
                        <th>Title</th>
                        <th>Publish Date</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($courses as $course)
                        <tr>
                            <td>CSR-{{ $course->id }}</td>
                            <td>{{ $course->course_title }}</td>
                            <td>{{ $course->created_at }}</td>
                            <td>{{ $course->cat->cat_title }}</td>
                            <td>active</td>
                            <td>
                                <div class="btn-group">
                                    <a href="#" class="btn btn-sm btn-info">e</a>
                                    <a href="#" class="btn btn-sm btn-danger">x</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
