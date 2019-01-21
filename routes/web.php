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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/wallboard', function () {
  return view('pages.wallboard');
});
Route::get('/workorder','WorkOrderController@create')->name('pages.workorder');
Route::post('/workorder','WorkOrderController@store')->name('pages.workorder');
Route::post('/tbl_workorder/import_xls','WorkOrderController@import_xls');;
Route::get('/tbl_workorder', 'WorkOrderController@index' )->name('pages.tbl_workorder');
Route::get('/tbl_wallboard', function () {
  return view('pages.tbl_wallboard');
});
 Route::get('/register', 'AuthController@getRegister')->name('register')->middleware('guest');
 Route::post('/register', 'AuthController@postRegister')->middleware('guest');
 Route::get('/login', 'AuthController@getLogin')->name('login')->middleware('guest');
 Route::post('/login', 'AuthController@postLogin')->middleware('guest');
 Route::get('/home', function(){
   return view('pages.index');
   //return auth()->user();
 })->middleware('auth')->name('home');
Route::get('/logout','AuthController@logout')->middleware('auth')->name('logout');
Route::get('/stats', function () {

  $stats =[
      'cpu'   => 100,
      'likes' => 20000,
      'sales' => 890,
      'newmember' => 3000,
  ];

  return view('pages.statistic',compact('stats') );
})->middleware('auth')->name('');
route::get('widget',function (){

  //$user = App\User::get();

  return view('pages.widget' );
});

Route::get('/profile','UserController@profile')->middleware('auth')->name('#');
Route::post('/profile','UserController@update_avatar')->middleware('auth')->name('#');
Route::get('/delete/{id_work_order}','WorkOrderController@delete')->middleware('auth');
Route::get('/edit/{id_work_order}','WorkOrderController@edit')->name('pages.edit')->middleware('auth');
//Route::patch('/edit/{id_work_order}','WorkOrderController@update')->name('pages.update')->middleware('auth');

