<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Setting;

class ContactController extends Controller
{
    public function index(){

     $setting = Setting::first();
     return view('Front.contact.index',compact('setting'));
    }
}
