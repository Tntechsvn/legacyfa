<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('name');
            $table->tinyInteger('relationship')->unsigned()->default(0);
            $table->tinyInteger('gender')->unsigned()->default(0);
            $table->string('nric_passport');
            $table->string('nationality');
            $table->date('dob');
            $table->string('marital_status');
            $table->tinyInteger('smoker')->unsigned()->default(0);
            $table->string('employment_status');
            $table->string('occupation');
            $table->string('company');
            $table->string('business_nature');
            $table->integer('income_range')->unsigned();
            $table->string('contact_home')->nullable();
            $table->string('contact_mobile');
            $table->string('contact_office')->nullable();
            $table->string('contact_fax')->nullable();
            $table->string('email')->nullable();
            $table->text('residential_address');
            $table->string('mailing_address')->nullable();
            $table->timestamps();
            if (Schema::hasTable('pfrs')) {
                $table->bigInteger('pfr_id')->unsigned();
                $table->foreign('pfr_id')->references('id')->on('pfrs');
            }
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
        Schema::dropIfExists('clients');
    }
}
