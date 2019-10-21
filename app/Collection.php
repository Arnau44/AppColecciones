<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    protected $fillable = [
        'name','description', 'user_id', 'category_id', 'certificate_id', 'image_id'];
}
