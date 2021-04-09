<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChuyenmucTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chuyenmuc', function (Blueprint $table) {
            $table->increments('idCM');
            $table->string('TenChuyenMuc');
            $table->string('ThuTu');
            $table->string('AnHien');
            $table->date('Ngay')->nullable();
            $table->integer('idLT')->unsigned();
            $table->foreign('idLT')->references('idLT')->on('loaitin')->onDelete('cascade');
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
        Schema::dropIfExists('chuyenmuc');
    }
}
