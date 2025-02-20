<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\ChangePasswordController;
use App\Http\Controllers\ContactController;

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

// Route::get('/', function () {
//     return view('welcome');
// });




Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);

Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');




Route::middleware('auth')->group(function() {

    Route::get('/admin/dashboard', [AdminController::class, 'index']);


    // Show the change password form
    Route::get('change-password', [ChangePasswordController::class, 'showChangePasswordForm'])->name('password.change');
    
    // Handle the password change form submission
    Route::post('change-password', [ChangePasswordController::class, 'changePassword']);
});









Route::get('/admin', [AdminController::class, 'index']);

// Route for showing the login form (GET request)
Route::view('/adminlogin', 'Dashboard.pages.samples.adminlogin')->name('adminlogin.form');

// Route for handling the form submission (POST request)
Route::post('/admin/login', [AdminController::class, 'login'])->name('adminlogin.post');
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

// Routes for admin registration and login views
Route::view('/adminlogin', 'Dashboard.pages.samples.adminlogin')->name('adminlogin');
Route::view('/adminregister', 'Dashboard.pages.samples.adminregister')->name('adminregister');
Route::view('/blogsmanagemet', 'Dashboard.pages.Blog-features.blogsmanagemet')->name('blogsmanagemet');

// Route to handle admin logout
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

// Protect routes with the 'admin' guard
// Route::middleware('auth:admin')->group(function () {
//     Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('dashboard.index');
//     Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard.index'); 
// });

// Admin login form (In case you're directly using view routes, this should be handled in the form)
Route::view('/adminlogin', 'Dashboard.pages.samples.adminlogin')->name('adminlogin');


 

Route::get('/createblog', function () {
    return view('Dashboard.pages.Blog-features.createblog');
})->name('createblog');













//customer routes
Route::view('/', 'home')->name('home');

Route::view('/company-profile', 'company-profile')->name('company-profile');

Route::view('/team', 'team')->name('team');

Route::view('/equity', 'equity')->name('equity');

Route::view('/mutual-funds', 'mutual-funds')->name('mutual-funds');

Route::view('/pms-aif', 'pms-aif')->name('pms-aif');

Route::view('/fixed-deposits', 'fixed-deposits')->name('fixed-deposits');

Route::view('/bonds', 'bonds')->name('bonds');
Route::view('/loan', 'loan')->name('loan');

Route::view('/wealth-management', 'wealth-management')->name('wealth-management');
Route::view('/financial-planning', 'financial-planning')->name('financial-planning');
Route::view('/tax-planning', 'tax-planning')->name('tax-planning');
Route::view('/portfolio-restucturing', 'portfolio-restucturing')->name('portfolio-restucturing');
Route::view('/child-future-saving', 'child-future-saving')->name('child-future-saving');
Route::view('/retirmentplanning','retirmentplanning')->name('retirmentplanning');
Route::view('/seminars', 'seminars')->name('seminars');
Route::view('/external-Portfolio', 'external-Portfolio')->name('external-Portfolio');
Route::view('/equity-advisory', 'equity-advisory')->name('equity-advisory');
Route::view('/estate-planning', 'estate-planning')->name('estate-planning');
Route::view('/Insurance_pr', 'Insurance_pr')->name('Insurance_pr');


Route::view('/newsletter', 'newsletter')->name('newsletter');
Route::view('/financial-calculator', 'financial-calculator')->name('financial-calculator');

Route::view('/downloads', 'downloads')->name('downloads');

Route::view('/blogs', 'blogs')->name('blogs');
//blogsingle.blade.php
//blogsingle.blade.php
Route::view('/blogsingle', 'blogsingle')->name('blogsingle');

Route::view('/learning', 'learning')->name('learning');
Route::view('/kyc', 'kyc')->name('kyc');


Route::view('/contact-us', 'contact-us')->name('contact-us');
// resources/views/schedulemeeting.blade.php
Route::view('/schedulemeeting','schedulemeeting')->name('schedulemeeting');
Route::view('/opendemata','opendemata')->name('opendemata');

Route::view('/login-page', 'login-page')->name('login-page');
Route::view('/pms-aif', 'pms-aif')->name('pms-aif');
Route::view('/login-page', 'login-page')->name('login-page');

// routes/web.php
Route::get('/sip-calculator', function () {
    return view('sip-calculator');
})->name('sip-calculator');

//resources/views/retirementcal.blade.php
Route::get('/retirementcal', function () {
    return view('retirementcal');
})->name('retirementcal');


//resources/views/educationcal.blade.php
Route::get('/educationcal', function () {
    return view('educationcal');
})->name('educationcal');

