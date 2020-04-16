<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBalancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (! Schema::hasTable('balances')) {
            Schema::create('balances', function (Blueprint $table) {
                $table->id();
                if (Schema::hasTable('pfrs')) {
                    $table->bigInteger('pfr_id')->unsigned();
                    $table->foreign('pfr_id')->references('id')->on('pfrs');
                }
                $table->json('assets')->nullable();
                $table->json('liabilities')->nullable();
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
        Schema::dropIfExists('balances');
    }
}
