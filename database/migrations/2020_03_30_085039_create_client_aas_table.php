<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientAasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_aas', function (Blueprint $table) {
            $table->id();
            if (Schema::hasTable('clients')) {
                $table->bigInteger('client_id')->unsigned();
                $table->foreign('client_id')->references('id')->on('clients');
            }
            $table->tinyInteger('age')->unsigned()->default(0);
            $table->tinyInteger('english_spoken')->unsigned()->default(0);
            $table->tinyInteger('english_written')->unsigned()->default(0);
            $table->tinyInteger('education_level')->unsigned()->default(0);
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
        Schema::dropIfExists('client_aas');
    }
}
