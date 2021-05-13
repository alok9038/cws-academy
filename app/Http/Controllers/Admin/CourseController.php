<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function viewCourse(){
        return view("admin.course");
    }

    public function addCourse(){
        return view('admin.createCourse');
    }

    public function storeCourse(Request $request){

    }

    public function addCourseContent(){
        return view('admin.courseContent');
    }
}
