<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories_menus', function (Blueprint $table) {
            $table->id();
            $table->string("cat_nav_title")->nullable();
            $table->string("cat_nav_url")->nullable();
            $table->integer("hasChild")->nullable();
            $table->integer("father_id")->nullable();
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
        Schema::dropIfExists('categories_menus');
    }
};
