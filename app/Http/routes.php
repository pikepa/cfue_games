<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
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

// create our route, return a view file (app/views/teams.blade.php)
// we will also send the records we want to the view

    Route::get('teams/index', 'MemberController@teams');


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
