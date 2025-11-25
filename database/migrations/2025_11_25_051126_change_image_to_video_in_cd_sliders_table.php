<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('cd_sliders', function (Blueprint $table) {
            $table->renameColumn('image', 'video');
            $table->dropColumn('alt');
        });
    }

    public function down(): void
    {
        Schema::table('cd_sliders', function (Blueprint $table) {
            $table->renameColumn('video', 'image');
            $table->string('alt')->nullable();
        });
    }
};