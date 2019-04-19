<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Drop1555651751806ClientsTable extends Migration
{
    public function up()
    {
        Schema::dropIfExists('clients');
    }

    public function down()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('company')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('website')->nullable();
            $table->string('skype')->nullable();
            $table->string('country')->nullable();
            $table->unsignedInteger('status_id')->nullable();
            $table->foreign('status_id')->references('id')->on('client_statuses');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
