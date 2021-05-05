<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\Category;
use App\Models\Article;
use App\Models\ArticleTag;
use App\Models\Image;

class TagController extends Controller
{
    public function show($id)
    {
        return view('tag', [
            'tags' => Tag::findOrFail($id),
            'categories' => Category::all(),
            'list_articles' => Article::all(),
            'articles_tags' => ArticleTag::all(),
            'images' => Image::all()
        ]);
    }
}
