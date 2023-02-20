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
        Schema::create('products_materials_teble', function (Blueprint $table) {
            $table->foreignId('products_id');
            $table->foreignId('materials_id');
            $table->integer('quanity');
            $table->timestamps();

        });
    }
// quanity - mahsulot tayyorlash uchun kerak bo'ladigan xomashyo soni(hajmi)
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products_materials_teble');
    }
};
