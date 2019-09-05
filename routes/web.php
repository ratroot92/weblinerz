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
//Auth::routes();
//routes under admin guard
Route::get('/hr/auth/login', function(){
    return view('hr/auth/login');
});


Route::post('loginAdmin', 'hr_login_controller@loginAdmin')->name('loginAdmin');

Route::group(['middleware' => 'admin'], function () {
    Route::get('/hrDashboard', 'RouteController_HR@returnHrDashboard'); //take me to hrdashboard



});

Route::get('hrHome', function () {
    return view('hr.Dashboard.hrDashboard');
})->name('hrHome');//take me to hr_dashboard






Route::post('/adminLogout', 'Admin\LoginController@logout');
Route::get('/showLoginForm', 'Admin\LoginController@showLoginForm')->name('showLoginForm');
// Route::post('/loginAdmin', 'Admin\LoginController@loginAdmin')->name('loginAdmin');
Route::get('/registerAdmin', 'Admin\LoginController@registerAdmin')->name('registerAdmin');



Route::get('/hrMaster','RouteController_HR@returnHrMaster');//take me to hrMaster tempelate

Route::get('/hrEmployeeHome','RouteController_HR@returnHrEmplyoyee');//take me to Employee dashboard of hr
Route::get('/hrEmployeeContract','RouteController_HR@returnHrEmplyoyeeContract');//take me to EmployeeContracts regarding HR Employees
Route::get('/hrEmployeeSalaries','RouteController_HR@returnHrEmployeeSalaries');//take me to EmployeeSalries regarding HR Employees
Route::get('/hrEmployeeComplaints','RouteController_HR@returnHrEmployeeComplaints');//take me to EmployeeComplaints regarding HR Employees
Route::get('/hrEmployeeAttendence','RouteController_HR@returnHrEmployeeAttendence');//take me to EmployeeSalries regarding HR Employees



//Contract page Routes
Route::get('/returnAddContractView','ContractController_HR@returnAddContractView');//calling html for adding contract in model
Route::get('/getCredentialsByName/{name}','ContractController_HR@getCredentialsByName'); //get credentials
Route::post('/insertContract', 'ContractController_HR@insertContract')->name('insertContract');
Route::get('/allContractsTable', 'ContractController_HR@allContractsTable')->name('allContractsTable');
Route::get('/editContractView/{id}', 'ContractController_HR@editContractView')->name('editContractView');
Route::post('/editContractSubmit/{id}', 'ContractController_HR@editContractSubmit')->name('editContractSubmit');
Route::get('/deleteContract/{id}','Contractcontroller_HR@deleteContract')->name('deleteContract');

//employeeemasterpage
Route::get('employeeMaster','RouteController_HR@returnemployeeMaster')->name('employeeMaster');
Route::get('employeeDashboard','RouteController_HR@returnemployeeDashboard')->name('employeeDashboard');
Route::get('clocklogin','clocl\clockController@returnclocklogin')->name('clocklogin');
Route::get('clocksignup','clock\clockController@returnclocksignup')->name('clocksignup');





Route::get('/', function () {
    return view('home');
})->name('home');

//employee login from homepage
Route::get('/employee_login', function () {
    return view('employees.employee_home_view');
})->name('employee_login');




// //cards navigation(hr_home)
// Route::get('/hr_employee_home', function () {
//     return view("hr/hr_home");
// })->name('hr_employee_home');









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
Route::get('/allEmployeePDF', 'employee_login_controller@allEmployeePDF')->name('allEmployeePDF');

//root for adding employee data by hr related employee dashboard

Route::post('/display_employee_ajax','employee_login_controller@display_employee_ajax')->name('display_employee_ajax');









//root for employee login to employee_dashboard
Route::post('/employee_dashboard_by_email','employee_login_controller@login')->name('employee_dashboard_by_email');









//root for employee login to employee_dashboard

//Route::post('/hr_dashboard','hr_login_controller@login')->name('login_as_hr');



//root for adding employee data by hr related employee dashboard
Route::post('/add_employee','employee_login_controller@add_employee');


//Route::get('hr/hr_dashboard', 'hr_login_controller@index')->name('admin');



//hr_home
Route::get('hr_home',function(){
return view('hr/hr_home');

});
//------------------------ Waqas Routes ----------------------------
// Salaries Routes

Route::get('/getsalary','HrEmployeeSalariesController@getSalary');

Route::get('/add_employee_salaries_create','HrEmployeeSalariesController@addEmployeesSalariesCreate');

Route::post('/add_employee_salaries','HrEmployeeSalariesController@addEmployeesSalaries');

Route::get('/editview/{id}','HrEmployeeSalariesController@editHrEmployeeSalaries');

Route::post('/hrEmployeeSalaries/update_employeesalary','HrEmployeeSalariesController@updateHrEmployeeSalaries');

Route::get('/hrEmployeeSalaries/{id}','HrEmployeeSalariesController@deleteHrEmployeeSalaries');
// Salaries months
Route::get('/getmonth','HrEmployeeSalariesController@getMonth');
// Salaries Cleared  
Route::get('/getsalariescleared','HrEmployeeSalariesController@getSalariesCleared');
// Salaries Pending
Route::get('/getsalariespending','HrEmployeeSalariesController@getSalariesPending');
// View Button Route
Route::get('/view-detail/{id}','HrEmployeeSalariesController@getViewDetails');

// Employees Documents Routes

Route::get('/employeedocuments','RouteController_HR@returnemployeeDocuments');

Route::get('/add_employee_documents_create','EmployeesDocumentsController@addEmployeesDocumentsCreate');

Route::post('/add_employee_documents','EmployeesDocumentsController@addEmployeesDocuments');

Route::get('/editview/{id}','EmployeesDocumentsController@editHrEmployeeDocuments');

Route::post('/employeedocuments/update_employeedocument','EmployeesDocumentsController@updateHrEmployeeDocuments');

Route::get('/employeedocuments/{id}','EmployeesDocumentsController@deleteHrEmployeeDocuments');

// Employees Reports Routes

Route::get('/employeereports','RouteController_HR@returnemployeeReports');

Route::get('/add_employee_reports_create','EmployeesReportsController@addEmployeesReportsCreate');

Route::post('/add_employee_reports','EmployeesReportsController@addEmployeesReports');

Route::get('/editview/{id}','EmployeesReportsController@editHrEmployeeReports');

Route::post('/employeereports/update_employeereport','EmployeesReportsController@updateHrEmployeeReports');

Route::get('/employeereports/{id}','EmployeesReportsController@deleteHrEmployeeReports');


//Route::get('/home', 'HomeController@index')->name('home');
//route hr_dasboard -- direct root
Route::get('/hr/hr_dashboard',function(){
return view('hr/hr_dashboard');
})->name('hr_dashboard');
