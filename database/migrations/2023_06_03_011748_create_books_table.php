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
        Schema::create('books', function (Blueprint $table) {
            // $table->id();
            $table->integer('idregister',7);
            $table->string('tingkat_penanganan', 25);
            $table->string('no_perkara', 30);
            $table->date('tgl');
            $table->string('pemohon', 50);
            $table->string('termohon', 50);
            $table->string('masalah', 50);
            $table->string('kasus_posisi', 100);
            $table->string('tuntutan_penggugat', 50);
            $table->string('jpn', 70);
            $table->string('tahap_penanganan', 30);
            $table->string('hasil_diluar', 50);
            $table->string('hasil_penetapan', 50);
            $table->string('ket', 50);
            $table->primary('idregister');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
