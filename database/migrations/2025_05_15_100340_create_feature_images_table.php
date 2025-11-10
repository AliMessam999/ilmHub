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
        Schema::create('cd_feature_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('feature_id')
            ->nullable()
            ->constrained('cd_features')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('image');
            $table->string('alt')->nullable();
            $table->SoftDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feature_images');
    }
};
