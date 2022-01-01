<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\NewsLetter;
use App\Message;
use App\Student;

class MessageController extends Controller
{
    public function newsletter(Request $request){

       $data = $request->validate([
           'email' => 'required|email'
       ]);

       NewsLetter::create($data);
       return back();
    }

    public function contact(Request $request){

        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'nullable|string',
            'message' => 'required|string',
        ]);

        Message::create($data);
       return back();
     }

     public function  enroll(Request $request){

        $data = $request->validate([
            'name' => 'nullable|string',
            'email' => 'required|email',
            'spec' => 'nullable|string',
            'course_id' => 'required|exists:courses,id',
        ]);

        $Student =  Student::create([
            'name'=> $data['name'],
            'email'=> $data['email'],
            'spec'=> $data['spec'],
        ]);

        $Student_id = $Student->id;
    // dd($data['course_id']);
    // dd($Student_id);
        DB::table('course_student')->insert([
            'course_id'=>$data['course_id'],
            'student_id'=>$Student_id,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
       return back();
     }
}
