<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cat;
use App\Course;
class CourseController extends Controller
{
    public function cat($id){
      $cat =  Cat::findOrFail($id);
      $courses = Course::where('cat_id',$id)->paginate(6);

      return view('Front.courses.cat',compact('cat','courses'));

    }
    public function show($id,$c_id){


        $course = Course::findOrFail($c_id);

        return view('Front.courses.show',compact('course'));


    }
}
