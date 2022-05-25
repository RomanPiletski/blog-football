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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->text("text");
            $table->string("slug", 255);
            $table->foreignId("user_id")->constrained("users")->cascadeOnDelete();
            $table->foreignId("post_id")->constrained("posts")->cascadeOnDelete();
            $table->boolean("is_publish")->default(0);
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('comments');
    }
};
