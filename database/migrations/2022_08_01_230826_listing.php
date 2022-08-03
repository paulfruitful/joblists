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
        Schema::create('listing',function(Blueprint $table){
            $table->id();
            $table->string('company');
            $table->string('title');
            $table->text('description');
            $table->string('photo');
            $table->string('email');
            $table->string("tags");
            $table->foreignId('user_id')->onDelete('cascade');
            $table->timestamps();

        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //  public function down()
    {
        Schema::dropIfExists('listing');
    }
    }
};
