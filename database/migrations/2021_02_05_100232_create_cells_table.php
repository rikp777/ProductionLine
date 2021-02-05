<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCellsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cells', function (Blueprint $table) {
            // Keys
            $table->uuid('id')->primary();

            // Data
            $table->integer("number")->nullable();
            $table->string("description")->nullable();

            // Meta
            $table->timestamps();
            $table->softDeletes();

            // Relationships
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
        Schema::dropIfExists('cells');
    }
}
