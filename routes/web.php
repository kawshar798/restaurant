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

/*Route::get('/', function () {


    return view('welcome');
});*/

Route::get('lang/{locale}',function($locale){

    session()->put('locale', $locale);
    return redirect()->back();

});


Route::get('/', 'HomeController@index')->name('home');
//Route::get('/food-menu/', 'HomeController@menubByCat')->name('food-menu');
Route::get('/food-menu/', 'ItemController@index')->name('food-menu');
Route::get('/reservation/', 'ReservationController@index')->name('reservation.index');
Route::post('/reservation/reserve', 'ReservationController@reserve')->name('reservation.reserve');
Route::get('/contact', 'ContactController@index')->name('contact.index');
Route::post('/contact/store', 'ContactController@store')->name('contact.store');
Route::get('/aboutus', 'AboutController@index')->name('aboutus');


Auth::routes();



Route::group(['prefix'=>'admin','middleware'=>'auth','namespace'=>'admin'],function(){
    Route::get('/dashboard/','DashboardController@index')->name('admin.dashboard');
    Route::resource('/sliders','SliderController');
    Route::get('/sliders/unpublished/{id}','SliderController@unPublished')->name('sliders.unpublished');
    Route::get('/sliders/published/{id}','SliderController@published')->name('sliders.published');

    //Category Route
    Route::resource('/categories','categoryController');

    //Item Route
    Route::resource('/items','ItemController');
    //Reservation  controller
    Route::get('/reservations/','ReservationController@index')->name('reservations.index');
    Route::post('/reservations/{id}','ReservationController@status')->name('reservations.status');
    Route::get('/reservations/{id}','ReservationController@show')->name('reservations.show');
    Route::delete('/reservations/{id}','ReservationController@delete')->name('reservations.delete');

    //Contact   controller
    Route::get('/contact/','ContactController@index')->name('contact');
    Route::get('/contact/{id}','ContactController@show')->name('contact.show');
    Route::delete('/contact/{id}','ContactController@delete')->name('contact.delete');


    //chef  controller
    Route::resource('/chefs','chefController');
    Route::get('/chefs/unpublished/{id}','chefController@unPublished')->name('chefs.unpublished');
    Route::get('/chefs/published/{id}','chefController@published')->name('chefs.published');

    //About us  controller
    Route::resource('/aboutus','AboutController');

    //Time management
    Route::resource('/timemanage','RestaurantTimeController');
    //Sponsor
    Route::resource('/sponsors','SponsorController');

    //logo and social setting
    Route::resource('/setting','LogoandSocialController');
    Route::resource('/social','SocialController');





});

