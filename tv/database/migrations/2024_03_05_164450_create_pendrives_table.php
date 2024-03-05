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
        Schema::create('pendrives', function (Blueprint $table) {
            $table->id();
            $table->string('pendrive');
            $table->string('activation');
            $table->string('validity');
            $table->string('remaining');
            $table->string('validityapp');
            $table->string('defaultpass');
            $table->string('installpname');
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
        Schema::dropIfExists('pendrives');
    }
};
