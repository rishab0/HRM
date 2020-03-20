<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User  as Authenticatable;

class Admin extends Authenticatable
{
    protected $guard = 'admin';

    protected $fillable = [
        'first_name','last_name','email','image','password'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

public static function Updates($data)
    {
        Admin::where('id',$data['id'])->update([
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'email' => $data['email'],
                'image' => $data['image'],
            ]);
    }



}

   
