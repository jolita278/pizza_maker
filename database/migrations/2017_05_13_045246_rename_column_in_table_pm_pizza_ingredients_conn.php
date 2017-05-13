<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameColumnInTablePmPizzaIngredientsConn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pm_pizza_ingredients_conn', function (Blueprint $table) {
            $table->renameColumn('ingridients_id' , 'ingredients_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pm_pizza_ingredients_conn', function (Blueprint $table) {
            $table->renameColumn('ingredients_id' , 'ingridients_id');
        });
    }
}
