<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Learn extends Model
{
    protected $fillable = ['title', 'body', 'slug'];
}
