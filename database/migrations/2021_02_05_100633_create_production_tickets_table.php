<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductionTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('production_tickets', function (Blueprint $table) {
            // Keys
            $table->uuid('id')->primary();

            // Data
            $table->string('start_time');
            $table->string('end_time');

            // Meta
            $table->timestamps();
            $table->softDeletes();

            // Relationships
            // Relation to pallet_labels table
            $table->uuid('pallet_label_id');
            $table->foreign('pallet_label_id')->references('id')->on('pallet_labels');

            // Relation to production_lines table
            $table->uuid('production_line_id');
            $table->foreign('production_line_id')->references('id')->on('production_lines');
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
        Schema::dropIfExists('production_tickets');
    }
}
