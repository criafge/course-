<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    public function index(){
        $courses = Course::paginate(4);
        return view("index", [
            "courses"=>$courses
        ]);
    }
    public function create(Request $request){
        $course_info = $request->all();
        $file = $request->file('image');
        $file_name = md5($file->getClientOriginalName().time()) . "." .$file->getClientOriginalExtension();
        Storage::putFileAs("public/image", $file, $file_name);
        Course::create([
            "title"=>$course_info["title"],
            "description"=>$course_info["description"],
            "price"=>$course_info["cost"],
            "duration"=>$course_info["duration"],
            "category_id"=>$course_info["category"],
            "image"=>$file_name,
        ]);
        return redirect()->back();
    }
}
 