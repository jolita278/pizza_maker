<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPMPermissionsRolesConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('PM_permissions_roles_connections', function(Blueprint $table)
		{
			$table->foreign('permissions_id', 'fk_PM_permissions_roles_connections_PM_permissions1')->references('id')->on('PM_permissions')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('roles_id', 'fk_PM_permissions_roles_connections_PM_roles1')->references('id')->on('PM_roles')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('PM_permissions_roles_connections', function(Blueprint $table)
		{
			$table->dropForeign('fk_PM_permissions_roles_connections_PM_permissions1');
			$table->dropForeign('fk_PM_permissions_roles_connections_PM_roles1');
		});
	}

}
