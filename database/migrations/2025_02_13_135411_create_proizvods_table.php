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
        Schema::create('proizvods', function (Blueprint $table) {
            $table->id();
            $table->string('nazivProizvoda');
            $table->text('opis')->nullable();
            $table->decimal('cena', 8, 2);
            $table->integer('kolicina')->default(0);
            $table->foreignId('magacin_id')->constrained('magacins')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('proizvods');
    }
};