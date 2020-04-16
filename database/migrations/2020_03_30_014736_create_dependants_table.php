<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDependantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (! Schema::hasTable('dependants')) {
            if (! Schema::hasTable('dependants')) {
                Schema::create('dependants', function (Blueprint $table) {
                    $table->id();
                    if (Schema::hasTable('pfrs')) {
                        $table->bigInteger('pfr_id')->unsigned();
                        $table->foreign('pfr_id')->references('id')->on('pfrs');
                    }
                    $table->string('title');
                    $table->string('name');
                    $table->string('relationship');
                    $table->date('dob')->nullable();
                    $table->tinyInteger('age')->unsigned();
                    $table->tinyInteger('gender')->unsigned()->defaul(0);
                    $table->string('year_to_support');
                    $table->timestamps();
                    $table->softDeletes();
                });
            }
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dependants');
    }
}
