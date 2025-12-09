<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('cd_features', function (Blueprint $table) {
            if (Schema::hasColumn('cd_features', 'industry_id')) {
                $table->dropForeign(['industry_id']);
                $table->dropColumn('industry_id');
            }
            if (!Schema::hasColumn('cd_features', 'industry')) {
                $table->string('industry')->nullable();
            }
        });
    }

    public function down(): void
    {
        Schema::table('cd_features', function (Blueprint $table) {
            $table->dropColumn('industry');
            $table->unsignedBigInteger('industry_id')->nullable();
            $table->foreign('industry_id')
                  ->references('id')->on('cd_clients')
                  ->onDelete('set null');
        });
    }
};
