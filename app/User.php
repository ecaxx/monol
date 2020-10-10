<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;


    //EDIT DAPAT PALAGI UNG $fillable KAPAG NAG DAGDAG O BAWAS KA NG COLUM SA DATABASE MO
    //SPECIFICALLY SA TABLE
    //MAKIKITA MO NA UNG NAKALAGAY LANG SA FILLABLE E UNG MERON SA DATABASE COLUM
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_number', 'email' , 'name', 'password', 'notes', 'image'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
