<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePfrActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pfr_activities', function (Blueprint $table) {
            $table->id();
            if (Schema::hasTable('pfrs')) {
                $table->bigInteger('pfr_id')->unsigned();
                $table->foreign('pfr_id')->references('id')->on('pfrs');
            }
            if (Schema::hasTable('users')) {
                $table->bigInteger('user_id')->unsigned();
                $table->foreign('user_id')->references('id')->on('users');
            }
            $table->tinyInteger('type')->unsigned()->default(0);
            $table->dateTime('time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pfr_activities');
    }
}
