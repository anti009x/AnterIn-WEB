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
      Schema::create('userss', function (Blueprint $table) {
        $table->id();
        $table->foreignId('role_id')->constrained('roles');
        $table->string('alamat')->default('NULL');
        $table->string('nama');
        $table->string('nohp');
        $table->string('email')->unique();
        $table->integer('gaji')->default(0);
        $table->foreignId('kurirs_id')->nullable()->constrained('kurirs');
  
        $table->string('password');
        $table->rememberToken();
        $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};