<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = ['title', 'body', 'slug'];

    public function pay(){

        return $this->belongsTo(Pay::class);
    }

    public function tags(){

        return $this->belongsToMany(Tag::class);
    }
}
