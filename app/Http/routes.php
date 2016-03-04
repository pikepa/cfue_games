<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/* refers to the url welcome page*/
Route::get('welcome', function () {
    return view('welcome');
});

/* refers to the database Test page*/

Route::get('database-test',function(){
  if (DB::connection()->getDatabaseName())
  {echo 'Connected Successfully to Database  ' . DB::connection()->getDatabaseName();
  
  }
  
});
// refers to the url members  page*/
Route::get('members', 'MemberController@index');

// refers to the url alphabeticaly  page*/
Route::get('membersbyname', 'MemberController@orderbyname');
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
