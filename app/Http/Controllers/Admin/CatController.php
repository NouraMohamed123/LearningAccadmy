<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cat;
use GuzzleHttp\Psr7\Request as Psr7Request;

class CatController extends Controller
{
    public function index(){

        $cats = Cat::orderBy('id','desc')->get();
        return view('Admin.cats.index',compact('cats'));
    }

    public function create(){

        return view('Admin.cats.create');
    }

    public function store(Request $request){
      $data =  $request->validate([
            'name'=> 'required|string'

        ]);
        Cat::create($data);
        return redirect(route('AdminCatPage'));
    }

    public function edit($id){
        $cat =  Cat::FindOrFail($id);
        return view('Admin.cats.edit',compact('cat'));
    }

    public function update(Request $request){

        $data =  $request->validate([
            'name'=> 'required|string'

        ]);

       Cat::FindOrFail($request->id)->update($data);

        return redirect(route('AdminCatPage'));
    }
    public function destory($id){
        Cat::FindOrFail($id)->delete();
        return back();
    }
}

