<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string("1_team");
            $table->string("slug_1_team");
            $table->string("2_team");
            $table->string("slug_2_team");
            $table->integer("scores_1")->default(0);
            $table->integer("scores_2")->default(0);
            $table->string("place")->nullable();
            $table->date("date_of_game");
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
        Schema::dropIfExists('games');
    }
};
