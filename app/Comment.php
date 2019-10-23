<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Collection;

class Comment extends Model
{
    public function collection(){
        return $this->belongsTo(Collection::class);
    }
}