<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabelWajibpajak extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wajibpajak', function(Blueprint $table)
            {
                $table->increments('id');
                $table->string('nama');
                $table->string('jekel');
                $table->string('alamat');
                $table->string('telepon');
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
        Schema::drop('wajibpajak');
    }
}
