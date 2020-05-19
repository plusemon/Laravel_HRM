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

// Route::get('/', function(){
//     return view('welcome');
// });

Route::get('/','Admin\DashboardController@index');


/*Manager Section Route*/
Route::get('/manager', function () {
    return view('manager.index');
});
/*Manager Section Route*/
Route::get('/manager-profile', function () {
    return view('manager.profile.index');
});
Route::get('/manager-attandence', function () {
    return view('manager.attandence.index');
});
Route::get('/manager-add_attandence', function () {
    return view('manager.attandence.add_attandence');
});
Route::get('/manager-events', function () {
    return view('manager.events.index');
});
Route::get('/manager-task', function () {
    return view('manager.task.index');
});
Route::get('/manager-award', function () {
    return view('manager.award.index');
});
Route::get('/manager-notice', function () {
    return view('manager.notice.index');
});

/*Employees Section Route*/
Route::get('/employee', function () {
    return view('employee.index');
});
Route::get('/employee-profile', function () {
    return view('employee.profile.index');
});
Route::get('/employee-leave', function () {
    return view('employee.request_leave.index');
});
Route::get('/employee-attandence', function () {
    return view('employee.attandence.index');
});
Route::get('/employee-events', function () {
    return view('employee.events.index');
});
Route::get('/employee-task', function () {
    return view('employee.task.index');
});
Route::get('/employee-award-index', function () {
    return view('employee.award.index');
});
Route::get('/employee-notice', function () {
    return view('employee.notice.index');
});

/*PDF Generate Section Route*/
Route::get('/certificate', function () {
    return view('pdf.certificate');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
