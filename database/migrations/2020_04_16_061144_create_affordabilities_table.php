<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAffordabilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (! Schema::hasTable('affordabilities')) {
            Schema::create('affordabilities', function (Blueprint $table) {
                $table->id();
                if (Schema::hasTable('pfrs')) {
                    $table->bigInteger('pfr_id')->unsigned();
                    $table->foreign('pfr_id')->references('id')->on('pfrs');
                }
                $table->json('payor_detail')->nullable();
                $table->json('budget')->nullable();
                $table->text('reason')->nullable();
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
        Schema::dropIfExists('affordabilities');
    }
}
