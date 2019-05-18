<?php

namespace Curso;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = ['text','id_question','id_user'];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
