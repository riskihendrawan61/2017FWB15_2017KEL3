<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabelTagihanstnk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tagihanstnk', function(Blueprint $table)
            {
                $table->increments('id');
                $table->integer('stnk_id')->unsigned();
                $table->integer('petugas_id')->unsigned();
                $table->date('tanggalpembayaran');
                $table->string('nopembayaran');
                $table->string('status');
                $table->timestamp('updated_at');
                $table->timestamp('created_at');
            });
        Schema::table('tagihanstnk', function(Blueprint $table)
            {
                $table->foreign('stnk_id')->references('id')->on('stnk')->onUpdate('cascade')->onDelete('cascade');
                $table->foreign('petugas_id')->references('id')->on('petugas')->onUpdate('cascade')->onDelete('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tagihanstnk');
    }
}

