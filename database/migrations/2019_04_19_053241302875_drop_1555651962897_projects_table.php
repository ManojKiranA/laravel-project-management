<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Drop1555651962897ProjectsTable extends Migration
{
    public function up()
    {
        Schema::dropIfExists('projects');
    }

    public function down()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->unsignedInteger('client_id')->nullable();
            $table->foreign('client_id')->references('id')->on('clients');
            $table->longText('description')->nullable();
            $table->date('start_date')->nullable();
            $table->float('budget', 15, 2)->nullable();
            $table->unsignedInteger('status_id')->nullable();
            $table->foreign('status_id')->references('id')->on('project_statuses');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
