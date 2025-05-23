<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('furnitur_details', function (Blueprint $table) {
            // Modify columns to match your new schema
            
            // Example: change 'material' column to text and nullable
            $table->text('material')->nullable()->change();

            $table->longText('full_description')->nullable()->change();

            $table->text('dimensi')->nullable()->change();

            $table->integer('berat')->nullable()->change();

            $table->text('warna')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('furnitur_details', function (Blueprint $table) {
            //
        });
    }
};
