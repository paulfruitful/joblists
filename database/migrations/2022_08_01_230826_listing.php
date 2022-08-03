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
        Schema::create('listings',function(Blueprint $table){
            $table->id();
            $table->string('company');
            $table->string('title');
            $table->longText('description');
            $table->string('photo')->nullable();
            $table->string('email');
            $table->string('tags');
            $table->string('website');
            $table->string('location');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('listings');
    }
    }
};
