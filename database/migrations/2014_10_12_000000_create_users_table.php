<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //FOLLOW MO LANG ITO.
        //PWD MO NAMAN NA WAG TANGGALIN UNG EMAIL NA COLUMN SINCE PWD MO MAGAMIT SA PAGRESET NG PASSWORD
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('id_number')->unique();
            $table->string('email')->unique();
            $table->string('name');
            $table->string('password');
            $table->longText('notes')->nullable();
            $table->string('image')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
