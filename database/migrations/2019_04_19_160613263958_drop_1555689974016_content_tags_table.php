<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Drop1555689974016ContentTagsTable extends Migration
{
    public function up()
    {
        Schema::dropIfExists('content_tags');
    }

    public function down()
    {
        Schema::create('content_tags', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
