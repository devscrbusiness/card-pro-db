<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNombreDeLaEmpresaToNosotrosTextTable extends Migration
{
    /**
     * Ejecutar las migraciones.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nosotros_text', function (Blueprint $table) {
            $table->string('nombre_de_la_empresa')->nullable()->after('texto');
        });
    }

    /**
     * Deshacer las migraciones.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('nosotros_text', function (Blueprint $table) {
            $table->dropColumn('nombre_de_la_empresa');
        });
    }
}
