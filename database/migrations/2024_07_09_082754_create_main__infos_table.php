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
        Schema::create('main__infos', function (Blueprint $table) {
            $table->id();
            $table->string('location');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('linkedin');
            $table->string('telegram');
            $table->string('about_as');
            $table->string('privacy');
            $table->string('condition');
            $table->string('policy');
            $table->string('faqs');
            $table->string('unit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('main__infos');
    }
};
