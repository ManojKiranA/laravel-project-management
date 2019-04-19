<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Drop1555651751241ClientReportsTable extends Migration
{
    public function up()
    {
        Schema::dropIfExists('client_reports');
    }

    public function down()
    {
        Schema::create('client_reports', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
