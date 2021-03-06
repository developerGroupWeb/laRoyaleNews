<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public $timestamps = true;

    protected $casts      =[

        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    function comments(){

        return $this->hasMany(Comment::class);
    }
}
