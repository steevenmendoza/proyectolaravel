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
        Schema::table('proyectos', function (Blueprint $table) {
            // Check if the column exists before trying to drop it
            if (Schema::hasColumn('proyectos', 'user_id')) {
                $table->dropForeign(['user_id']); // Drop foreign key if it exists
                $table->dropColumn('user_id'); // Drop the column
            }
        });
    }

    public function down()
    {
        Schema::table('proyectos', function (Blueprint $table) {
            // Only add the column back if it doesn't exist
            if (!Schema::hasColumn('proyectos', 'user_id')) {
                $table->unsignedBigInteger('user_id'); // Add the column
                // You might also want to recreate the foreign key if necessary
            }
        });
    }
};
