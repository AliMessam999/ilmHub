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
        Schema::create('cd_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('facebook_link')->default('#');
            $table->string('address');
            $table->string('location');
            $table->string('youtube_link')->default('#');
            $table->string('google_link')->default('#');
            $table->string('instagram_link')->default('#');
            $table->string('twitter_link')->default('#');
            $table->string('open_days');
            $table->string('open_time');
            $table->string('contact');
            $table->string('contact_2')->default('#');
            $table->string('email_2');
            $table->string('address_2');
            $table->string('fax');
            $table->longText('description');
            $table->string('alt');
            $table->string('image');
            $table->string('large_logo')->nullable();
            $table->SoftDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cd_profiles');
    }
};
