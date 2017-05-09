<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPmPizzaOrderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pm_pizza_order', function(Blueprint $table)
		{
			$table->foreign('cheese_id', 'fk_pizza_cheese1')->references('id')->on('pm_cheese')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('pad_id', 'fk_pizza_pizza_type')->references('id')->on('pm_pad')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pm_pizza_order', function(Blueprint $table)
		{
			$table->dropForeign('fk_pizza_cheese1');
			$table->dropForeign('fk_pizza_pizza_type');
		});
	}

}
