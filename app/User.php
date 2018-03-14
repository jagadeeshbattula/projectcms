<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Role;
use App\Photo;


class User extends Authenticatable
{
    protected $fillable = [
        'name', 'email', 'password','role_id', 'is_active', 'photo_id'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role(){
        return $this->belongsTo('App\Role');
    }

    public function photo(){

        return $this->belongsTo('App\Photo');
    }


    public function posts(){
        return $this->hasMany('App\Post');
    }

    public function isAdmin(){

        if($this->role->name == "Administrator" && $this->is_active == 1){
            return true;
        }
        return false;
    }

    public function isAuthor(){

        if($this->role->name == "Author" ||$this->role->name == "Administrator"){
            if($this->is_active == 1){
                return true;
            }
        }
        return false;
    }

    public function isSubscriber(){

        if($this->role->name == "Subscriber" || $this->role->name == "Author" || $this->role->name == "Administrator"){
            if($this->is_active == 1){
                return true;
            }
        }
        return false;
    }


}
