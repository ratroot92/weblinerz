<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeesSalaryDrafts extends Model
{
    public $table = 'employees_salary_drafts';

    public function employee()
    {
        return $this->belongsTo('App\employee');
    }

//     public function employee_files()
//     {
//       return $this->belongsTo('App\EmployeeUpload');
//     }
//    public function employee_files()
//    {
//        return $this->belongsTo('App\EmployeeUpload', 'employee_id', 'id');
//    }
}
