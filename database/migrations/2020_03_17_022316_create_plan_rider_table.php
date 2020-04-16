<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanRiderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (! Schema::hasTable('plan_rider')) {
            Schema::create('plan_rider', function (Blueprint $table) {
                if (Schema::hasTable('plans')) {
                    $table->bigInteger('plan_id')->unsigned();
                    $table->foreign('plan_id')->references('id')->on('plans')->onDelete('cascade');
                }
                if (Schema::hasTable('riders')) {
                    $table->bigInteger('rider_id')->unsigned();
                    $table->foreign('rider_id')->references('id')->on('riders')->onDelete('cascade');
                }
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plan_rider');
    }
}
