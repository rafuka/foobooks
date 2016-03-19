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

  Route::get('/', function () {
      return "This is the home page";
  });

  Route::get('/books', 'BookController@getIndex');
  Route::get('/book/create', 'BookController@getCreate');
  Route::post('book/create', 'BookController@postCreate');
  Route::get('/book/{id}', 'BookController@getShow');



  /* Does the same as the Routes below */
  Route::resource('tag', 'TagController');
  /*
  Route::get('/tag', 'TagController@index');
  Route::get('/tag/create', 'TagController@create');
  Route::post('/tag', 'TagController@store');
  Route::get('/tag/{tag_id}', 'TagController@show');
  Route::get('/tag/{tag_id}/edit', 'TagController@edit');
  Route::put('/tag/{tag_id}', 'TagController@update');
  Route::delete('/tag/{tag_id}', 'TagController@destroy');
  */

  Route::get('/practice', function () {



    $random = new Random();
    return $random->getRandomString(8);

    return 'practice route';
  });
});
