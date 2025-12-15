<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cd_feature_sub_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('feature_id');
            $table->unsignedBigInteger('sub_category_id');
            $table->timestamps();

            $table->foreign('feature_id')->references('id')->on('cd_features')->onDelete('cascade');
            $table->foreign('sub_category_id')->references('id')->on('cd_categories')->onDelete('cascade');
            
            $table->unique(['feature_id', 'sub_category_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cd_feature_sub_categories');
    }
};