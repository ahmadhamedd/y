<?php

namespace App;
use App\Image;
use App\Country;
use App\Category;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable=['title','text','price','user_id','category_id','country_id'];
    public function images()
    {
        return $this->hasmany('App\Image');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    public function country()
    {
        return $this->belongsTo('App\Country');

    }
}
