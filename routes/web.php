<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/forget', function () {
    return view('forget');
});
Route::get('/check', function () {
    return view('check');
});

/*Admin Section Route*/
Route::get('/admin', function () {
    return view('admin.index');
});
Route::get('/admin-profile', function () {
    return view('admin.profile.profile');
});




/*-----Salary Controller Route-----*/
Route::get('/admin-salary','SalaryController@index')->name('salaries');
Route::POST('/admin-salary-insert','SalaryController@store');
Route::POST('/admin-salary-update','SalaryController@update');
Route::POST('/admin-salary-delete','SalaryController@destroy');

/*-----Department Controller Route-----*/
Route::get('/admin-system-department','DepartmentController@index')->name('departments');
Route::POST('/admin-system-department-insert','DepartmentController@store');
Route::POST('/admin-system-department-update','DepartmentController@update');
Route::POST('/admin-system-department-delete','DepartmentController@destroy');

/*-----Country Controller Route-----*/
Route::get('/admin-system-country','CountryController@index')->name('countries');
Route::POST('/admin-system-country-insert','CountryController@store');
Route::POST('/admin-system-country-update','CountryController@update');
Route::POST('/admin-system-country-delete','CountryController@destroy');

/*-----Award Categories Controller Route-----*/
Route::get('/admin-award-categories','AwardCategoryController@index')->name('award_categories');
Route::POST('/admin-award-categories-insert','AwardCategoryController@store');
Route::POST('/admin-award-categories-update','AwardCategoryController@update');
Route::POST('/admin-award-categories-delete','AwardCategoryController@destroy');


/*-----Notice Boards Controller Route-----*/
Route::get('/admin-notice-index','NoticeBoardController@index')->name('notice_boards');
Route::get('/admin-notice-add-notice','NoticeBoardController@add_notice_view');
Route::POST('/admin-notice-insert','NoticeBoardController@store');
Route::POST('/admin-notice-update','NoticeBoardController@update');
Route::POST('/admin-notice-delete','NoticeBoardController@destroy');



// ---------------- User Crud Routes -----------------//
Route::get('/admin-user-view','UserController@index');
Route::get('/admin-add-user','UserController@create');
Route::post('/admin-add-user','UserController@store');


Route::get('/admin-edit-user', function () {
    return view('admin.user.edit_user');
});
Route::get('/admin-user-view-user_profile', function () {
    return view('admin.user.view_user_profile');
});
Route::get('/admin-award-index', function () {
    return view('admin.award.index');
});

Route::get('/admin-award-add-awards', function () {
    return view('admin.award.add_awards');
});
Route::get('/admin-award-view-awards-profile', function () {
    return view('admin.award.view_awards_profile');
});
Route::get('/admin-leave-types', function () {
    return view('admin.leave.leave_types');
});
Route::get('/admin-leave-view', function () {
    return view('admin.leave.view_leave_applications');
});
Route::get('/admin-task-index', function () {
    return view('admin.task.index');
});
Route::get('/admin-task-add-task', function () {
    return view('admin.task.add_task');
});

Route::get('/manager', function () {
    return view('manager.index');
});



/*Employees Section Route*/
Route::get('/employee', function () {
    return view('employee.index');
});
Route::get('/employee-award-index', function () {
    return view('employee.award.index');
});


/*PDF Generate Section Route*/
Route::get('/certificate', function () {
    return view('pdf.certificate');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



// AJAX REQUEST HANDLE ROUTES
Route::get('get-designation', 'AjaxController@designation');
Route::get('/check-email', 'AjaxController@checkEmail');
Route::get('/check-id', 'AjaxController@checkId');
