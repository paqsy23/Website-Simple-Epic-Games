<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('developer_id');
            $table->unsignedBigInteger('publisher_id');
            $table->string('name')->unique();
            $table->date('release');
            $table->string('description');
            $table->string('instagram');
            $table->string('website');
            $table->string('reddit');
            $table->string('youtube');
            $table->string('facebook');
            $table->string('twitch');
            $table->string('twitter');
            $table->integer('price');
            $table->integer('rating')->nullable();
            $table->unsignedBigInteger('add_ons')->nullable();
            $table->integer('status');
            $table->string('OS')->nullable();
            $table->string('CPU')->nullable();
            $table->string('GPU')->nullable();
            $table->string('processor')->nullable();
            $table->string('memory')->nullable();
            $table->string('storage')->nullable();
            $table->string('direct_x')->nullable();
            $table->string('graphics')->nullable();
            $table->string('note')->nullable();
            $table->timestamps();

            $table->foreign('developer_id')->references('id')->on('developer')->onDelete('cascade');
            $table->foreign('publisher_id')->references('id')->on('developer')->onDelete('cascade');
            $table->foreign('add_ons')->references('id')->on('games')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('games');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
