<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
class ArticlesController extends Controller
{
    function create_article(Request $request) {
        try{

            $article = Article::create([
                "title" => $request->title,
                "users_id" => $request->users_id,
                "news_id" => $request->news_id
            ]);
    
            return response()->json([
                "new_article" => $article
            ]);
        }
        catch(\Exception $e){
            return response()->json([
                "message" => "no such user or news id."
            ]);    
        }
   
}
}
