<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateSofaTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Model::unguard();
        Schema::create('sofa',function(Blueprint $table){
            $table->increments("id");
            $table->string("guarantee")->nullable();
            $table->integer("country_id")->nullable();
            $table->string("code");
            $table->string("mechanism")->nullable();
            $table->string("material");
            $table->string("frame_material");
            $table->string("description")->nullable();
            $table->integer("width");
            $table->integer("heigth");
            $table->integer("depth");
            $table->integer("length_b");
            $table->integer("width_b");
            $table->integer("bought")->nullable();
            $table->string("title")->nullable();
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
        Schema::drop('sofa');
    }

}