//resources/views/marriage.blade.php
Route::get('/marriage', function () {
    return view('marriage');
})->name('marriage');

//resources/views/sip_delay.blade.php
Route::get('/sip_delay', function () {
    return view('sip_delay');
})->name('sip_delay');

//resources/views/sip_stepup.blade.php
Route::get('/sip_stepup', function () {
    return view('sip_stepup');
})->name('sip_stepup');

//resources/views/lumpsum.blade.php
Route::get('/lumpsum', function () {
    return view('lumpsum');
})->name('lumpsum');

//resources/views/emi.blade.php
Route::get('/emi', function () {
    return view('emi');
})->name('emi');

//footer links
Route::view('/disclaimer', 'disclaimer')->name('disclaimer');
Route::view('/disclosure', 'disclosure')->name('disclosure');
Route::view('/privacy-policy', 'privacy-policy')->name('privacy-policy');

use App\Http\Controllers\MeetingController;

Route::get('/schedule-meeting', [MeetingController::class, 'showForm'])->name('schedule.meeting.form');
Route::post('/schedule-meeting', [MeetingController::class, 'handleForm'])->name('schedule.meeting');


Route::get('/iframe-content', function () {
    return view('iframe-content'); // Return a Blade view
});


Route::get('/views/admin/register', [AdminController::class, 'showRegister'])->name('admin.register');
    Route::post('/views/admin/register', [AdminController::class, 'register'])->name('admin.register.submit');
    Route::get('/admin/login', [AdminController::class, 'showLogin'])->name('admin.login');
    Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit');
    Route::get('/admin/profile', [AdminController::class, 'showProfile'])->name('admin.profile');
    Route::post('/admin/profile', [AdminController::class, 'updateProfile'])->name('admin.profile.update');
    Route::get('/admin/user', [AdminController::class, 'showUserList'])->name('admin.user');
    Route::post('/users', [AdminController::class, 'store'])->name('users.store');
    Route::put('/users/{id}', [AdminController::class, 'update'])->name('users.update');
    Route::delete('/users/{id}', [AdminController::class, 'destroy'])->name('users.destroy');
    Route::get('/admin/register', [AdminController::class, 'showRegister'])->name('admin.register');
    Route::post('/admin/register', [AdminController::class, 'register'])->name('admin.register.submit');
    // Route::get('/admin/dashboard', [AdminController::class, 'showDashboard'])->name('admin.dashboard');
    Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
 




    // latest blog route:16
    

    use App\Http\Controllers\BlogController;

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('viewblog', [BlogController::class, 'index'])->name('viewblog');
    Route::get('addblog', [BlogController::class, 'create'])->name('addblog');
    Route::post('addblog', [BlogController::class, 'store'])->name('storeblog');
    Route::get('editblog/{id}', [BlogController::class, 'edit'])->name('editblog');
    Route::post('editblog/{id}', [BlogController::class, 'update'])->name('updateblog');
    Route::delete('deleteblog/{id}', [BlogController::class, 'destroy'])->name('deleteblog');
});
// resources/views/admin/dashboard.blade.php
Route::view('/admin/dashboard', 'admin.dashboard')->name('admin.dashboard');


use App\Http\Controllers\NewsletterController;

// Group the routes under the 'admin' prefix
Route::prefix('admin')->group(function () {
    // Route to view newsletters (this will map to the 'index' method in NewsletterController)
    Route::get('viewnewsletter', [NewsletterController::class, 'index'])->name('admin.viewnewsletter');
    
    // Resource route for newsletters (creates CRUD routes except for 'index')
    Route::resource('newsletters', NewsletterController::class)->except(['index']);
});




Route::get('/', [BlogController::class, 'showHomePage'])->name('home');

Route::get('/newsletter', [NewsletterController::class, 'frontendIndex'])->name('newsletter');

Route::get('/blogs', [BlogController::class, 'showBlogs'])->name('blogs');



use Illuminate\Support\Facades\Mail;
use App\Mail\DematFormMail;

Route::post('/submit-demat-form', function (Illuminate\Http\Request $request) {
    $data = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'phone' => 'required|string|max:15',
        'message' => 'required|string|max:1000',
    ]);

    Mail::to('rockstarnihar22@gmail.com')->send(new DematFormMail($data));

    return back()->with('success', 'Your demat account request has been submitted successfully!');
});


// Show the contact form
Route::get('/contact-us', [ContactController::class, 'showForm'])->name('contact-us');

// Handle form submission
Route::post('/send-mail', [ContactController::class, 'sendMail'])->name('sendMail');
