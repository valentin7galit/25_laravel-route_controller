<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use App\Models\ArticleTag;
use App\Models\Tag;
use App\Models\Image;

class HomeController extends Controller
{
    public function index()
    {   
        return view('home', [
            'list_articles' => Article::all(),
            'categories' => Category::all(),
            'articles_tags' => ArticleTag::all(),
            'tags' => Tag::all(),
            'images' => Image::all()
        ]);
    }
}
