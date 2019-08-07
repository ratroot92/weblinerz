<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employee_model extends Model
{




    Schema::create('employees', function($table)
{
    $table->bigInteger('e_id');
    $table->string('e_name');
    $table->string('e_email');
    $table->string('e_contract');
    $table->date('from_date');
    $table->date('to_date');
    $table->bigInteger('e_salary');

});

}
