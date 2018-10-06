<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    public $fillable = ['title', 'author', 'status', 'short_desc', 'content'];

    public function category()
    {
        return $this->belongsTo('App\Category', 'cate_id');
    }
}
