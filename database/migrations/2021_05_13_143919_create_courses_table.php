<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('course_title');
            $table->longText('course_description');
            $table->foreignId('cat_id')->constrained('categories')->nullable();
            $table->foreignId('sub_cat_id')->constrained('sub_categories')->nullable();
            $table->string('price');
            $table->string('cover_image');
            $table->string('promo_video');
            $table->string('language');
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
        Schema::dropIfExists('courses');
    }
}
