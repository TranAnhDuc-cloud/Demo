<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tin', function (Blueprint $table) {
            $table->increments('idTin');
            $table->string('TieuDe');
            $table->longText('NoiDung')->nullable();
            $table->string('urlHinh');
            $table->dateTime('Ngay');
            $table->string('TomTat')->nullable();
            $table->tinyInteger('TinNoiBat')->nullable();
            $table->tinyInteger('AnHien')->nullable();
            $table->Integer('SoLanXem')->nullable();
            $table->Integer('idTL')->unsigned();
            $table->Integer('idLT')->unsigned();
            $table->Integer('idCM')->unsigned();
            $table->foreign('idTL')->references('idTL')->on('theloai')->onDelete('cascade');
            $table->foreign('idLT')->references('idLT')->on('loaitin')->onDelete('cascade');
            $table->foreign('idCM')->references('idCM')->on('chuyenmuc')->onDelete('cascade');
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
        Schema::dropIfExists('tin');
    }
}