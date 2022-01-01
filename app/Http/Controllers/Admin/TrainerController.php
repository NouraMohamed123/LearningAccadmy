<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Trainer;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
class TrainerController extends Controller
{

    public function index(){

        $trainers = Trainer::orderBy('id','desc')->get();
        return view('Admin.trainers.index',compact('trainers'));
    }

    public function create(){

        return view('Admin.trainers.create');
    }

    public function store(Request $request){
      $data =  $request->validate([
            'name'=> 'required|string',
            'phone' => 'nullable|string',
            'spec' => 'required|string',
            'img' => 'required|image|mimes:png,jpg,jpeg',

        ]);

      $new_name = $data['img']->hashName();

      Image::make($data['img'])->resize(50,50)->save(public_path('uploads/trainers/'. $new_name));

      $data['img'] =$new_name;
      Trainer::create($data);
        return redirect(route('AdminTrainerPage'));
    }

    public function edit($id){
        $trainer =  Trainer::FindOrFail($id);
        return view('Admin.trainers.edit',compact('trainer'));
    }

    public function update(Request $request){

        $data =  $request->validate([
            'name'=> 'required|string',
            'phone' => 'nullable|string',
            'spec' => 'required|string',
            'img' => 'nullable|image|mimes:png,jpg,jpeg'
        ]);

        $old_name = Trainer::FindOrFail($request->id)->img;

        if($request->hasFile('img')){

        Storage::disk('uploads')->delete('trainers/'.$old_name);

        $new_name = $data['img']->hashName();

        Image::make($data['img'])->resize(50,50)->save(public_path('uploads/trainers/'. $new_name));

        $data['img'] =$new_name;

        }else{
            $data['img'] = $old_name;
        }
        Trainer::FindOrFail($request->id)->update($data);
        return redirect(route('AdminTrainerPage'));
    }

    public function destory($id){
        $old_name = Trainer::FindOrFail($id)->img;
        Storage::disk('uploads')->delete('trainers/'.$old_name);
        Trainer::FindOrFail($id)->delete();
        return back();
    }

}
