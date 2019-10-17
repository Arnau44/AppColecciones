<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Collection extends Model implements Searchable
{
    protected $fillable = ['id', 'name', 'description', 'user_id', 'category_id', 'certificate_id', 'img_id'];

    public function objects()
    {
        return $this->hasMany(Objects::class);
    }
    public function certificate()
    {
        return $this->hasOne(Certificate::class);
    }
    public function image()
    {
        return $this->hasOne(Image::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function getSearchResult(): SearchResult
    {
        $url = route('collection.show', $this->id);

        return new SearchResult(
            $this,
            $this->name,
            $url
         );

    }
}
