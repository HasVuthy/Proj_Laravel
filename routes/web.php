<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/employee', [EmployeeController::class , 'index'])->name('employee.index');
Route::get('/employee/create' ,[EmployeeController::Class ,'create'])->name('employee.create');
Route::post('/employee/store',[EmployeeController::class, 'store'])->name('employee.store');
// Route for Edit
Route::get('/employee/{employee}/edit',[EmployeeController::class , 'edit']) ->name('employee.edit');
// update logical
Route::put('/employee/{employee}/update',[EmployeeController::class ,'update']) ->name('employee.update');
// delete function
Route::delete('/employee/{employee}/destroy', [EmployeeController::class , 'destroy']) ->name('employee.destroy');