<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleTag extends Model
{
    use HasFactory;

    protected $table = 'articles_tags';

    public $timestamps = false;

    public function articles()
    {
        return $this->hasMany(Article::class);
    }
    public function tags()
    {
        return $this->hasMany(Tag::class);
    }
}
