<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Drop1555651964399ClientManagementSettingsTable extends Migration
{
    public function up()
    {
        Schema::dropIfExists('client_management_settings');
    }

    public function down()
    {
        Schema::create('client_management_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });
    }
}
