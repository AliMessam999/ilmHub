<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('cd_menus', function (Blueprint $table) {
            // $table->integer('order')->nullable()->after('id'); // add order column
        });
    }

    public function down(): void
    {
        Schema::table('cd_menus', function (Blueprint $table) {
            // $table->dropColumn('order');
        });
    }
};
