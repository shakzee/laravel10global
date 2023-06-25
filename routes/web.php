<?php

use App\Http\Controllers\About;
use App\Http\Controllers\Contact;
use App\Http\Controllers\Home;
use App\Http\Controllers\SubjectConroller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::match(['get','post'],'/',function(){
    return 'get post';
});

Route::get('/user/{id?}',function($id=null){
    return 'user=>'.$id;
})->name('userwithid');

Route::redirect('/home','/aboutus',301);

// Route::get('/homecontroller',[Home::class,'index']);

Route::get('/', function () {
    //return view('welcome');
    return 'working..';
});

Route::get('/home', function () {
    //return view('welcome');
    return 'home working..';
});

Route::controller(Home::class)->group(function(){
    Route::get('/index','index');
    Route::get('/second','second');
});

Route::get('/about', [About::class, 'index'])->name('user.index');
Route::get('/contact', [Contact::class, 'index'])->name('user.index');


Route::get('/new-subject', [SubjectConroller::class, 'create'])
->name('newsubject');

Route::get('/subject/{id}', [SubjectConroller::class, 'show'])
->name('subject.show');
Route::get('/subjects', [SubjectConroller::class, 'index'])
->name('subjects.index');
