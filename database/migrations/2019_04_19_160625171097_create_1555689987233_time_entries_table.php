<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create1555689987233TimeEntriesTable extends Migration
{
    public function up()
    {
        Schema::create('time_entries', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('work_type_id')->nullable();
            $table->foreign('work_type_id')->references('id')->on('time_work_types');
            $table->unsignedInteger('project_id')->nullable();
            $table->foreign('project_id')->references('id')->on('time_projects');
            $table->datetime('start_time')->nullable();
            $table->datetime('end_time')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('time_entries');
    }
}
