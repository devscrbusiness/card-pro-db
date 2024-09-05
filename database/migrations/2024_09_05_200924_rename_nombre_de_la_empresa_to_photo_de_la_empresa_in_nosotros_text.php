<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameNombreDeLaEmpresaToPhotoDeLaEmpresaInNosotrosText extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nosotros_text', function (Blueprint $table) {
            $table->renameColumn('nombre_de_la_empresa', 'photo_de_la_empresa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('nosotros_text', function (Blueprint $table) {
            $table->renameColumn('photo_de_la_empresa', 'nombre_de_la_empresa');
        });
    }
}
