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
        Schema::create('crproduct', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // e.g., Sofa Minimalis Linen
            $table->string('category'); // e.g., Sofa, Meja, Kursi, etc.
            $table->decimal('price', 15, 2); // Rp 8.499.000
            $table->decimal('original_price', 15, 2)->nullable(); // For showing discount
            $table->enum('label', ['Terlaku', 'Baru', 'Diskon', 'Terbatas'])->nullable(); // optional badges
            $table->unsignedTinyInteger('rating')->default(0); // Stars, 1–5 ideally
            $table->unsignedInteger('rating_count')->default(0); // e.g., 24 reviews
            $table->string('image_path')->nullable(); // store image path or filename
            $table->boolean('is_available')->default(true); // stock indicator
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crproduct');
    }
};
