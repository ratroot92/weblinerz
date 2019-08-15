<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeUpload extends Model
{
   protected $fillable = ['file_id','employee_id', 'file_name', 'file_path'];
}
