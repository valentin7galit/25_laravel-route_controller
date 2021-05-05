<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table = 'articles';

    protected $dates = [
        'created_at',
        'modified_at',
        'published_at',
    ];

    public $timestamps = false;

    protected $fillable = [
        'name',
        'title',
        'short_description',
        'content',
        'seo_title',
        'seo_description',
        'slug',
    ];

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function images()
    {
        return $this->belongsTo(Image::class);
    }
    public function galleries()
    {
        return $this->hasMany(Gallery::class);
    }
    public function categories()
    {
        return $this->belongsTo(Category::class);
    }
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
