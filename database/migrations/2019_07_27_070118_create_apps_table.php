<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('category_id')->unsigned();
//            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->char('title' , 50);
            $table->char('size' , 50);
            $table->integer('rate');
            $table->char('teamName' , 30);
            $table->char('type' , 30);
            $table->integer('downloadCount');
            $table->integer('commentCount');
            $table->char('imageSrc' , 200);
            $table->char('imagesSrc' , 255);
            $table->char('downloadLink' , 200);
            $table->char('version' , 15);
            $table->text('news');
            $table->text('description');
            $table->char('email' , 50);
            $table->char('mobile' , 15);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apps');
    }
}
