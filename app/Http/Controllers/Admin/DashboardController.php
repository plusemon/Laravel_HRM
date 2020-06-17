<?php

namespace App\Http\Controllers\Admin;

use App\Department;
use App\Http\Controllers\Controller;
use App\Leave;
use App\Task;
use App\User;

class DashboardController extends Controller
{
    public function index () {
        $count = [];
        $count['users'] = User::count();
        $count['departments'] = Department::count();
        $count['tasks'] = Task::count();
        $count['requests'] = Leave::count();

        return view('admin.index', compact('count'));
    }
}
