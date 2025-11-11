<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('cd_features', function (Blueprint $table) {
            $table->unsignedBigInteger('sub_category_id')->nullable()->after('description');
            $table->string('client_name')->nullable()->after('sub_category_id');
            $table->string('funded_by')->nullable()->after('client_name');
            $table->string('location')->nullable()->after('funded_by');
            $table->unsignedBigInteger('industry_id')->nullable()->after('location');
            $table->string('website')->nullable()->after('industry_id');

            // Foreign keys
            $table->foreign('sub_category_id')
                  ->references('id')->on('cd_categories')
                  ->onDelete('set null');

            $table->foreign('industry_id')
                  ->references('id')->on('cd_clients')
                  ->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::table('cd_features', function (Blueprint $table) {
            $table->dropForeign(['sub_category_id']);
            $table->dropForeign(['industry_id']);
            $table->dropColumn([
                'sub_category_id',
                'client_name',
                'funded_by',
                'location',
                'industry_id',
                'website'
            ]);
        });
    }
};
