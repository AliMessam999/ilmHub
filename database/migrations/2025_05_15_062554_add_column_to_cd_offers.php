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
        Schema::table('cd_offers', function (Blueprint $table) {
            //
            $table->foreignId('category_id')
            ->nullable()
            ->constrained('cd_categories')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('position')->nullable()->comment('top bottom');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cd_offers', function (Blueprint $table) {
            //
            Schema::table('cd_news', function (Blueprint $table) {
                $table->dropConstrainedForeignId('category_id');
            });
            $table->dropColumn('position');
        });
    }
};
