<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newses;

class newsController extends Controller
{
    function index()
    {
        return view('news_data');
    }
    function store(Request $request)
    {

        $news = new Newses();
        $news->title = $request->title;
        // $post->image = $request->title;
        $news->description = $request->description;
        $news->save();
    }
}
