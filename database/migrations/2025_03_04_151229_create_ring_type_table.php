<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ring_type', function (Blueprint $table) {
            $table->id();
            $table->string('type', 50);
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('ring_type');
    }
};
