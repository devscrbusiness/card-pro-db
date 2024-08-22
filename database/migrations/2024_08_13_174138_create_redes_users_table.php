<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('redes_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('red_id')->constrained('redes_id')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::table('redes_users', function (Blueprint $table) {
            $table->string('url')->nullable()->after('red_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('redes_users');
    }
};
