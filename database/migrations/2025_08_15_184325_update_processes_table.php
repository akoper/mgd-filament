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
        Schema::table('processes', function (Blueprint $table) {
            $table->string('name', 150);
            $table->unsignedBigInteger('org_id')->nullable();
            $table->integer('creator_id')->nullable();
            $table->string('description', 500)->nullable();
            $table->unsignedBigInteger('project_id')->nullable();
            $table->unsignedBigInteger('metric_id')->nullable();
            $table->integer('length')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('processes', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->dropColumn('org_id');
            $table->dropColumn('creator_id');
            $table->dropColumn('description');
            $table->dropColumn('project_id');
            $table->dropColumn('metric_id');
            $table->dropColumn('length');
        });
    }
};
