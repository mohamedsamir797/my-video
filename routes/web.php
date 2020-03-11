<?php

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


Route::namespace('backEnd')->prefix('admin')->middleware('admin')->group(function(){

  Route::get('/','HomeController@index');
  Route::resource('users','usersController')->except(['show']);
  Route::resource('categories','CategoriesController')->except(['show']);
  Route::resource('skills','Skillscontroller')->except(['show']);
  Route::resource('tags','TagsController')->except(['show']);
  Route::resource('pages','PagesController')->except(['show']);
  Route::resource('videos','VideoController')->except(['show']);
  Route::resource('comments','CommentsController')->except(['show']);
  Route::resource('messeges','messegeController')->except(['show']);
  Route::post('sendmail','Sendemail@replaymessage')->name('replaymessage');

});


Route::post('messeges','HomeController@formMessege')->name('form.messege');
Route::get('/','HomeController@welcomeVideos');


Route::middleware('auth')->group(function(){
Route::post('comments/{id}','HomeController@commentupdate')->name('frontend.comments');
Route::get('comments/{id}','HomeController@destroy')->name('frontend.comments.delete');
Route::post('comments/{id}/create','HomeController@createComment')->name('frontend.comment.create');
Route::get('category/{id}','HomeController@category')->name('frontend.category');
Route::get('video/{id}','HomeController@video')->name('frontend.video');


});

Route::get('/home', 'HomeController@index')->name('home');




Auth::routes();
