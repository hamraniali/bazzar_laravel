<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'title',
        'imageSrc'
    ];

    public function apps() {
        return $this->hasMany('App\App');
    }
}
