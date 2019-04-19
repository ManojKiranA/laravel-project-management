<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create1555689857754ContentPageContentTagPivotTable extends Migration
{
    public function up()
    {
        Schema::create('content_page_content_tag', function (Blueprint $table) {
            $table->unsignedInteger('content_page_id');
            $table->foreign('content_page_id')->references('id')->on('content_pages');
            $table->unsignedInteger('content_tag_id');
            $table->foreign('content_tag_id')->references('id')->on('content_tags');
        });
    }

    public function down()
    {
        Schema::dropIfExists('content_page_content_tag');
    }
}
