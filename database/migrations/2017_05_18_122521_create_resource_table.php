<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResourceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pm_resource', function (Blueprint $table) {
                $table->integer('count', true);
                $table->string('id', 36)->unique('id_UNIQUE');
                $table->timestamps();
                $table->softDeletes();
                $table->string('mime_type', 255);
                $table->string('path', 255);
                $table->string('width', 255)->nullable();
                $table->string('height', 255)->nullable();
                $table->string('size', 255)->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pm_resource', function (Blueprint $table) {
            //
        });
    }
}
