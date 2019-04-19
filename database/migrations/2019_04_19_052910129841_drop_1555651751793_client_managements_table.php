<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Drop1555651751793ClientManagementsTable extends Migration
{
    public function up()
    {
        Schema::dropIfExists('client_managements');
    }

    public function down()
    {
        Schema::create('client_managements', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });
    }
}
