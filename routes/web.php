<?php

use App\Http\Middleware\Admin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\BlogController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminFaqController;
use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\PhotoController;
use App\Http\Controllers\Admin\AdminPostController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminPhotoController;
use App\Http\Controllers\Admin\AdminVideoController;
use App\Http\Controllers\Admin\AdminSliderController;
use App\Http\Controllers\Admin\AdminFeatureController;
use App\Http\Controllers\Admin\AdminPageController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\AdminTestimonialController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\Front\TermsController;
use App\Http\Controllers\Front\VideoController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/admin/home', [AdminController::class, 'index'])->name('admin.home')->middleware('admin:admin');
Route::get('/admin/login', [AdminLoginController::class, 'index'])->name('admin.login');

Route::post('/admin/login-submit', [AdminLoginController::class, 'login_submit'])->name('admin.login.submit');

Route::get('admin/forget-password', [AdminLoginController::class, 'forget_password'])->name('admin.forget.password');
Route::post('/admin/forget-password-submit', [AdminLoginController::class, 'forget_password_submit'])->name('admin.forget.password.submit');

Route::get('admin/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');
Route::get('/admin/reset-password/{token}/{email}', [AdminLoginController::class, 'reset_password'])->name('admin.reset.password');
Route::post('/admin/reset-password-submit', [AdminLoginController::class, 'reset_password_submit'])->name('admin.reset.password.submit');

//Admin Profile Route
Route::get('/admin/edit-profile', [AdminProfileController::class, 'index'])->name('admin.profile')->middleware('admin:admin');
Route::post('/admin/profile-submit', [AdminProfileController::class, 'profile_submit'])->name('admin.profile.submit');



// Route::get('/admin/slide/view', [AdminSliderController::class, 'index'])->name('admin.slide.view')->middleware('admin:admin');
// Route::get('/admin/slide/add', [AdminSliderController::class, 'add'])->name('admin.slide.add')->middleware('admin:admin');
// Route::post('/admin/slide/store', [AdminSliderController::class, 'store'])->name('admin.slide.store')->middleware('admin:admin');
// Route::get('/admin/slide/edit/{id}', [AdminSliderController::class, 'edit'])->name('admin.slide.edit')->middleware('admin:admin');
// Route::post('/admin/slide/update/{id}', [AdminSliderController::class, 'update'])->name('admin.slide.update')->middleware('admin:admin');
// Route::get('/admin/slide/delete/{id}', [AdminSliderController::class, 'delete'])->name('admin.slide.delete')->middleware('admin:admin');

