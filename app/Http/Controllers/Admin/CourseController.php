<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Course;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
class CourseController extends Controller
{
    public function index(){

        $courses = Course::orderBy('id','desc')->get();
        return view('Admin.courses.index',compact('courses'));
    }

    public function create(){

        return view('Admin.courses.create');
    }

    public function store(Request $request){
      $data =  $request->validate([
            'name'=> 'required|string',
            'phone' => 'nullable|string',
            'spec' => 'required|string',
            'img' => 'required|image|mimes:png,jpg,jpeg',

        ]);

      $new_name = $data['img']->hashName();

      Image::make($data['img'])->resize(50,50)->save(public_path('uploads/courses/'. $new_name));

      $data['img'] =$new_name;
      Course::create($data);
        return redirect(route('AdminTrainerPage'));
    }

    public function edit($id){
        $course =  Course::FindOrFail($id);
        return view('Admin.courses.edit',compact('course'));
    }

    public function update(Request $request){

        $data =  $request->validate([
            'name'=> 'required|string',
            'phone' => 'nullable|string',
            'spec' => 'required|string',
            'img' => 'nullable|image|mimes:png,jpg,jpeg'
        ]);

        $old_name = Course::FindOrFail($request->id)->img;

        if($request->hasFile('img')){

        Storage::disk('uploads')->delete('courses/'.$old_name);

        $new_name = $data['img']->hashName();

        Image::make($data['img'])->resize(50,50)->save(public_path('uploads/courses/'. $new_name));

        $data['img'] =$new_name;

        }else{
            $data['img'] = $old_name;
        }
        Course::FindOrFail($request->id)->update($data);
        return redirect(route('AdminTrainerPage'));
    }

    public function destory($id){
        $old_name = Course::FindOrFail($id)->img;
        Storage::disk('uploads')->delete('courses/'.$old_name);
        Course::FindOrFail($id)->delete();
        return back();
    }

}
