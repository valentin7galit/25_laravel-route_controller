<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Article;
use App\Models\ArticleTag;
use App\Models\Tag;
use App\Models\Image;

class CategoryController extends Controller
{
    public function show($id)
    {
        return view('category', [
            'categories' => Category::findOrFail($id),
            'list_articles' => Article::all(),
            'articles_tags' => ArticleTag::all(),
            'tags' => Tag::all(),
            'images' => Image::all()
        ]);
    }
}
