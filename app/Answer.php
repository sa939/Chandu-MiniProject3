<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{


    protected $fillable = ['body'];


    public function votes(){
        return $this->belongsTo('App\Votes');
    }


    public function user(){
        return $this->belongsTo('App\User');
    }

    public function question(){
        return $this->belongsTo('App\Question');
    }
}
