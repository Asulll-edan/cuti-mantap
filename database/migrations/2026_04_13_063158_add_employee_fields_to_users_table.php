<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('nip')->nullable()->unique();
            $table->string('status_karyawan')->nullable();
            $table->string('role')->default('user');
            $table->enum('jenis_kelamin', ['Laki-Laki', 'Perempuan'])->nullable();
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['nip', 'status_karyawan', 'role', 'jenis_kelamin']);
        });
    }
};