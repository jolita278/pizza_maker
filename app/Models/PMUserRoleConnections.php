<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PMUserRoleConnections extends Model
{
    /**
     * Table name
     * @var string
     */
    protected $table = 'pm_user_roles_conn';

    /**
     * Fields which will be manipulated
     * @var array
     */
    protected $fillable = ['user_id', 'role_id'];
}
