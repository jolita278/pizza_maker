<?php

namespace App\Models;

class PMPermissions extends CoreModel
{
    /**
     * Table name
     * @var string
     */
    protected $table = 'pm_permissions';

    /**
     * Fields which will be manipulated
     * @var array
     */
    protected $fillable = ['id', 'name'];
}
