<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Room;
use Carbon\Carbon;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isEmpty;

class GeneralController extends Controller
{
    //
    public function home() {
        $rooms = Room::limit(3)->get();

        if(!$rooms->isEmpty()) {
            foreach ($rooms as $room) {

                $image_array = $room->image;

                if (is_array($image_array) && !empty($image_array)) {
                    $room->first_image = $image_array[0];
                } else {
                    $room->first_image = null;
                }
            }
        }

        // dd($room);
        return view('pages.home', compact('rooms'));
    }

    public function about() {
        return view('pages.about');
    }

    public function service() {
        return view('pages.service');
    }

    public function blog() {
        $articles = Article::all();
        foreach ($articles as $article) {
            $article->date_formatted = Carbon::parse($article->date);
        }


        return view('pages.blog.index', compact('articles'));
    }

    public function blog_detail($slug) {
        $article = Article::where('slug', $slug)->first();

        $other_articles = Article::whereNot('slug',$slug )->get();

        foreach ($other_articles as $other_article) {
            $other_article->date_formatted = Carbon::parse($other_article->date);
        }
        return view('pages.blog.detail', compact('article', 'other_articles'));
    }

    public function rooms() {
        $rooms = Room::all();
        if(!$rooms->isEmpty()) {
            foreach ($rooms as $room) {

                $image_array = $room->image;

                if (is_array($image_array) && !empty($image_array)) {
                    $room->first_image = $image_array[0];
                } else {
                    $room->first_image = null;
                }
            }
        }

        // dd($rooms);

        return view('pages.rooms.index', compact('rooms'));
    }

    public function detail_rooms($slug) {
        $room = Room::where('slug', $slug)->first();

        $other_rooms = Room::whereNot('slug',$slug )->get();
        if(!$other_rooms->isEmpty()) {
            foreach ($other_rooms as $other_room) {

                $image_array = $other_room->image;

                if (is_array($image_array) && !empty($image_array)) {
                    $other_room->first_image = $image_array[0];
                } else {
                    $other_room->first_image = null;
                }
            }
        }

        return view('pages.rooms.detail', compact('room', 'other_rooms'));
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
