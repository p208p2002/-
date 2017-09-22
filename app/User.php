<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Auth;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','schoolCode',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function isAdmin()
    {
        try{
            if(Auth::check()){
                if(Auth::user()->userLevel==5)
                    return 1;
            }
            return 0;
        }
        catch (\Exception $e){
            return 0;
        }
        return 0;
    }
}
