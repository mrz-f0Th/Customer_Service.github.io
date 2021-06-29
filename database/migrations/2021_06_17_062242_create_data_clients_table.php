<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_clients', function (Blueprint $table) {
            $table->id();
            $table->timestamp('tanggal');
            $table->string('nama');
            $table->string('no_telp');
            $table->string('jasa');
            $table->text('brief');
            $table->string('upload');
            $table->string('no_invoice');
            $table->string('status');
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
        Schema::dropIfExists('data_clients');
    }
}
