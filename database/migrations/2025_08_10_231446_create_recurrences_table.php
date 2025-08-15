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
        Schema::create('recurrences', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('org_id')->nullable();
            $table->unsignedBigInteger('project_id')->nullable();
            $table->unsignedBigInteger('temp_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('task_id')->nullable();
            $table->string('type', 7)->nullable();
            $table->string('recur_period', 12)->nullable();
            $table->date('end_date')->nullable();
            $table->string('Sunday', 12)->nullable();
            $table->string('Monday', 12)->nullable();
            $table->string('Tuesday', 12)->nullable();
            $table->string('Wednesday', 12)->nullable();
            $table->string('Thursday', 12)->nullable();
            $table->string('Friday', 12)->nullable();
            $table->string('Saturday', 12)->nullable();
            $table->string('monthly_days', 20)->nullable();
            $table->integer('yearly_day')->nullable();
            $table->string('yearly_month', 20)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recurrences');
    }
};
