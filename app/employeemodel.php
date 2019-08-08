<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employeemodel extends Model
{

    Schema::create('employees', function($table)
{
    $table->increments('id');
});
   
}
