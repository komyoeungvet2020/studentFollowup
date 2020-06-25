<?php
use Faker\Guesser\Name;
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

Route::get('/', function () {
    return view('auth.login');
});
Route::resource('student','studentController');
Route::get('/outFollowupView', 'studentController@outFollowupView')->name('outFollowupView');
Route::get('/outfollowup/{id}', 'studentController@outfollowup')->name('outfollowup');
Route::get('/followup/{id}', 'studentController@studentfollowup')->name('followup');
Route::get('/detailStudent/{id}', 'studentController@detailStudent')->name('detailStudent');

Route::get('showComment/{id}','commentController@showComment')->name('showComment');
Route::post('addComment/{id}','commentController@addComment')->name('addComment');
Route::get('editComment/{id}','commentController@editComment')->name('editComment');
Route::patch('updateComment/{id}','commentController@updateComment')->name('updateComment');
Route::get('deleteComment/{id}','commentController@deleteComment')->name('deleteComment');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
