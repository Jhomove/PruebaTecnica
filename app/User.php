<?php

namespace Curso;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    //
    protected $table = 'users';
    use HasApiTokens, Notifiable;
    protected $fillable = ['name','documento','email','role_id','password'];
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function role(){
        return $this->belongsTo(Role::class);
    }

    public function questions(){
        return $this->hasMany(Questions::class);
    }

    public function Answers(){
        return $this->hasMany(Answer::class);
    }

    public function scopeName($query, $name){
        if($name){
            return $query->where('name','LIKE',"%$name%");
        }
    }

    public function scopeEmail($query, $email){
        if($email){
            return $query->where('email','LIKE',"%$email%");
        }
    }
}
