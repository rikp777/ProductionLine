<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePalletLabelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pallet_labels', function (Blueprint $table) {
            // Keys
            $table->uuid('id')->primary();
            $table->integer("general_id")->unique();
            $table->integer('pallet_label_farmer_id');

            // Data
            $table->date('crop_date');
            $table->integer('article_amount');
            $table->string('note')->nullable();
            $table->string('made_by');

            $table->integer('cell_number')->nullable();
            $table->string('cell_description')->nullable();
            $table->integer('harvest_cycle');
            $table->integer('harvest_cycle_day');

            // Meta
            $table->timestamps();
            $table->softDeletes();

            // Relationships
            // Relation to cells table
            $table->uuid('cell_id');
            $table->foreign('cell_id')->references('id')->on('cells');

            // Relation to farmers table
            $table->uuid('farmer_id');
            $table->foreign('farmer_id')->references('id')->on('farmers');

            // Relation to pallet_types table
            $table->uuid('pallet_type_id');
            $table->foreign('pallet_type_id')->references('id')->on('pallet_types');

            // Relation to articles table
            $table->uuid('article_id');
            $table->foreign('article_id')->references('id')->on('articles');
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
        Schema::dropIfExists('pallet_labels');
    }
}
