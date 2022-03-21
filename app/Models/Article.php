<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'tag_articles');
    }

    public function category()
    {
        return $this->hasMany(CategorieArticle::class, 'categorie_article_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
