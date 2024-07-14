<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\YearRegistrationController;

use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserManagementController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('fukashere/E-library', [HomeController::class, 'home'])->name('home');
/**Admin route started */
Route::prefix('fukashere/E-library/admin')->group(function() {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->middleware('admin')->name('admin.dashboard');
    Route::get('/login', [AdminController::class, 'loginForm'])->name('admin.login');
    Route::post('save', [AdminController::class, 'login'])->name('save.admin');
    Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');
    /* year route started */
    Route::get('/create/year', [YearRegistrationController::class, 'index'])->middleware('admin')->name('add.year');
    Route::post('/save/year', [YearRegistrationController::class, 'store'])->middleware('admin')->name('year.store');
    Route::put('/update/year/{yearRegistration:uuid}', [YearRegistrationController::class, 'update'])->middleware('admin')->name('update.year');
    Route::delete('/delete/year/{yearRegistration:uuid}', [YearRegistrationController::class, 'destroy'])->middleware('admin')->name('delete.year');
    /* year route ended */

    /* Main route stated */
    Route::controller(AdminController::class)->middleware('admin')->group(function(){
        Route::get('/create/department', 'viewDepartment')->name('create.department');
        Route::post('/create/department', 'storeDepartment')->name('save.department');
        Route::put('/edit/student/{department:uuid}', 'updateDepartment')->name('edit.department');
        Route::delete('/delete/department/{department:uuid}', 'deleteDepartment')->name('delete.department');

        /* Course of study route stated */
        Route::get('/create/courses', 'viewCourse')->name('create.courses');
        Route::post('/create/courses', 'storeCourseOfStudy')->name('save.courses');
        Route::put('/edit/couse-of-study/{courseOfStudy:uuid}', 'updateCourses')->name('update.courses');

        /**Curriculum routes started */
        Route::get('/create/curriculum', 'curriculum')->name('create.curriculum');
        Route::get('/course-of-study/{department_id}', 'getCourses')->name('department.getCourses');
        Route::post('/create/curriculum','storeCurriculum')->name('create.curriculum');
        Route::put('/edit/curriculum/{curriculum:uuid}', 'editCurriculum')->name('edit.curriculum');

        /* student route started */
        Route::get('/create/student','view')->name('create.student');
        Route::post('/create/student','store')->name('save.student');
        /* student route ended */

        /** Profile routes */
        Route::get('/profile', 'profile')->name('profile');
        /** profile route ended */

        /** library card route */
        Route::get('/create/library/card', 'libraryCard')->name('library.card');
    });
    /* Main route ended */
    Route::controller(UserManagementController::class)->middleware('admin')->group(function(){
        /** User management route started */
        Route::get('/user/management', 'index')->name('user-management');
        /** User management route ended */
    });
    /** Poject route */
    Route::controller(ProjectController::class)->middleware('admin')->group(function(){
        Route::get('/add/project', 'create')->name('project.create');
    });
    /** End project route */
});
/**Admin route ended */

/**Student route started */
Route::prefix('fukashere/E-library/student')->group(function(){
    Route::controller(StudentController::class)->group(function(){
        Route::get('/dashboard', 'dashboard')->middleware('student')->name('student.dashboard');
        Route::get('/login', 'view')->name('student.login');
        Route::post('/login', 'login')->name('login');
        Route::get('/logout', 'logout')->name('student.logout');
    });
});
/**Student route ended */


require __DIR__.'/auth.php';
