<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informations', function (Blueprint $table) {
            $table->id();
            $table->integer('userid');
            $table->string('baddress1');
            $table->string('baddress2');
            $table->string('bcity');
            $table->string('bcountry');
            $table->string('bemail');
            $table->string('bphone');
            $table->string('saddress1');
            $table->string('saddress2');
            $table->string('scity');
            $table->string('scountry');
            $table->string('semail');
            $table->string('sphone');
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
        Schema::dropIfExists('informations');
    }
}
