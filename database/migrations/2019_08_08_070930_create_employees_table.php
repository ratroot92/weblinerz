<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigInteger('e_id');
            $table->string('e_name')->nullable();;
            $table->string('e_email')->nullable();
            $table->string('e_password')->nullable();;
            $table->bigInteger('e_mobile')->nullable();;
            $table->bigInteger('e_salary')->nullable();;
            $table->string('from_date')->nullable();;
            $table->string('to_date')->nullable();;
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
        Schema::dropIfExists('employees');
    }
}
