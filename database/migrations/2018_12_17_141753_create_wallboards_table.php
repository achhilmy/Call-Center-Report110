<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWallboardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wallboards', function (Blueprint $table) {
            $table->increments('id_wallboard');
            $table->string('interval');
            $table->string('rata-rata_Kecepatan_Jawab_Panggilan_(detik)');
            $table->string('rata-rata_Waktu_Panggilan_Tidak_Terjawab_(detik)');
            $table->string('rata-rata_Waktu_Bicara');
            $table->string('jumlah_Panggilan_Terjawab');
            $table->string('jumlah_Panggilan_Tidak_Terjawab');
            $table->string('jumlah_Panggilan_Masuk');
            $table->string('panggilan_Perposisi');            
            $table->string('rata-rata_Agent_Login');
            $table->string('total_Waktu_Bicara');
            $table->string('waktu_Panggilan_Terjawab');
            $table->string('panggilan_Terjawab');      
            $table->string('service_Level');     
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
        Schema::dropIfExists('wallboards');
    }
}
