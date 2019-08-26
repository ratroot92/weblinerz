<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('reference_id')->unique();
            $table->bigInteger('name')->nullable();
            $table->string('employee_designation')->nullable();
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
            $table->mediumText('description')->nullable();
            $table->string('email')->nullable();
            $table->bigInteger('mobile')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contracts');
    }
}
