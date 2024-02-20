<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_completo');
            $table->string('email');
            $table->string('password');
            $table->string('address');
            $table->string('city');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('proyectos', function (Blueprint $table) {
            $table->dropForeign(['user_id']); // Para eliminar la clave foránea, asegúrate de que el nombre concuerde con las convenciones de Laravel
            $table->dropColumn('user_id'); // Elimina la columna user_id
        });
        
        Schema::dropIfExists('proyectos');
    }
};
