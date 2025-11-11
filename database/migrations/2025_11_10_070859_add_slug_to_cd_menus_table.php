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
        Schema::table('cd_menus', function (Blueprint $table) {
            $table->string('slug')->nullable(); // no ->unique() for now
        });
    }

    public function down(): void
    {
        Schema::table('cd_menus', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
    }
};
