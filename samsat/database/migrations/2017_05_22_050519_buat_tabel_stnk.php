<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabelStnk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stnk', function(Blueprint $table)
            {
                $table->increments('id');
                $table->integer('kendaraan_id')->unsigned();
                $table->string('norangka');
                $table->string('nomesin');
                $table->string('silinder');
                $table->string('bahanbakar');
                $table->string('warna');
                $table->timestamp('updated_at');
                $table->timestamp('created_at');
            });
        Schema::table('stnk', function(Blueprint $table)
            {
                $table->foreign('kendaraan_id')->references('id')->on('kendaraan')->onUpdate('cascade')->onDelete('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('stnk');
    }
}
