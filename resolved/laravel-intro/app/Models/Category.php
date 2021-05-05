<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'name',
        'slug',
        'seo_title',
        'seo_description',
    ];

    public function articles()
    {
        return $this->hasMany(Article::class);
    }
    public function categories()
    {
        return $this->hasMany(Category::class, 'parent_categories_id');
    }
    public function parent_categories()
    {
        return $this->belongsTo(Category::class, 'parent_categories_id');
    }
}
