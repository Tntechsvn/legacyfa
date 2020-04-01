<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            if (Schema::hasTable('pfrs')) {
                $table->bigInteger('pfr_id')->unsigned();
                $table->foreign('pfr_id')->references('id')->on('pfrs');
            }
            $table->json('property')->nullable();
            $table->json('investment')->nullable();
            $table->json('saving')->nullable();
            $table->json('cpf')->nullable();
            $table->json('insurance')->nullable();
            $table->json('loan')->nullable();
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
        Schema::dropIfExists('portfolios');
    }
}
