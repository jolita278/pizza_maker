<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePMPizzaIngredientsConnectionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('PM_pizza_ingredients_connection', function(Blueprint $table)
		{
			$table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->string('pizza_id', 36)->index('fk_PM_pizza_ingredients_connection_PM_pizza1_idx');
			$table->string('ingridient_id', 36)->index('fk_PM_pizza_ingredients_connection_PM_pizza_ingredients1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('PM_pizza_ingredients_connection');
	}

}
