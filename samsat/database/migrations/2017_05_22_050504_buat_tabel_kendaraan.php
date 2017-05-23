<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabelKendaraan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kendaraan', function(Blueprint $table)
            {
                $table->increments('id');
                $table->integer('wajibpajak_id')->unsigned();
                $table->text('merk');
                $table->text('jenis');
                $table->timestamp('updated_at');
                $table->timestamp('created_at');
            });
        Schema::table('kendaraan', function(Blueprint $table)
            {
                $table->foreign('wajibpajak_id')->references('id')->on('wajibpajak')->onUpdate('cascade')->onDelete('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('kendaraan');
    }
}
