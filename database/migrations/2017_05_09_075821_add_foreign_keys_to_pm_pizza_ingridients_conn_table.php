<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPmPizzaIngridientsConnTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pm_pizza_ingridients_conn', function(Blueprint $table)
		{
			$table->foreign('ingridients_id', 'fk_conn_pizza_ingridients_ingridients1')->references('id')->on('pm_ingridients')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('pizza_id', 'fk_conn_pizza_ingridients_pizza1')->references('id')->on('pm_pizza_order')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pm_pizza_ingridients_conn', function(Blueprint $table)
		{
			$table->dropForeign('fk_conn_pizza_ingridients_ingridients1');
			$table->dropForeign('fk_conn_pizza_ingridients_pizza1');
		});
	}

}
