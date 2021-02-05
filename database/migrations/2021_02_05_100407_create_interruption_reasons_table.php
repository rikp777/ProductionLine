<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInterruptionReasonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interruption_reasons', function (Blueprint $table) {
            // Keys
            $table->uuid('id')->primary();

            // Data
            $table->string('name')->unique();
            $table->string('description');
            $table->boolean('stop_reason');

            // Meta
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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('interruption_reasons');
    }
}
