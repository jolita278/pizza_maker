<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePmPizzaOrderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pm_pizza_order', function(Blueprint $table)
		{
			$table->integer('count', true);
			$table->string('id', 36)->unique('id_UNIQUE');
			$table->timestamps();
			$table->softDeletes();
			$table->string('pad_id', 36)->index('fk_pizza_pizza_type_idx');
			$table->string('cheese_id', 36)->nullable()->index('fk_pizza_cheese1_idx');
			$table->text('description', 65535)->nullable();
			$table->string('user_id', 36)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pm_pizza_order');
	}

}
