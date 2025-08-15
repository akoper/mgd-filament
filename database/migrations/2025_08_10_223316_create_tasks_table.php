<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->text('description')->nullable();
            $table->dateTime('created_date')->nullable();
            $table->dateTime('start_date')->nullable();
            $table->dateTime('end_date')->nullable();
            $table->dateTime('closed_date')->nullable();
            $table->integer('recipient_id')->nullable();
            $table->integer('creator_id')->nullable();
            $table->integer('project_id')->nullable();
            $table->integer('org_id')->nullable();
            $table->integer('metric_id')->nullable();
            $table->string('status')->nullable();
            $table->string('public')->nullable();
            $table->string('street', 60)->nullable();
            $table->integer('location_id')->nullable();
            $table->integer('city_id')->nullable();
            $table->integer('state_id')->nullable();
            $table->integer('country_id')->nullable();
            $table->float('latitude', 19, 14)->nullable();
            $table->float('longitude', 19, 14)->nullable();
            $table->smallInteger('cause_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
