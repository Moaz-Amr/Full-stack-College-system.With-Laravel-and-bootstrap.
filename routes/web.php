<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Models\Department;

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/visitor',function(){
    return view('website.visitor');
})->name('visitor');
Route::get('/contact',function(){
    return view('website.contact');
})->name('contact');
Route::get('/ShowStudentData',function(){
    return view('website.ShowStudentData');
})->name('ShowStudentData');

Route:: controller(AuthController::class)->group(function(){
    Route:: get('/login','login' )->name('auth.login');
    Route:: get('/register','register' )->name('auth.register');
    Route:: post('/handleRegister','handleRegister' )->name('auth.handleRegister');
    Route:: post('/handleLogin','handleLogin' )->name('auth.handleLogin');
    Route:: get('/logout','logout' )->name('auth.logout');
    Route:: post('/handleStudentLogin','handleStudentLogin' )->name('auth.handleStudentLogin');

});
Route::middleware('IsLogin')->prefix('/admin')->name('admin.')->group(function(){
    Route::get('/',HomeController::class)->name('index');
    Route::controller(StudentController::class)->name('students.')->group(function(){
        // Route::get('/students','index')->name('index');
        // Route::get('/students/create','create')->name('create');
        // Route::post('/students','store')->name('store');
        // Route::get('/students/{id}/edit','edit')->name('edit');
        Route::put('/students/{id}','update')->name('update');
        Route::get('/students/archive','archive')->name('archive');
        // Route::get('/students/{id}','show')->name('show');
        // Route::delete('/students/{id}','destroy')->name('destroy');
        Route::delete('/students/{id}/archive','destroyArchive')->name('destroyArchive');
        Route::post('/students/{id}/restore','restore')->name('restore');
        Route::post('/students/addCourses/{id}','addCourses')->name('addCourses');



    });
    Route::resource('/students',StudentController::class)->except('update','show');
    Route::get('/department/{id}',[DepartmentController::class,'show'])->name('department.show');
    Route::get('/department',[DepartmentController::class,'department'])->name('department');
    
});

Route::get('/admin/students/{id}',[StudentController::class,'show'])->name('admin.students.show');

// Route::get('/test1',[TestController::class,'test1'])->name('test.test1');

// Route::get('/test2/{id}/{name?}',[TestController::class,'test2'])->name('test.test2')->where(['id'=>'[0-9]+','name'=>'[a-zA-Z]+']);

