<?php

use App\Http\Controllers\firstappcontroller;
use App\Http\Controllers\formcontroller;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\CrudAppController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/okkk',[firstappcontroller::class,'user']);
Route::get('/okk',[firstappcontroller::class,'hello']);
Route::get ('/name',[firstappcontroller::class,'welcome']);
Route::get('/about',[firstappcontroller::class,'second']);
Route::get('/admin',[firstappcontroller::class,'wait']);

Route::get('/form', [formcontroller::class, 'showform']);  // ⬅️ GET route to show the form
Route::post('/form', [formcontroller::class, 'adduser']);   // ⬅️ POST route to submit the form
Route::view('/adduser','new-form');
Route::prefix('admin')->group(function(){
Route::get('/dashboard',[admincontroller::class,'home'])->name('okkji');
});
Route::get('/form', [CrudAppController::class, 'create']);
Route::post('/form', [CrudAppController::class, 'store'])->name('form.submit');

Route::get('/employee.create',[EmployeeController::class,'create'])->name('employee.create');
Route::post('/employee.create',[EmployeeController::class,'store'])->name('employee.create');
Route::get('/employee.dashboard',[EmployeeController::class,'dashboard'])->name('employee.dashboard');
Route::get('/employee/edit/{id}', [EmployeeController::class, 'edit'])->name('employee.edit');
Route::put('/employee/update/{id}', [EmployeeController::class, 'update'])->name('employee.update');
Route::get('/employee/destroy/{id}', [EmployeeController::class, 'destroy'])->name('employee.delete');



