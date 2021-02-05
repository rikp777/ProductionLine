<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInterruptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interruptions', function (Blueprint $table) {
            // Keys
            $table->uuid('id')->primary();

            // Data
            $table->string('start_time');
            $table->string('end_time');

            // Meta
            $table->timestamps();
            $table->softDeletes();

            // Relationships
            // Relation to production_tickets table
            $table->uuid('production_ticket_id');
            $table->foreign('production_ticket_id')->references('id')->on('production_tickets');

            // Relation to interruption_reasons table
            $table->uuid('interruption_reason_id');
            $table->foreign('interruption_reason_id')->references('id')->on('interruption_reasons');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interruptions');
    }
}
