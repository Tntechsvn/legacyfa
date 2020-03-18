<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('slug');
            if (Schema::hasTable('companies')) {
                $table->bigInteger('company_id')->unsigned();
                $table->foreign('company_id')->references('id')->on('companies');
            }
            if (Schema::hasTable('category_plans')) {
                $table->bigInteger('category_plan_id')->unsigned();
                $table->foreign('category_plan_id')->references('id')->on('category_plans');
            }
            $table->text('feature')->nullable();
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
        Schema::dropIfExists('plans');
    }
}
