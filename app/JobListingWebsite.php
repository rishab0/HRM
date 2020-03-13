<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class JobListingWebsite extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'website', 'email', 'password', 'status'
    ];

    public static function add($data)
    {
        JobListingWebsite::create([
            'name' => $data['name'],
            'website' => $data['websiteLink'],
            'email' => $data['email'],
            'password' => $data['password'],
            'status' => $data['status'],
        ]);
    }

    public function getFirstNameAttribute()
    {
        
    }
}
