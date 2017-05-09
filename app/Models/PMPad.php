<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PMPad extends CoreModel
{
    /**
     * Table name
     * @var string
     */
    protected $table = 'pm_pad';

    /**
     * Fields which will be manipulated
     * @var array
     */
    protected $fillable = ['id', 'name', 'calories'];
}
