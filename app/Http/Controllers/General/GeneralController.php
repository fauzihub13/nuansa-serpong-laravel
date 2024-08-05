<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    //
    public function home() {
        return view('pages.home');
    }

    public function about() {
        return view('pages.about');
    }

    public function service() {
        return view('pages.service');
    }

    public function blog() {
        return view('pages.blog.index');
    }

    public function blog_detail() {
        return view('pages.blog.detail');
    }

    public function page_rooms() {
        return view('pages.page.rooms');
    }

    public function page_element() {
        return view('pages.page.element');
    }

    public function contact() {
        return view('pages.contact');
    }

    public function book_online() {
        return view('pages.book-online');
    }
}
