<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPmUserRolesConnTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pm_user_roles_conn', function(Blueprint $table)
		{
			$table->foreign('role_id', 'fk_conn_user_roles_roles1')->references('id')->on('pm_roles')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('user_id', 'fk_conn_user_roles_users')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pm_user_roles_conn', function(Blueprint $table)
		{
			$table->dropForeign('fk_conn_user_roles_roles1');
			$table->dropForeign('fk_conn_user_roles_users');
		});
	}

}
