@extends('layouts.adminbase')
@section('page_title','Admin | Category')
@section('sub_category_select','active')
@section('content')
<h6 class="h4 container">Manage SubCategory</h6>
    <div class="container mt-4">
        <div class="row row-cols-lg-2 row-cols-md-2 row-cols-sm-1 row-cols-1">
            <div class="col-lg-4">
                <div class="card border-0 cws-shadow rounded-10">
                    <div class="card-body">
                        <form action="{{ route('store.sub.category') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="">Select Category</label>
                                <select name="cat_id" class="form-control rounded-10 shadow-none" name="cat_id">
                                    <option value="" selected hidden disabled></option>
                                    @foreach ($categories as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->cat_title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label>SubCategory Title</label>
                                <input type="text" name="cat_title" class="form-control shadow-none rounded-10">
                            </div>
                            <div class="mb-3">
                                <label>SubCategory Description</label>
                                <textarea name="cat_description" class="form-control shadow-none rounded-10" cols="30" rows="4"></textarea>
                            </div>
                            <div class="mb-3">
                                <input type="submit" value="Add category" class="btn float-end btn-dark shadow-none">
                            </div>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card border-0 cws-shadow rounded-10">
                    <div class="card-body">
                        <table class="table table-stripped table-hover">
                            <tr class="table-secondary table-borderless">
                                <th>Sr No.</th>
                                <th>Sub cat Title</th>
                                <th>Category</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($sub_categories as $cat)
                                <tr>
                                    <td>{{ $cat->id }}</td>
                                    <td>{{ $cat->title }}</td>
                                    <td>{{ $cat->cat->cat_title }}</td>
                                    <td>{{ $cat->description }}</td>
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
        </div>
    </div>
@endsection
