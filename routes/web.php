<?php

use App\Http\Controllers\General\GeneralController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('pages.home');
// });

Route::controller(GeneralController::class)->group(function (){
    Route::get('/', 'home')->name('general.home');
    Route::get('about', 'about')->name('general.about');
    Route::get('service', 'service')->name('general.service');
    Route::get('blog', 'blog')->name('general.blog');
    Route::get('blog/detail', 'blog_detail')->name('general.blog_detail');
    Route::get('page/room', 'page_rooms')->name('general.page_rooms');
    Route::get('page/element', 'page_element')->name('general.page_element');
    Route::get('contact', 'contact')->name('general.contact');
    Route::get('book/online', 'book_online')->name('general.book_online');

});

