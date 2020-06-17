<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/

Route::middleware('admin')->group(function () {

    Route::get('/','DashboardController@index');
    Route::get('profile','AdminProfile@index')->name('admin.profile');


    //////////// AJAX REQUEST HANDLE ROUTES ////////////////////
    Route::get('get-designation', 'AjaxController@designation');
    Route::get('/check-email', 'AjaxController@checkEmail');
    Route::get('/check-id', 'AjaxController@checkId');
    //----------------------------------------------------------//

    /////////////////// ALL RESOURECE ROUTES /////////////////////
    Route::resource('users','UserController');

    // SYSTEM
    Route::resource('departments','DepartmentController');
    Route::resource('countries','CountryController');

    // ATTENDANCE
    Route::resource('attendance', 'AttendanceController');

    // SALARIY
    Route::resource('salaries','SalaryController');
    Route::resource('payment', 'PaymentController');

    // EVENTS
    Route::resource('events', 'EventController');

    // TASK
    Route::resource('task','TaskController');

    // LEAVE APLICATION
    Route::resource('leave_types','LeaveTypeController');
    Route::resource('leave','LeaveController');

    // AWARD
    Route::resource('award_categories','AwardCategoryController');

    // NOTICE
    Route::resource('notice','NoticeBoardController');

    //-------------------------------------------------------------//

});
