<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $fillable = [
        'category',
        'description_category',
        'category_name',
        'content_publication'
    ];

    public function post(){
        return $this->hasMany(Post::class);
    }

}