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
        Schema::create('cd_footers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('menu_id')->constrained('cd_menus')->onDelete('cascade');
            $table->foreignId('category_id')->nullable()->constrained('cd_categories')->onDelete('cascade');
            $table->foreignId('sub_category_id')->nullable()->constrained('cd_categories')->onDelete('cascade');

            $table->SoftDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cd_footers');
    }
};
