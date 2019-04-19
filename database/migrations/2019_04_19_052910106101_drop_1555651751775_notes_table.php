<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Drop1555651751775NotesTable extends Migration
{
    public function up()
    {
        Schema::dropIfExists('notes');
    }

    public function down()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('project_id')->nullable();
            $table->foreign('project_id')->references('id')->on('projects');
            $table->longText('note_text')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
