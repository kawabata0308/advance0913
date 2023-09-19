<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advance', function (Blueprint $table) {
            $table->id();
            $table->string('family-name');
            $table->string('given-name');
            $table->string('email');
            $table->string('gender_id');
            $table->string('content', 120);
            $table->string('postcode', 8);
            $table->string('prefecture_id');
            $table->string('building');
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
        Schema::dropIfExists('advance');
    }
}
