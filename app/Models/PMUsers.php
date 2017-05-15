<?php

namespace App\Models;

use App\User;

class PMUsers extends User
{
    /**
     * Table name
     * @var string
     */
    protected $table = 'users';

    /**
     * Fields which will be manipulated
     * @var array
     */
    protected $fillable = ['id', 'name', 'email', 'password'];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
