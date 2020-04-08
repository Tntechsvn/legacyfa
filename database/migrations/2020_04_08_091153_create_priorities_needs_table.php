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
