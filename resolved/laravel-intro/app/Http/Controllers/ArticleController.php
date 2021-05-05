<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use App\Models\ArticleTag;
use App\Models\Tag;
use App\Models\Image;

class ArticleController extends Controller
{
    public function show($id)
    {
        return view('article', [
            'articles' => Article::findOrFail($id),
            'categories' => Category::all(),
            'articles_tags' => ArticleTag::all(),
            'tags' => Tag::all(),
            'images' => Image::all()
        ]);
    }
}
