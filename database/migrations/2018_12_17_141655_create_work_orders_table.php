<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_orders', function (Blueprint $table) {
            $table->increments('id_work_order');
            $table->string('no_pengaduan');
            $table->string('id_telp');
            $table->string('pelapor');
            $table->string('detail');
            $table->string('polda');
            $table->string('polres');
            $table->string('eskalasi');
            $table->string('status');            
            $table->string('tgl_laporan');
            $table->string('sub_kategori');
            $table->string('kategori');
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
        Schema::dropIfExists('work_orders');
    }
}
