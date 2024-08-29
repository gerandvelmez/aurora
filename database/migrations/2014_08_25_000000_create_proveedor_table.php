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
        Schema::create('aur_proveedor', function (Blueprint $table) {
            $table->id('aup_id');
            $table->string('aup_name');
            $table->string('aup_dennier');
            $table->integer('aup_meters_threads');
            $table->string('aup_type_threads');
            $table->string('aup_status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
