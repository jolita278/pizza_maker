<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PMUsers extends CoreModel
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
    protected $fillable = ['id', 'name', 'email', 'password', 'remember_token'];
}
