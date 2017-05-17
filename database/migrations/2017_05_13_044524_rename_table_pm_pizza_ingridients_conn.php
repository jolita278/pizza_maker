<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameTablePmPizzaIngridientsConn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::rename('pm_pizza_ingridients_conn', 'pm_pizza_ingredients_conn');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::rename('pm_pizza_ingredients_conn', 'pm_pizza_ingridients_conn');
    }
}
