<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelanggans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('gol_id');
            $table->foreign('gol_id')->references('id')->on('golongans');
            $table->string('pel_no');
            $table->string('pel_nama');
            $table->text('pel_alamat');
            $table->string('pel_hp');
            $table->string('pel_ktp');
            $table->string('pel_seri');
            $table->string('pel_meteran');
            $table->enum('pel_aktif', ['Aktif', 'Non-Aktif']);
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelanggan');
    }
};
