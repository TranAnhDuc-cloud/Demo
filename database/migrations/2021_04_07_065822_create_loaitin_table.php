<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoaitinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loaitin', function (Blueprint $table) {
            $table->increments('idLT');
            $table->string('TenLoaiTin');
            $table->string('ThuTu');
            $table->string('AnHien');
            $table->integer('idTL')->unsigned();
            $table->foreign('idTL')->references('idTL')->on('theloai')->onDelete('cascade');
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
        Schema::dropIfExists('loaitin');
    }
}
