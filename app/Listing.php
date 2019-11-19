<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
class Listing extends Model implements Searchable
{
    //


    public function user(){
        return $this->belongsTo('App\User');
    }
    public function getSearchResult(): SearchResult
    {
        $url = route('listings.show', $this->id);

        return new SearchResult(
            $this,
            $this->name,
            $url
         );
    }
}
