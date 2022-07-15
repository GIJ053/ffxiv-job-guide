<?php

use App\Models\Job;
use App\Models\Role;
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

Route::get('/', function () { //goes to the default webpage webpage and pass a collection of roles with
    return view('welcome', [  //their respective jobs
        'roles' => Role::with('jobs')->get()
    ]);
});

Route::get('job/{post:slug}', function (Job $job) {
    return view('job', [
        'job' => $job
    ]);
});

Route::get('role/{role:slug}', function (Role $role){
    return view('jobs', [
        'jobs' => $role->jobs
    ]);
});
