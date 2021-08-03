<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/','HomeController@showWelcome');
// pull git to visua

// use Illuminate\Support\Facades\Redirect;
// Route ::get('/home','HomeController@showWelcome');
// Route::get('/', function () {
//     return view('hello');
//  });
// Route::get('profile/{name}','ProfileController@showProfile');

// Route ::get('home','HomeController@showWelcome');
// //Route ::get('about','AboutController@showDetails');



// Route ::get('about',function(){
//     return 'About Conten';
// });
// Route ::get ('about/{theSubject}','AboutController@showSubject');

// Route ::get('about/directions',function(){
//     return 'Conten directions';
// });
// Route ::get('submit-form',function(){
//     return 'Process Form';
// });
// Route ::get('about/{thesubject}',function($thesubject){
//     return $thesubject.' Conten';
// });
// Route ::get('about/{Price}/{art}',function($Price,$art){
//     return "the product: $Price and $art";

// });
// // uy quyen chuyen trang
// Route::get('where',function(){
//     return Redirect :: to ('about/directions');
// });
