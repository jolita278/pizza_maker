<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePMPizzaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('PM_pizza', function(Blueprint $table)
		{
			$table->integer('count', true);
			$table->string('id', 36)->unique('id_UNIQUE');
			$table->timestamps();
			$table->softDeletes();
			$table->string('contacts');
			$table->string('comments')->nullable();
			$table->string('kcal')->nullable();
			$table->string('dough_id', 36)->nullable()->index('fk_PM_pizza_PM_pizza_dough_idx');
			$table->string('cheese_id', 36)->nullable()->index('fk_PM_pizza_PM_pizza_cheese1_idx');
			$table->string('user_id', 36)->nullable()->index('fk_PM_pizza_PM_users1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('PM_pizza');
	}

}
