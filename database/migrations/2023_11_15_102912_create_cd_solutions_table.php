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
        Schema::create('cd_solutions', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('title');
            $table->text('alt')->nullable();
            $table->string('image');
            $table->longText('description');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')
                    ->references('id')
                    ->on('cd_categories')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->SoftDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cd_solutions', function(Blueprint $table){
            $table->dropConstrainedForeignId('category_id'); 
        });
        Schema::dropIfExists('cd_solutions');
    }
};
