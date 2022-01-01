<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::namespace('Front')->group(function(){

    Route::get('/','HomeController@index')->name('frontHomePage');

    Route::get('/cat/{id}','CourseController@cat')->name('frontCatPage');

    Route::get('/cat/{id}/course/{c_id}','CourseController@show')->name('frontCoursePage');


    Route::get('/contact','ContactController@index')->name('frontcontactPage');

    Route::post('/message/newsletter','MessageController@newsletter')->name('frontMessagePage');

    Route::post('/message/contact','MessageController@contact')->name('frontContactPage');

    Route::post('/message/enroll','MessageController@enroll')->name('frontenrollPage');
});

Route::namespace('Admin')->prefix('dashboard')->group(function(){

    Route::get('/login','AuthController@login')->name('Adminlogin');
    Route::post('/dologin','AuthController@doLogin')->name('Admindologin');

 Route::middleware('adminAuth:admin')->group(function(){

    Route::post('/logout','AuthController@logout')->name('Adminlogout');

    Route::get('/','HomeController@index')->name('AdminHomePage');
////////////////////cat
    Route::get('/cats','CatController@index')->name('AdminCatPage');

    Route::get('/cats/create','CatController@create')->name('adminCatcreate');

    Route::post('/cats/store','CatController@store')->name('adminCatstore');

    Route::get('/cats/edit/{id}','CatController@edit')->name('admin.cat.edit');

    Route::post('/cats/update','CatController@update')->name('admin.cat.update');

    Route::get('/cats/destory/{id}','CatController@destory')->name('adminCatdestroy');
///////////////trainer

   Route::get('/trainer','TrainerController@index')->name('AdminTrainerPage');

    Route::get('/trainer/create','TrainerController@create')->name('adminTrainercreate');

    Route::post('/trainer/store','TrainerController@store')->name('adminTrainerstore');

    Route::get('/trainer/edit/{id}','TrainerController@edit')->name('admin.trainer.edit');

    Route::post('/trainer/update','TrainerController@update')->name('admin.trainer.update');

    Route::get('/trainer/destory/{id}','TrainerController@destory')->name('adminTrainerdestroy');
///courses
///////////////trainer

Route::get('/courses','CoursController@index')->name('AdmincoursePage');

Route::get('/courses/create','CoursController@create')->name('admincoursecreate');

Route::post('/courses/store','CoursController@store')->name('admincoursestore');

Route::get('/courses/edit/{id}','CoursController@edit')->name('admin.course.edit');

Route::post('/courses/update','CoursController@update')->name('admin.course.update');

Route::get('/courses/destory/{id}','CoursController@destory')->name('admincoursedestroy');

});
});
