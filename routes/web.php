<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\SeminarController;
use App\Http\Controllers\AdminBlogController;
use App\Http\Controllers\AdmissionsController;
use App\Http\Controllers\AdminTeamController;
use App\Http\Controllers\AdminEventController;
use App\Http\Controllers\AdminSlideController;
use App\Http\Controllers\AdminCourseController;
use App\Http\Controllers\AdminSeminarController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminDepartmentController;
use App\Models\Course;
use App\Models\Category;
use App\Models\User;

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

// Route::get('/',[HomeController::class, 'index']);
Route::get('/', [HomeController::class, 'index']);

// Auth::routes(['verify' => true]);
Route::get('email/verify', [HomeController::class, 'show'])->name('verification.notice');
Route::get('email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify');
Route::post('email/resend', [VerificationController::class, 'resend'])->name('verification.resend');


//register route
Route::get('/register', [UserController::class,'register'])->name('create');
Route::post('/registration', [UserController::class,'store']);

//logout route
Route::get('/login', [UserController::class,'login']);
Route::post('/login', [UserController::class,'post_login']);

//logout route
Route::post('/logout', [UserController::class,'logout']);

Route::get('/home', [HomeController::class, 'index'])
    ->middleware(['auth', 'verified']);


//courses show
// Route::get('/courses/{course:title}', [CourseController::class,'show'])->where('title','[A-z\d\-_]+');
// Route::get('/courses/{course:slug}', [CourseController::class,'show'])
//     ->where('slug', '[A-Za-z\d\-_]+')
//     ->where('course', '[^_]+(_\-|_-)?[^_]+');



Route::get('/about', function () {
    return view('/about');
});

Route::get('/history', function () {
    return view('/history');
});

Route::get('/team-member', function () {
    return view('/team-member');
});

Route::get('/president-of-piu', function () {
    return view('/president-of-piu');
});

Route::get('/admin', function () {
    return view('/admin');
});

Route::get('/admin/users', function (User $users) {
    return view('admin.users.index',[
            'users' => User::all()
    ]);
});

Route::get('/dashboard', function () {
    return view('/dashboard');
});

Route::get('/admin-exam-edit', function () {
    return view('/admin-exam-edit');
});

Route::get('/admin-exam', function () {
    return view('/admin-exam');
});

Route::get('/admin-panel-setting', function () {
    return view('/admin-panel-setting');
});


Route::get('/admin-about-menu', function () {
    return view('/admin-about-menu');
});

Route::get('/admin/exams', function () {
    return view('/admin/exams/index');
});

Route::get('/admin/exams/create', function () {
    return view('/admin/exams/create');
});

Route::get('/admin/exams/edit', function () {
    return view('/admin/exams/edit');
});

Route::get('/admin/slide/edit', function () {
    return view('/admin/slide/edit');
});


Route::get('/contact-us', function () {
    return view('/contact-us');
});

//Admin Admission
Route::get('/admissions',[AdmissionsController::class,'create']);
Route::post('/admissions/create',[AdmissionsController::class,'store']);

Route::get('/awards', function () {
    return view('/awards');
});


Route::get('/research', function () {
    return view('/research');
});

Route::get('/departments', function () {
    return view('/departments');
});

Route::get('/gallery-photo', function () {
    return view('/gallery-photo');
});

Route::get('/facilities', function () {
    return view('/facilities');
});

Route::get('/facilities-detail', function () {
    return view('/facilities-detail');
});

Route::get('/seminar', function () {
    return view('/seminar');
});

Route::get('/db-time-line', function () {
    return view('/db-time-line');
});

Route::get('/admin/events/event-enquiry', function () {
    return view('/admin/events/event-enquiry');
});

//course admin
Route::get('/courses', [CourseController::class,'index']);
Route::get('/courses/{course:slug}', [CourseController::class,'show'])->where('slug', '[A-Za-z\d\-_]+');
Route::get('/admin/courses/', [AdminCourseController::class,'index']);
Route::get('/admin/courses/create', [AdminCourseController::class,'create']);
Route::post('/admin/courses/store', [AdminCourseController::class,'store']);
Route::get('/admin/courses/{course:slug}/edit', [AdminCourseController::class,'edit']);
Route::patch('/admin/courses/{course:slug}/update', [AdminCourseController::class,'update']);
// Route::get('/admin/courses/show', [CourseController::class,'show']);

//admin categories
Route::get('/admin/categories',[AdminCategoryController::class,'index']);
Route::get('/admin/categories/create',[AdminCategoryController::class,'create']);
Route::post('/admin/categories/store',[AdminCategoryController::class,'store']);
Route::get('/admin/categories/{category:name}/edit',[AdminCategoryController::class,'edit']);
Route::patch('/admin/categories/{category:name}/update', [AdminCategoryController::class,'update']);
Route::delete('/admin/categories/{category:name}/delete', [AdminCategoryController::class,'destroy']);

//admin team
Route::get('/teams/{teams:name}', [AdminTeamController::class,'index']);
Route::get('/admin/teams', [AdminTeamController::class,'index']);
Route::get('/admin/teams/create', [AdminTeamController::class,'create']);
Route::post('/admin/teams/store', [AdminTeamController::class,'store']);

//Admin Blogs
Route::get('/university-blogs',[BlogController::class,'index']);
Route::get('/blogs/{blog:title}',[BlogController::class, 'show']);
Route::get('/admin/blogs',[AdminBlogController::class, 'index']);
Route::get('admin/blogs/create',[AdminBlogController::class, 'create']);
Route::post('admin/blogs/store',[AdminBlogController::class, 'store']);
Route::post('upload_image',[AdminBlogController::class, 'uploadImage'])->name('upload');
Route::get('/admin/blogs/{blog:title}/edit',[AdminBlogController::class,'edit']);
Route::patch('/admin/blogs/{blog:title}/update',[AdminBlogController::class,'update']);

//Admin Slides
Route::get('/admin/slides',[AdminSlideController::class,'index']);
Route::get('/admin/slides/create',[AdminSlideController::class,'create']);
Route::post('/admin/slides/store',[AdminSlideController::class,'store']);
Route::get('/admin/slides/edit',[AdminSlideController::class,'edit']);

//Admin Department
Route::get('/admin/departments', [AdminDepartmentController::class,'index']);
Route::get('/admin/departments/create', [AdminDepartmentController::class,'create']);
Route::post('/admin/departments/store', [AdminDepartmentController::class,'store']);
Route::delete('/admin/departments/{department:name}/delete', [AdminDepartmentController::class, 'destroy']);

//Admin Event
Route::get('/events', [EventController::class,'index']);
Route::get('/events/{event:name}', [EventController::class,'show'])->where('name', '[A-Za-z\d\-_]+');
Route::get('/events/event-details', [EventController::class,'details']);
Route::get('/admin/events', [AdminEventController::class,'index']);
Route::get('/admin/events/create', [AdminEventController::class,'create']);
Route::post('/admin/events/post', [AdminEventController::class,'store']);
Route::get('/admin/events/{event:name}/edit', [AdminEventController::class,'edit']);
Route::patch('/admin/events/{event:name}/update', [AdminEventController::class,'update']);

//Admin Seminars
Route::get('/seminars', [SeminarController::class,'index']);
Route::get('/seminars/show', [SeminarController::class,'show']);
Route::get('/admin/seminars', [AdminSeminarController::class,'index']);
Route::get('/admin/seminars/create', [AdminSeminarController::class,'create']);
Route::get('/admin/seminars/edit', [AdminSeminarController::class,'edit']);