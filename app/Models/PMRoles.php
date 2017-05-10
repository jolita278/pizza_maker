<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PMRoles extends CoreModel
{
    /**
     * Table name
     * @var string
     */
    protected $table = 'pm_roles';

    /**
     * Fields which will be manipulated
     * @var array
     */
    protected $fillable = ['id', 'name'];
}
