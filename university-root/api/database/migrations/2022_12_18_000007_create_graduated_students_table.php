<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('graduated_students', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->date('graduation_date');
            $table->unsignedDecimal('final_score');
            $table->float('total_paid');
            $table->float('total_cost');
            $table->bigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('graduated_students');
    }
};