<?php
use App\Http\Controllers\employee_login_controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/





Route::get('/', function () {
    return view('home');
})->name('home');

//employee login from homepage 
Route::get('/employee_login', function () {
    return view('employee_home_view');
})->name('employee_login');




//cards navigation(hr_home)
Route::get('/hr_employee_home', function () {
    return view("hr/hr_home");
})->name('hr_employee_home');









  //open hr employee dashboard
Route::get('/employee_dashboard', function () {
    $employees = DB::select('select * from employees');
    return view('/employees/employee_dashboard',compact('employees'));
})->name('employee_dashboard');

Route::get('employee_table_view','employee_login_controller@employee_table_view')->name('employee_table_view');
Route::get('employee_table_edit/{id}','employee_login_controller@employee_table_edit')->name('employee_table_edit');
Route::get('employee_table_delete/{id}','employee_login_controller@employee_table_delete')->name('employee_table_delete');
Route::post('edit_employee_ajax','employee_login_controller@edit_employee_ajax')->name('edit_employee_ajax');
Route::post('/add_employee_ajax','employee_login_controller@add_employee_ajax')->name('add_employee_ajax');


//root for adding employee data by hr related employee dashboard

Route::post('/display_employee_ajax','employee_login_controller@display_employee_ajax')->name('display_employee_ajax');









//root for employee login to employee_dashboard
Route::post('/employee_dashboard_by_email','employee_login_controller@login')->name('employee_dashboard_by_email');









//root for employee login to employee_dashboard

//Route::post('/hr_dashboard','hr_login_controller@login')->name('login_as_hr');



//root for adding employee data by hr related employee dashboard
Route::post('/add_employee','employee_login_controller@add_employee');


//Route::get('hr/hr_dashboard', 'hr_login_controller@index')->name('admin');

Route::post('loginAdmin', 'hr_login_controller@loginAdmin')->name('loginAdmin');


//hr_home
Route::get('hr_home',function(){
return view('hr/hr_home');

});






Route::get('/hr/hr_employee_salaries','HrEmployeeSalariesController@index');

Route::get('/hr/hr_employee_contracts','HrEmployeeSalariesController@employeeContracts');

Route::get('/hr/hr_employees_add_contracts','HrEmployeeSalariesController@addEmpolyeesContracts');


//admin middleware and controller routes 


Route::post('/hr/add_employee_salaries','HrEmployeeSalariesController@addEmployeesSalaries');

Route::get('getsalary','HrEmployeeSalariesController@getSalary');

Route::match(['get','post'],'/hr/hr_employee_salaries/edit_employeesalary/{id}','HrEmployeeSalariesController@editHrEmployeeSalaries');

Route::match(['get','post'],'/hr/hr_employee_salaries/delete_employeesalary/{id}','HrEmployeeSalariesController@deleteHrEmployeeSalaries');

Route::get('/hr/hr_employee_contracts','HrEmployeeSalariesController@employeeContracts');



Route::get('/adminLogout', 'Admin\LoginController@logout')->name('adminLogout');
Route::get('/showLoginForm', 'Admin\LoginController@showLoginForm')->name('showLoginForm');
// Route::post('/loginAdmin', 'Admin\LoginController@loginAdmin')->name('loginAdmin');
Route::get('/registerAdmin', 'Admin\LoginController@registerAdmin')->name('registerAdmin');

Route::get('/home', 'HomeController@index')->name('home');
//route hr_dasboard -- direct root
Route::get('/hr/hr_dashboard',function(){
return view('hr/hr_dashboard');
})->name('hr_dashboard');