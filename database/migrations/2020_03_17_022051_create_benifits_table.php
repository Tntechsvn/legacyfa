<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBenifitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('benifits', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('slug');
            $table->text('detail');
            if (Schema::hasTable('riders')) {
                $table->bigInteger('rider_id')->unsigned();
                $table->foreign('rider_id')->references('id')->on('riders');
            }
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('benifits');
    }
}
