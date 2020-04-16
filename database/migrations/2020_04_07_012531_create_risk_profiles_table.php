<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiskProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (! Schema::hasTable('risk_profiles')) {
            Schema::create('risk_profiles', function (Blueprint $table) {
                $table->id();
                if (Schema::hasTable('pfrs')) {
                    $table->bigInteger('pfr_id')->unsigned();
                    $table->foreign('pfr_id')->references('id')->on('pfrs');
                }
                $table->json('data')->nullable();
                $table->timestamps();
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
        Schema::dropIfExists('risk_profiles');
    }
}
