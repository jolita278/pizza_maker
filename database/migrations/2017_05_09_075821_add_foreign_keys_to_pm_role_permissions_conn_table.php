<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPmRolePermissionsConnTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pm_role_permissions_conn', function(Blueprint $table)
		{
			$table->foreign('permission_id', 'fk_conn_roles_permissions_permisions1')->references('id')->on('pm_permisions')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('role_id', 'fk_conn_roles_permissions_roles1')->references('id')->on('pm_roles')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pm_role_permissions_conn', function(Blueprint $table)
		{
			$table->dropForeign('fk_conn_roles_permissions_permisions1');
			$table->dropForeign('fk_conn_roles_permissions_roles1');
		});
	}

}
