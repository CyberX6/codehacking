<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'category',
        'title',
        'photo_id',
        'body'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function photo()
    {
        $this->belongsTo('App\Photo');
    }

    public function category()
    {
        $this->belongsTo('App\Category');
    }
}
