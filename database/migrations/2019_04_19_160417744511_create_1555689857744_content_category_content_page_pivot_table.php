<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create1555689857744ContentCategoryContentPagePivotTable extends Migration
{
    public function up()
    {
        Schema::create('content_category_content_page', function (Blueprint $table) {
            $table->unsignedInteger('content_page_id');
            $table->foreign('content_page_id')->references('id')->on('content_pages');
            $table->unsignedInteger('content_category_id');
            $table->foreign('content_category_id')->references('id')->on('content_categories');
        });
    }

    public function down()
    {
        Schema::dropIfExists('content_category_content_page');
    }
}
