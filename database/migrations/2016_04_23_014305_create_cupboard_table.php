<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateCupboardTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Model::unguard();
        Schema::create('cupboard',function(Blueprint $table){
            $table->increments("id");
            $table->string("title")->nullable();
            $table->string("guarantee")->nullable();
            $table->string("code");
            $table->string("color_facade");
            $table->string("material_fasade")->nullable();
            $table->string("frame_material")->nullable();
            $table->string("frame_color")->nullable();
            $table->integer("width");
            $table->integer("height");
            $table->integer("depth");
            $table->integer("bought")->nullable();
            $table->decimal("price", 15, 2);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cupboard');
    }

}