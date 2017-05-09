<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PMCheese extends CoreModel
{
    /**
     * Table name
     * @var string
     */
    protected $table = 'pm_cheese';

    /**
     * Fields which will be manipulated
     * @var array
     */
    protected $fillable = ['id', 'name', 'calories'];
}
