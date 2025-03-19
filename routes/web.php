<?php

use App\Http\Controllers\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Forms;
use App\Http\Controllers\FormController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\AdmissionController;

Route::get('/',[FormController::class,'home'])->name('home');
Route::post('/save-student',[FormController::class,'store']);
Route::get('/edit-student/{id}',[FormController::class,'edit'])->name('edit.student');
Route::put('/edit-student/{id}', [FormController::class, 'update'])->name('update.student');
Route::delete('/delete-student/{id}',[FormController::class,'delete'])->name('delete.student');


//Courses
Route::get('/course',[CourseController::class,'index']);
Route::get('/add-course',[CourseCOntroller::class,'create']);
Route::post('/save-course',[CourseController::class,'store']);
Route::get('/edit-course/{id}',[CourseController::class,'edit'])->name('edit.course');
Route::patch('/edit-course/{id}', [CourseController::class, 'update'])->name('update.course');
Route::delete('/delete-course/{id}',[CourseController::class,'delete'])->name('delete.course');

//Admissions
Route::get('/admission',[AdmissionController::class,'index'])->name('admission.index');
Route::get('/add-student',[AdmissionController::class,'add']);
Route::post('/save-student',[AdmissionController::class,'store'])->name('store.student');
Route::get('/edit-student/{id}',[AdmissionController::class,'edit'])->name('edit.student');
Route::patch('/edit-student/{id}', [AdmissionController::class, 'update'])->name('update.student');
Route::delete('/delete-student/{id}',[AdmissionController::class,'delete'])->name('delete.student');