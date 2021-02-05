<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleFarmerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_farmer', function (Blueprint $table) {
            // Keys
            // Both Primary
            $table->primary(['article_id', 'farmer_id']);

            // Meta
            $table->timestamps();

            // Relation to articles Table
            $table->uuid('article_id');
            $table->foreign('article_id')->references('id')->on('articles');

            // Relation to farmers Table
            $table->uuid('farmer_id');
            $table->foreign('farmer_id')->references('id')->on('farmers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('article_farmer');
    }
}
