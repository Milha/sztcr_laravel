<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('porukas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('posiljalac_id')->constrained('users')->onDelete('cascade');
            $table->string('naslov');
            $table->text('sadrzaj');
            $table->boolean('procitana')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('porukas');
    }
};
