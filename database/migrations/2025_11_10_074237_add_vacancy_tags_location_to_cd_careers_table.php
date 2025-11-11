<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('cd_careers', function (Blueprint $table) {
            $table->string('vacancy_number')->nullable()->after('email');
            $table->string('tags')->nullable()->after('vacancy_number');
            $table->string('location_type')->nullable()->after('tags');
        });
    }

    public function down(): void
    {
        Schema::table('cd_careers', function (Blueprint $table) {
            $table->dropColumn(['vacancy_number', 'tags', 'location_type']);
        });
    }
};

