<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSampelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sampel', function (Blueprint $table) {
            $table->id();
            $table->string('ket');
            $table->integer('p1');
            $table->integer('p2');
            $table->integer('p3');
            $table->integer('p4');
            $table->integer('p5');
            $table->integer('p6');
            $table->integer('p7');
            $table->integer('p8');
            $table->integer('p9');
            $table->integer('p10');
            $table->integer('p11');
            $table->integer('p12');
            $table->integer('p13');
            $table->integer('p14');
            $table->integer('p15');
            $table->string('total')->nullable();
            $table->string('hasil')->nullable();
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
        Schema::dropIfExists('sampel');
    }
}
