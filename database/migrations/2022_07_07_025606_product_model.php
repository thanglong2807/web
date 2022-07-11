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
        Schema::create('san_pham', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tensp',255);
            $table->integer('so_luong');
            $table->integer('gia');
            $table->string('anh',255);
            $table->unsignedBigInteger('loai_san_pham');
            $table->timestamps();
            $table->softDeletes('trang_thai_xoa');
        });
        

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
