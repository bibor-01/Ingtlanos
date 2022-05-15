<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingatlanoks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategoria')->references('id')->on('kategoriaks');
            $table->string('leiras');
            $table->date('hirdetesDatuma');
            $table->boolean('tehermentes');
            $table->integer('ar')->nullable();
            $table->string('kepURL');
            $table->timestamps();
        });

        DB::table('ingatlanoks')->insert([
            ['kategoria' => "1",'leiras' =>'Kertvárosi részen...','hirdetesDatuma'=> "2021-01-01",'tehermentes'=>true,'ar'=>26990000,'kepURL'=>'url link'],

          
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingatlanoks');
    }
};
