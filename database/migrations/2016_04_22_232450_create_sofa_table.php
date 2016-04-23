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
            $table->enum("country_id", ["2"])->nullable();
            $table->string("code");
            $table->string("mechanism")->nullable();
            $table->string("material");
            $table->string("frame_material");
            $table->string("description")->nullable();
            $table->enum("width", ["4"]);
            $table->enum("heigth", ["4"]);
            $table->enum("depth", ["4"]);
            $table->enum("length_b", ["4"]);
            $table->enum("width_b", ["4"]);
            $table->enum("bought", ["3"])->nullable();
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