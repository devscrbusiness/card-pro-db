<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddServicioPictureToServiciosUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('servicios_user', function (Blueprint $table) {
            $table->string('servicio_picture')->nullable()->after('servicio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('servicios_user', function (Blueprint $table) {
            $table->dropColumn('servicio_picture');
        });
    }
}
