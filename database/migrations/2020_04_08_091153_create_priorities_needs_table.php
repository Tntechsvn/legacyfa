<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrioritiesNeedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('priorities_needs', function (Blueprint $table) {
            $table->id();
            if (Schema::hasTable('pfrs')) {
                $table->bigInteger('pfr_id')->unsigned();
                $table->foreign('pfr_id')->references('id')->on('pfrs');
            }
            $table->json('rate')->nullable();
            $table->json('income')->nullable();
            $table->json('fund_disability')->nullable();
            $table->json('fund_critical')->nullable();
            $table->json('fund_children')->nullable();
            $table->json('fund_saving')->nullable();
            $table->json('fund_retirement')->nullable();
            $table->json('cover')->nullable();
            $table->json('fund_care')->nullable();
            $table->json('fund_hospital')->nullable();
            $table->json('estate_planning')->nullable();
            $table->json('other_insurance')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('priorities_needs');
    }
}
