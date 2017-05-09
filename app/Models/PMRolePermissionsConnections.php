<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PMRolePermissionsConnections extends Model
{
    /**
     * Table name
     * @var string
     */
    protected $table = 'pm_role_permissions_conn';

    /**
     * Fields which will be manipulated
     * @var array
     */
    protected $fillable = ['role_id', 'permission_id'];
}
