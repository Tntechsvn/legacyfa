<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (! Schema::hasTable('permission_role')) {
            Schema::create('permission_role', function (Blueprint $table) {
                if (Schema::hasTable('permissions')) {
                    $table->bigInteger('permission_id')->unsigned();
                    $table->foreign('permission_id')->references('id')->on('permissions')->onDelete('cascade');
                }
                if (Schema::hasTable('roles')) {
                    $table->bigInteger('role_id')->unsigned();
                    $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
                }
            });
            //
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permission_role');
    }
}
