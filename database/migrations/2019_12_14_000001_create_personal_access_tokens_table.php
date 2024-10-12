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
        Schema::create('register', function (Blueprint $table) {
            // $table->varchar('userName',30)->nullable();
            // $table->varchar('Pass',30)-> nullable();
            // $table->varchar('Gender', 30)->nullable();
            // $table->varchar('Phone', 30)->nullable();
            // $table->varchar('Adress', 30)->nullable();
            // $table->varchar('Email', 30)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('register');
    }
};
