<?php
use App\Slider;
use App\Product;
use App\Review;
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

Route::post('change_language', 'WebController@change_language')->name('change_language');


Route::get('/', function () {
    $slider=Slider::All();
    $product=Product::All();
    $review=Review::All();
    return view('web.index', compact('slider','product','review'));
})->name('index');

Route::get('/about', 'WebController@about')->name('about');
Route::get('/blog', 'WebController@blog')->name('blog');
Route::get('/contact', 'WebController@contact')->name('contact');
Route::get('/event', 'WebController@event')->name('event');
Route::get('/timeline', 'WebController@timeline')->name('timeline');




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
                                                                                                                                     Route::prefix('event')->group(function(){
                                                                                                                                        Route::get('/save', 'EventController@index')->name('event.save');
                                                                                                                                        Route::post('/save','EventController@save');
                                                                                                                                        Route::get('/manage','EventController@manage');
                                                                                                                                        Route::get('/edit/{id}','EventController@edit');
                                                                                                                                        Route::post('/edit','EventController@update');
                                                                                                                                        Route::get('/delete/{id}','EventController@delete');
                                                                                                                                                                                 });
                                                                                                                                                                                 Route::prefix('product')->group(function(){
                                                                                                                                                                                    Route::get('/save', 'ProductController@index')->name('event.save');
                                                                                                                                                                                    Route::post('/save','ProductController@save');
                                                                                                                                                                                    Route::get('/manage','ProductController@manage');
                                                                                                                                                                                    Route::get('/edit/{id}','ProductController@edit');
                                                                                                                                                                                    Route::post('/edit','ProductController@update');
                                                                                                                                                                                    Route::get('/delete/{id}','ProductController@delete');
                                                                                                                                                                                                                             });
