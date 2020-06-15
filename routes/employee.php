<?php



/*Employees Section Route*/
Route::get('/', function () {
    return view('employee.index');
});
Route::get('profile', function () {
    return view('employee.profile.index');
});

Route::resource('leave','LeaveController');

Route::get('attandence', function () {
    return view('employee.attandence.index');
});
Route::get('events', function () {
    return view('employee.events.index');
});
Route::get('task', function () {
    return view('employee.task.index');
});
Route::get('index', function () {
    return view('employee.award.index');
});
Route::get('notice', function () {
    return view('employee.notice.index');
});