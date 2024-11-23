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

    function create_news(Request $request) {
        if ($request->user_type_id==1){

            $news = News::create([
                "content" => $request->content,
                "from_age" => $request->from_age,
                "to_age" => $request->to_age
            ]);
    
            return response()->json([
                "new_news" => $news
            ]);
        }
        else
            return response()->json([
                "message" => "unauthorized user."
            ]);         
    }
}
