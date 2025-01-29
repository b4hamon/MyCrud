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
        Schema::table('users', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('role_id')->after('name')->nullable(); // Agregar columna role_id, despues del campo name
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade'); // Clave foránea, cascade, es si boora un rol borra todos los user de la rol
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['role_id']); // Eliminar la restricción de clave foránea
            $table->dropColumn('role_id');  // Eliminar la columna role_id
        });
    }
};
