<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function category()
    {
        return $this->belongsTo('App\Model\Category');
    }

    public function replies()
    {
        return $this->hasMany('App\Model\Reply');
    }

    public function getPathAttribute()
    {
        return asset("api/question/$this->slug");
    }
}
