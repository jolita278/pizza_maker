<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserResourceConnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pm_users_resource_conn', function (Blueprint $table) {
            $table->integer('count', true);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('user_id', 36)->nullable()->index('user_id');
            $table->string('resource_id', 36)->nullable()->index('fk_conn_user_resource_resource1_idx');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pm_users_resource_conn', function (Blueprint $table) {
            //
        });
    }
}
