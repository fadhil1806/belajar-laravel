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
        Schema::create('guru', function (Blueprint $table) {
            $table->id()->primary(); // Primary key
            $table->string('nama');
            $table->string('nik');
            $table->string('gtk');
            $table->string('nuptk');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->string('agama');
            $table->text('alamat');
            $table->string('no_hp');
            $table->string('mapel');
            $table->string('email')->unique(); // Email sebaiknya unik
            $table->string('jurusan');
            $table->string('lulusan');
            $table->string('gelar');
            $table->string('rekening');
            $table->enum('status', ['Aktif', 'Tidak aktif']);
            $table->string('url_foto')->nullable(); // Foto, KTP, dan SKM sebaiknya boleh kosong
            $table->string('url_ktp')->nullable();
            $table->string('url_skm')->nullable();
            $table->timestamps(); // created_at dan updated_at otomatis
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guru');
    }
};
