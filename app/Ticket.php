<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $guarded = ['id'];
    protected $flillable = ['title', 'content', 'slug', 'status', 'user_id'];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function getTitle(){
        return $this->title;
    }

    public function Comments(){
        return $this->hasMany('App\Comment', 'post_id');
    }

}
