<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body', 'img', 'slug'];

//    protected $guarded = [];

    public function comments(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        // один ко многим
        return $this -> hasMany(Comment::class);
    }

    public function state() {
        // один к одному
        return $this -> hasOne(State::class);
    }

    public function tags() {
        // Многие ко многим
        return $this -> belongsToMany(Tag::class);
    }
}
