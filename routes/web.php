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
    return view('web.index');
})->name('index');
Route::get('/about', 'WebController@about')->name('about');
Route::get('/blog', 'WebController@blog')->name('blog');
Route::get('/contact', 'WebController@contact')->name('contact');
Route::get('/event', 'WebController@event')->name('event');



Route::get('/home', 'HomeController@index')->name('home');
Route::get('/blog/detail/{id?}', 'WebController@detail')->name( 'blog.detail');
Route::get('/prod/detail/{id?}', 'WebController@pdetail')->name( 'prod.detail');
Auth::routes();


    Route::prefix('blog')->group(function(){
    Route::get('/save', 'BlogController@index')->name('cat.save');
    Route::post('/save','BlogController@save');
    Route::get('/manage','BlogController@manage');
    Route::get('/edit/{id}','BlogController@edit');
    Route::post('/edit','BlogController@update');
    Route::get('/delete/{id}','BlogController@delete');
                                    });

    Route::prefix('review')->group(function(){
    Route::get('/save', 'ReviewController@index')->name('review.save');
    Route::post('/save','ReviewController@save');
    Route::get('/manage','ReviewController@manage');
    Route::get('/edit/{id}','ReviewController@edit');
    Route::post('/edit','ReviewController@update');
    Route::get('/delete/{id}','ReviewController@delete');
                                             });

                                             Route::prefix('member')->group(function(){
                                                Route::get('/save', 'MemberController@index')->name('member.save');
                                                Route::post('/save','MemberController@save');
                                                Route::get('/manage','MemberController@manage');
                                                Route::get('/edit/{id}','MemberController@edit');
                                                Route::post('/edit','MemberController@update');
                                                Route::get('/delete/{id}','MemberController@delete');
                                                                                         });
                                                                                         Route::prefix('slider')->group(function(){
                                                                                            Route::get('/save', 'SliderController@index')->name('slider.save');
                                                                                            Route::post('/save','SliderController@save');
                                                                                            Route::get('/manage','SliderController@manage');
                                                                                            Route::get('/edit/{id}','SliderController@edit');
                                                                                            Route::post('/edit','SliderController@update');
                                                                                            Route::get('/delete/{id}','SliderController@delete');
                                                                                                                                     });