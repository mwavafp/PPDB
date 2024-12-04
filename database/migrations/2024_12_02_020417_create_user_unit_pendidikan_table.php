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
        Schema::create('user_unit_pendidikan', function (Blueprint $table) {
            $table->bigIncrements('id_uup');
            
            $table->enum('status',['aktif','tidak_aktif'])->default('aktif');
            $table->date('tgl_mulai');
            $table->date('tgl_berakhir');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_unit_pendidikan');
    }
};
