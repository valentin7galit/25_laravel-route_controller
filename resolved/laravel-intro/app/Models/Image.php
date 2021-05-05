<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $table = 'images';

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'path',
        'name',
    ];

    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
