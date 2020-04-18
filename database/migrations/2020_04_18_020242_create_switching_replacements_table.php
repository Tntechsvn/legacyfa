<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSwitchingReplacementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('switching_replacements', function (Blueprint $table) {
            $table->id();
            if (Schema::hasTable('pfrs')) {
                $table->bigInteger('pfr_id')->unsigned();
                $table->foreign('pfr_id')->references('id')->on('pfrs');
            }
            $table->json('data')->nullable();
            $table->text('note')->nullable();
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
        Schema::dropIfExists('switching_replacements');
    }
}
