<?php

namespace App\Models;


use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class PMUsers extends Authenticatable
{
    use Notifiable;
    public $incrementing = false;
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
     * Fields which will be hidden
     * @var array
     */
    protected $hidden = ['password', 'remember_token',];


    /**
     * Returns Roles data
     * @return mixed
     *
     */
    /*public function rolesConnectionData()
    {
        return $this->belongsToMany(PMUserRoleConnections::class, 'pm_user_roles_conn', 'user_id', 'role_id');
    }*/
    public function rolesConnectionData()
    {
        return $this->belongsToMany(PMRoles::class, 'pm_user_roles_conn', 'user_id', 'role_id');
    }
}
