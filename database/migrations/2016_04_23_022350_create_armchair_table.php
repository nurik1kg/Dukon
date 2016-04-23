<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateArmchairTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Model::unguard();
        Schema::create('armchair',function(Blueprint $table){
            $table->increments("id");
            $table->string("title")->nullable();
            $table->string("code");
            $table->integer("country")->nullable();
            $table->string("material_facade")->nullable();
            $table->string("frame_material")->nullable();
            $table->string("color")->nullable();
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
        Schema::drop('armchair');
    }

}