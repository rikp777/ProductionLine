<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFarmersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmers', function (Blueprint $table) {
            // Keys
            $table->uuid('id')->primary();

            // Data
            $table->string('name')->unique();
            $table->string('street');
            $table->string('house_number');
            $table->string('place');
            $table->string('zip_code');
            $table->string('country');
            $table->string('province');
            $table->string('email')->unique();
            $table->string('phone')->nullable()->unique();
            $table->string('fax')->nullable()->unique();
            $table->string('kvk')->unique();

            // Meta
            $table->timestamps();
            $table->softDeletes();

            // Relationships
            $table->uuid('contact_user_id')->nullable();
            $table->foreign('contact_user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('farmers');
    }
}
