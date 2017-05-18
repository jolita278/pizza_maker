<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PMUserRoleConnections extends Model
{
    public $updated_at = false;
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

    public function rolesData()
    {
        return $this->hasOne(PMRoles::class, 'id', 'role_id');
    }
}
