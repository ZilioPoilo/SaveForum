<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('save', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('userid');
            $table->string('gametitle');
            $table->string('descrition');
            $table->string('filepath');
            $table->timestamps();
            $table->foreign('userid')->references('id')->on('user')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('save');
    }
}
