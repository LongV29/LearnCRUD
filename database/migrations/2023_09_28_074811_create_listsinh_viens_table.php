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
        Schema::create('listsinh_viens', function (Blueprint $table) {
            $table->id();
            $table->string('FullName');
            $table->string('MaSv');
            $table->string('Phone');
            $table->string('Sex');
            $table->string('Address');
            $table->string('Birthday');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listsinh_viens');
    }
};
