<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\News;

class NewsController extends Controller
{
    function get_news() {
        $news = News::all();

        return response()->json([
            "news" => $news
        ]);
    }
    function get_single_news($id) {
        $news = News::find($id);

        return response()->json([
            "news" => $news
        ]);
    }   
}
