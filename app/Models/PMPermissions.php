<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PMPermissions extends CoreModel
{
    /**
     * Table name
     * @var string
     */
    protected $table = 'pm_permisions';

    /**
     * Fields which will be manipulated
     * @var array
     */
    protected $fillable = ['id', 'name'];
}
