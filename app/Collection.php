<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    protected $fillable = ['id', 'name', 'description', 'user_id', 'category_id', 'certificate_id', 'img_id'];
}
