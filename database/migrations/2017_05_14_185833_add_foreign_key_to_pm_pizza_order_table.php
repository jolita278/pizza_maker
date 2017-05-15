<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyToPmPizzaOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pm_pizza_order', function (Blueprint $table) {
            $table->foreign('user_id', 'fk_pizza_user1')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pm_pizza_order', function (Blueprint $table) {
            $table->dropForeign('fk_pizza_user1');
        });
    }
}
