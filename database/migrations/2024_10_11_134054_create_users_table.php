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
        $table->varchar('userName'); 
        $table->varchar('Pass');
            $table->varchar('Gender');
            $table->varchar('Phone');
            $table->varchar('Adress');
            $table->varchar('Email');

    });
}
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
