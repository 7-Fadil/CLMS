<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BookOverDueController;
use App\Http\Controllers\BorroweBookController;
use App\Http\Controllers\SearchCatalogController;
use App\Http\Controllers\StudentProfileController;

use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\BookReservationController;
use App\Http\Controllers\YearRegistrationController;

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
        Route::get('/session', 'getSession')->name('getSession');
        Route::post('/create/curriculum','storeCurriculum')->name('create.curriculum');
        Route::put('/edit/curriculum/{curriculum:uuid}', 'editCurriculum')->name('edit.curriculum');

        /* student route started */
        Route::get('/student','viewStudent')->name('view.student');
        Route::post('/create/student','store')->name('save.student');
        /* student route ended */

        /** Profile routes */
        Route::get('/profile', 'profile')->name('profile');
        /** profile route ended */

        /** faculty route */
        Route::get('/faculty', 'faculty')->name('faculty');
        Route::post('/faculty/save', 'saveFaculty')->name('save.faculty');

        /** library card route */
        Route::get('/create/library/card', 'libraryCard')->name('library.card');

        Route::controller(BookOverDueController::class)->group(function()
        {
            Route::get('/book/overdue/', 'booksOverdue')->name('books.overDue');
        });

        Route::controller(BorroweBookController::class)->group(function()
        {
            Route::get('/borrowing/books', 'borrowedBooks')->name('borrowing.books');
            Route::post('/borrowe/book', 'store')->name('borrowe.book');
        });
        /* Main route ended */
});

    /**Book main route */
    Route::controller(BooksController::class)->middleware('admin')->group(function(){

        /** Books Route */
        Route::get('/create/book', 'index')->name('create.book');
        Route::post('/books', 'store')->name('save.books');
        /** Books Route ended */

        /** Book Category Route */
        Route::get('/book/category', 'bookCategory')->name('book.category');
        Route::post('/book/category', 'bookCategoryPost')->name('save.bookCategory');
        /** Book category route ended */

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
        Route::get('/dashboard', 'dashboard')->name('student.dashboard');
        Route::get('/login', 'view')->name('student.login');
        Route::post('/login', 'login')->name('login');
        Route::get('/logout', 'logout')->name('student.logout');
        Route::post('/create/student', 'createStudent')->name('create.student');
    });

    Route::controller(StudentProfileController::class)->middleware('student')->group(function(){
        Route::get('/profile', 'studentProfile')->name('student.profile');
        Route::post('/profile', 'storeStudentProfile')->name('save.studentProfile');
        Route::get('/faculty_has_department/{facultyUuid}', 'getDepartment');
    });

    Route::controller(SearchCatalogController::class)->group(function(){
        Route::get('/search/catalog/', 'create')->middleware('isStudentProfileExist')->name('search.catalog');
        Route::get('/book/download/{id}', 'download')->middleware('isStudentProfileExist')->name('download.book');
    });

    Route::controller(BookOverDueController::class)->group(function(){
        Route::get('/book/overdue', 'create')->middleware('isStudentProfileExist')->name('book.overdue');
    });

    Route::controller(BorroweBookController::class)->group(function()
    {
        Route::get('/borrow/book', 'create')->middleware('isStudentProfileExist')->name('borrow.book');
        Route::post('/borrow/book', 'store')->name('save.borrow');
    });

    Route::controller(BookReservationController::class)->group(function()
    {
        Route::get('/book/reservation', 'create')->middleware('isStudentProfileExist')->name('book.reservation');
        Route::post('/book/reserve', 'store')->name('store.book.reservation');
    });
});
/**Student route ended */


require __DIR__.'/auth.php';