Route::middleware(['admin:admin'])->group(function () {
    //Admin Slide Route
    Route::get('/admin/slide/view', [AdminSliderController::class, 'index'])->name('admin.slide.view');
    Route::get('/admin/slide/add', [AdminSliderController::class, 'add'])->name('admin.slide.add');
    Route::post('/admin/slide/store', [AdminSliderController::class, 'store'])->name('admin.slide.store');
    Route::get('/admin/slide/edit/{id}', [AdminSliderController::class, 'edit'])->name('admin.slide.edit');
    Route::post('/admin/slide/update/{id}', [AdminSliderController::class, 'update'])->name('admin.slide.update');
    Route::get('/admin/slide/delete/{id}', [AdminSliderController::class, 'delete'])->name('admin.slide.delete');

    //Admin Feature Route
    Route::get('/admin/feature/view', [AdminFeatureController::class, 'index'])->name('admin.feature.view');
    Route::get('/admin/feature/add', [AdminFeatureController::class, 'add'])->name('admin.feature.add');
    Route::post('/admin/feature/store', [AdminFeatureController::class, 'store'])->name('admin.feature.store');
    Route::get('/admin/feature/edit/{id}', [AdminFeatureController::class, 'edit'])->name('admin.feature.edit');
    Route::post('/admin/feature/update/{id}', [AdminFeatureController::class, 'update'])->name('admin.feature.update');
    Route::get('/admin/feature/delete/{id}', [AdminFeatureController::class, 'delete'])->name('admin.feature.delete');

    //Admin Testimonial Route
    Route::get('/admin/testimonial/view', [AdminTestimonialController::class, 'index'])->name('admin.testimonial.view');
    Route::get('/admin/testimonial/add', [AdminTestimonialController::class, 'add'])->name('admin.testimonial.add');
    Route::post('/admin/testimonial/store', [AdminTestimonialController::class, 'store'])->name('admin.testimonial.store');
    Route::get('/admin/testimonial/edit/{id}', [AdminTestimonialController::class, 'edit'])->name('admin.testimonial.edit');
    Route::post('/admin/testimonial/update/{id}', [AdminTestimonialController::class, 'update'])->name('admin.testimonial.update');
    Route::get('/admin/testimonial/delete/{id}', [AdminTestimonialController::class, 'delete'])->name('admin.testimonial.delete');

    // Admin Post Route
    Route::get('/admin/post/view', [AdminPostController::class, 'index'])->name('admin.post.view');
    Route::get('/admin/post/add', [AdminPostController::class, 'add'])->name('admin.post.add');
    Route::post('/admin/post/store', [AdminPostController::class, 'store'])->name('admin.post.store');
    Route::get('/admin/post/edit/{id}', [AdminPostController::class, 'edit'])->name('admin.post.edit');
    Route::post('/admin/post/update/{id}', [AdminPostController::class, 'update'])->name('admin.post.update');
    Route::get('/admin/post/delete/{id}', [AdminPostController::class, 'delete'])->name('admin.post.delete');

    // Admin Photo Gallery Route
    Route::get('/admin/photo/view', [AdminPhotoController::class, 'index'])->name('admin.photo.view');
    Route::get('/admin/photo/add', [AdminPhotoController::class, 'add'])->name('admin.photo.add');
    Route::post('/admin/photo/store', [AdminPhotoController::class, 'store'])->name('admin.photo.store');
    Route::get('/admin/photo/edit/{id}', [AdminPhotoController::class, 'edit'])->name('admin.photo.edit');
    Route::post('/admin/photo/update/{id}', [AdminPhotoController::class, 'update'])->name('admin.photo.update');
    Route::get('/admin/photo/delete/{id}', [AdminPhotoController::class, 'delete'])->name('admin.photo.delete');

    // Admin Video Gallery Route
    Route::get('/admin/video/view', [AdminVideoController::class, 'index'])->name('admin.video.view');
    Route::get('/admin/video/add', [AdminVideoController::class, 'add'])->name('admin.video.add');
    Route::post('/admin/video/store', [AdminVideoController::class, 'store'])->name('admin.video.store');
    Route::get('/admin/video/edit/{id}', [AdminVideoController::class, 'edit'])->name('admin.video.edit');
    Route::post('/admin/video/update/{id}', [AdminVideoController::class, 'update'])->name('admin.video.update');
    Route::get('/admin/video/delete/{id}', [AdminVideoController::class, 'delete'])->name('admin.video.delete');

     // Admin Faq Route
     Route::get('/admin/faq/view', [AdminFaqController::class, 'index'])->name('admin.faq.view');
     Route::get('/admin/faq/add', [AdminFaqController::class, 'add'])->name('admin.faq.add');
     Route::post('/admin/faq/store', [AdminFaqController::class, 'store'])->name('admin.faq.store');
     Route::get('/admin/faq/edit/{id}', [AdminFaqController::class, 'edit'])->name('admin.faq.edit');
     Route::post('/admin/faq/update/{id}', [AdminFaqController::class, 'update'])->name('admin.faq.update');
     Route::get('/admin/faq/delete/{id}', [AdminFaqController::class, 'delete'])->name('admin.faq.delete');

     Route::get('/admin/page/about', [AdminPageController::class, 'about'])->name('admin.page.about');
     Route::post('/admin/page/about/update', [AdminPageController::class, 'about_update'])->name('admin_page.about.update');
   
     Route::get('/admin/page/terms', [AdminPageController::class, 'terms'])->name('admin_page.terms');
     Route::post('/admin/page/terms/update', [AdminPageController::class, 'terms_update'])->name('admin_page.terms.update');
    });

//Frontend Route
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/single-post/{id}', [BlogController::class, 'single_post'])->name('single.post');
Route::get('/photo/gallery', [PhotoController::class, 'index'])->name('photo.gallery');
Route::get('/video/gallery', [VideoController::class, 'index'])->name('video.gallery');
Route::get('/faq', [FaqController::class, 'index'])->name('faq');
Route::get('/terms-and-conditions', [TermsController::class, 'index'])->name('terms');