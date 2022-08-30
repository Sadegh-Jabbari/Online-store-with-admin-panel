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
        Schema::create('navs', function (Blueprint $table) {
            $table->id();
            $table->string("main_nav_url")->nullable();
            $table->string("main_nav_name")->nullable();
            $table->integer("hasMegaMenu")->nullable();
            $table->string("cat_nav_title")->nullable();
            $table->string("cat_nav_url")->nullable();
            $table->integer("hasChild")->nullable();
            $table->string("father_id")->nullable();
            $table->string("sub_nav_title")->nullable();
            $table->string("sub_nav_url")->nullable();
            $table->integer("main_branch")->nullable();
//            $table->string("nav_url");
//            $table->string("nav_name");
//            $table->string("nav_title");
//            $table->string("nav_uri");
//            $table->string("hasChild");
//            $table->string("father_id");
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
        Schema::dropIfExists('navs');
    }
};
