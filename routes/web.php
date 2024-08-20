<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [App\Http\Controllers\LandingController::class, 'index'])->name('landing-page');

Route::get('/old', [App\Http\Controllers\LandingController::class, 'indexOld'])->name('old-landing-page');


Route::get('/about', [App\Http\Controllers\LandingController::class, 'about'])->name('about-page');
Route::post('/book_appointment', [App\Http\Controllers\AppointmentsController::class, 'book_appointment'])->name('book_appointment_page');
Route::get('/testimonials', [App\Http\Controllers\LandingController::class, 'testimonial'])->name('testimonial-page');
Route::get('/contact-us', [App\Http\Controllers\LandingController::class, 'contact_us'])->name('contact-us-page');
Route::post('/submit_contact_form', [App\Http\Controllers\ContactController::class, 'submit_contact_form'])->name('submit_contact_form_page');

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
