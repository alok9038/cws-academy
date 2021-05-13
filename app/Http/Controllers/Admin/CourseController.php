<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\SubCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CourseController extends Controller
{
    public function viewCourse(){
        if(Auth::user()->role != "admin"){
            return redirect()->route('homepage');
        }

        $data['courses'] = Course::all();
        return view("admin.course",$data);
    }

    public function addCourse(){
        if(Auth::user()->role != "admin"){
            return redirect()->route('homepage');
        }
        $data['categories'] = Category::all();
        $data['sub_categories'] = SubCategory::all();
        return view('admin.createCourse',$data);
    }

    public function storeCourse(Request $request){
        if(Auth::user()->role != "admin"){
            return redirect()->route('homepage');
        }

        $request->validate([
            'course_title' => 'required',
            'course_description' => 'required',
            'language' => 'required',
            'course_category' => 'required',
            'course_subcategory' => 'required',
            'price' => 'required',
            'cover_image' => 'required',
            'promo_video' => 'required',
        ]);

        $slug = Str::slug($request->course_title, '-');

        $cover_image = time(). "_"  .$slug . "." . $request->cover_image->extension();
        $request->cover_image->move(public_path("course/cover_image"),$cover_image);

        $promo_video = time() . "_"  .$slug . "." . $request->promo_video->extension();
        $request->promo_video->move(public_path("course/promo_video"),$promo_video);

        $course = new Course;
        $course->course_title = $request->course_title;
        $course->course_description = $request->course_description;
        $course->language = $request->language;
        $course->cat_id = $request->course_category;
        $course->sub_cat_id = $request->course_subcategory;
        $course->price = $request->price;
        $course->cover_image = $cover_image;
        $course->promo_video = $promo_video;
        $course->slug = $slug;
        $course->save();

        return redirect()->route('view.course');

    }

    public function addCourseContent(){
        if(Auth::user()->role != "admin"){
            return redirect()->route('homepage');
        }
        return view('admin.courseContent');
    }
}
