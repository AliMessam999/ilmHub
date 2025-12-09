<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('cd_features', function (Blueprint $table) {
            $table->dropForeign(['industry_id']);
            $table->dropColumn('industry_id');
            $table->string('industry')->nullable()->after('location');
        });
    }

    public function down(): void
    {
        Schema::table('cd_features', function (Blueprint $table) {
            $table->dropColumn('industry');
            $table->unsignedBigInteger('industry_id')->nullable()->after('location');
            $table->foreign('industry_id')
                  ->references('id')->on('cd_clients')
                  ->onDelete('set null');
        });
    }
};
