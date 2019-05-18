<?php

namespace Curso;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //
    protected $fillable = ['title','text','id_user'];
    public function answer(){
        return $this->belongsTo(Answer::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
