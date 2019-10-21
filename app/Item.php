<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable=[
        'name', 'description', 'collection_id'
    ];
    public function collection()
    {
        return $this->belongsTo(Collection::class);
    }
}
