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
        Schema::create('furnitur_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('furnitur_id')->constrained('furnitur')->onDelete('cascade');
            $table->longText('full_description')->nullable(); // In-depth marketing babble or specs
            $table->text('material')->nullable();
            $table->text('dimensi')->nullable();
            $table->integer('berat')->nullable();
            $table->text('warna')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail');
    }
};
