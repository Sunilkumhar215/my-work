<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ServiceController;
use App\Http\Controllers\frontend\BlogeController;
use App\Http\Controllers\frontend\CareerController;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\AdminInquiryController;
use App\Http\Controllers\InvoicesController;
use App\Http\Controllers\BankDetailController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;

Route::post('/send-inquiry', [InquiryController::class, 'store'])->name('inquiry.store');
Route::post('/send-Schedule', [InquiryController::class, 'stores'])->name('Schedule.store');

Route::get('/', [HomeController::class, 'index'])->name('frontend.index');
Route::get('/about', [AboutController::class, 'index'])->name('frontend.about');
Route::get('/career', [CareerController::class, 'index'])->name('frontend.career');
Route::get('/blogs', [BlogeController::class, 'index'])->name('frontend.blogs');
Route::get('/contact', [ContactController::class, 'index'])->name('frontend.contact');
Route::get('/ui-ux-design-services', [ServiceController::class, 'index'])->name('frontend.services.ui-ux-design-services');
Route::get('/web-development', [ServiceController::class, 'webdevelopment'])->name('frontend.services.web-development');
Route::get('/social-media-marketing-services-company', [ServiceController::class, 'socialmedia'])->name('frontend.services.social-media-marketing-services-company');
Route::get('/mobile-application-development', [ServiceController::class, 'mobileapplicatio'])->name('frontend.services.mobile-application-development');
Route::get('/ecommerce-web-development', [ServiceController::class, 'ecommercewebdevelopment'])->name('frontend.services.ecommerce-web-development');
Route::get('/saas-development-company', [ServiceController::class, 'saasdevelopment'])->name('frontend.services.saas-development-company');
Route::get('/seo-services-company', [ServiceController::class, 'seoservices'])->name('frontend.services.seo-services-company');
Route::get('/crm-development-company', [ServiceController::class, 'crmdevelopment'])->name('frontend.services.crm-development-company');
Route::get('/custom-software-development-services', [ServiceController::class, 'softwaredevelopment'])->name('frontend.services.custom-software-development-services');
Route::get('/ppc-services-company', [ServiceController::class, 'ppcservices'])->name('frontend.services.ppc-services-company');

// BACKEND Route




// Login Routes
Route::get('admin/login', [AuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [AuthController::class, 'login'])->name('admin.login.submit');
Route::post('admin/logout', [AuthController::class, 'logout'])->name('admin.logout');



// BACKEND Routes Protected by Auth and Status Middleware
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth', 'checkStatus']], function () {

    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Inquiries Management
    Route::get('/inquiries', [AdminInquiryController::class, 'index'])->name('inquiries.index');
    Route::post('/inquiries/toggle/{id}', [AdminInquiryController::class, 'toggleStatus'])->name('inquiry.toggle');
    Route::get('/inquiry/{id}', [AdminInquiryController::class, 'show'])->name('inquiry.show');
    Route::delete('/inquiry/{id}', [AdminInquiryController::class, 'destroy'])->name('inquiry.delete');

    // Invoices Management
    Route::get('/invoices', [InvoicesController::class, 'index'])->name('invoices.index');
    Route::get('/invoices/create', [InvoicesController::class, 'create'])->name('invoices.create');
    Route::post('/invoices/store', [InvoicesController::class, 'store'])->name('invoices.store');
    Route::get('/invoices/{invoice}', [InvoicesController::class, 'show'])->name('invoices.view');

    // AJAX Customer Search for Invoices
    Route::get('/ajax/customer/{phone}', [InvoicesController::class, 'getCustomer'])->name('customers.ajax');

    // Profile Settings
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::post('/profile/store', [ProfileController::class, 'store'])->name('profile.store');

    // Bank Details Management
    Route::get('/bank', [BankDetailController::class, 'index'])->name('bank.index');
    Route::get('/bank/create', [BankDetailController::class, 'create'])->name('bank.create');
    Route::post('/bank/store', [BankDetailController::class, 'store'])->name('bank.store');
    Route::get('/bank/{id}', [BankDetailController::class, 'edit'])->name('bank.edit');
    Route::put('/bank/{id}', [BankDetailController::class, 'update'])->name('bank.update');
    Route::delete('/bank/{bank}', [BankDetailController::class, 'destroy'])->name('bank.destroy');
    Route::post('/bank/update-status', [BankDetailController::class, 'updateStatus'])->name('bank.updateStatus');
    Route::get('/get-active-bank', [BankDetailController::class, 'getActiveBank'])->name('bank.getActive');
});
