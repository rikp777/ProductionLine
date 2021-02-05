<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            // Keys
            $table->uuid('id')->primary();

            // Data
            $table->string('excel_code')->unique();
            $table->string('inset_gram');
            $table->integer('inset_limit');
            $table->integer('pallet_limit');
            $table->string('origin');

            // Meta
            $table->timestamps();
            $table->softDeletes();

            // Relationships
            // Relation to pallet_types table
            $table->uuid('pallet_type_id');
            $table->foreign('pallet_type_id')->references('id')->on('pallet_types')->onDelete('cascade');

            // Relation to casks table
            $table->uuid('cask_id');
            $table->foreign('cask_id')->references('id')->on('casks')->onDelete('cascade');

            // Relation to insets table
            $table->uuid('inset_id');
            $table->foreign('inset_id')->references('id')->on('insets')->onDelete('cascade');

            // Relation to article_groups table
            $table->uuid('article_group_id');
            $table->foreign('article_group_id')->references('id')->on('article_groups')->onDelete('cascade');

            // Relation sort_types table
            $table->uuid('sort_type_id');
            $table->foreign('sort_type_id')->references('id')->on('sort_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article');
    }
}
