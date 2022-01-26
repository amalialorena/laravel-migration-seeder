<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->id();
            $table->string('title', 40);
            $table->integer('length')->unsigned();
            $table->boolean('single')->default(false);
            $table->string('cover');
            $table->text('lyrics')->nullable();
            $table->string('genre',20);
            $table->boolean('explicit')->default(false);
            $table->date('release_date');
            $table->integer('price');
            $table->tinyInteger('ratings');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('songs');
    }
}
