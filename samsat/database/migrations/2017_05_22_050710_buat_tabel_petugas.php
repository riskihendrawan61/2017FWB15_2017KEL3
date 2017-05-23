<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabelPetugas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petugas', function(Blueprint $table)
            {
                $table->increments('id');
                $table->string('nama');
                $table->string('username')->unique();
                $table->string('password');
                $table->timestamp('updated_at');
                $table->timestamp('created_at');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('petugas');
    }
}
