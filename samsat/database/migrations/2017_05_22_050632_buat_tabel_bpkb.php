<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabelBpkb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bpkb', function(Blueprint $table)
            {
                $table->increments('id');
                $table->integer('kendaraan_id')->unsigned();
                $table->text('noseri');
                $table->timestamp('updated_at');
                $table->timestamp('created_at');
            });
        Schema::table('bpkb', function(Blueprint $table)
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
        Schema::drop('bpkb');
    }
}
