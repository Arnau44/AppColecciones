<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Collection;
use App\Image;

class Category extends Model
{
    protected $fillable = ['id', 'name', 'description'];

    public function collections(){
        return $this->hasMany(Collection::class);
    }

    public function image(){
        return $this->hasOne(Image::class);
    }
}
