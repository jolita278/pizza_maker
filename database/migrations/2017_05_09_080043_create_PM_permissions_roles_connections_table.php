<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePMPermissionsRolesConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('PM_permissions_roles_connections', function(Blueprint $table)
		{
			$table->integer('count', true);
			$table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->string('roles_id', 36)->nullable()->index('fk_PM_permissions_roles_connections_PM_roles1_idx');
			$table->string('permissions_id', 36)->nullable()->index('fk_PM_permissions_roles_connections_PM_permissions1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('PM_permissions_roles_connections');
	}

}
