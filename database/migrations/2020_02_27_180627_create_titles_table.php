<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTitlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    /* 
    titles : id
             user_id
             name
             delflag
             created_at
    */
    public function up()
    {
        Schema::create('titles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->string('name');
            $table->boolean('delete_flag')->default(0);
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
        Schema::dropIfExists('titles');
    }
}
