<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{

    protected $flillable = ['title', 'content', 'slug', 'status', 'user_id'];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function getTitle(){
        return $this->title;
    }

}
