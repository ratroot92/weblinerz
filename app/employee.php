<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $primaryKey = 'id';
    public $incrementing = false;
	
	public function employee_files()
    {
      return $this->hasMany('App\EmployeeUpload', 'employee_id', 'id');
    }
     
}
