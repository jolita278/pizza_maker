<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPMPizzaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('PM_pizza', function(Blueprint $table)
		{
			$table->foreign('cheese_id', 'fk_PM_pizza_PM_pizza_cheese1')->references('id')->on('PM_pizza_cheese')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('dough_id', 'fk_PM_pizza_PM_pizza_dough')->references('id')->on('PM_pizza_dough')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('user_id', 'fk_PM_pizza_PM_users1')->references('id')->on('PM_users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('PM_pizza', function(Blueprint $table)
		{
			$table->dropForeign('fk_PM_pizza_PM_pizza_cheese1');
			$table->dropForeign('fk_PM_pizza_PM_pizza_dough');
			$table->dropForeign('fk_PM_pizza_PM_users1');
		});
	}

}
