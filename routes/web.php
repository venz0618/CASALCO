<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

// OFFICER CONTROLLER
use App\Http\Controllers\officer\OfficerDashboardController;
use App\Http\Controllers\officer\PreMembershipApplicationController;
use App\Http\Controllers\officer\ReportsMembershipApplicationController;
use App\Http\Controllers\officer\PreLoanApplicationController;
use App\Http\Controllers\officer\ReportsLoanApplicationController;
use App\Http\Controllers\MembershipApplicationController;
use App\Http\Controllers\officer\ProductLoanController;
use App\Http\Controllers\officer\PreApprovedLadLoansController;

// ADMIN CONTROLLER
use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\ApproveMembershipApplicationController;
use App\Http\Controllers\admin\ApproveLoanApplicationController;
use App\Http\Controllers\admin\LoanApplicationReportsController;
use App\Http\Controllers\admin\AccountController;
use App\Http\Controllers\admin\MemberListController;
use App\Http\Controllers\admin\ApprovedLadLoansController;
// CLIENT CONTROLLER
use App\Http\Controllers\MembershipReportsController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ExpressLoanAppController;
use App\Http\Controllers\RegularSpecialLoanController;
//use App\Http\Controllers\LoanHistoryController;
use App\Http\Controllers\PreSeminarController;
use App\Http\Controllers\client\ClientDashboardController;
use App\Http\Controllers\client\LoanHistoryController;
use App\Http\Controllers\client\ActiveLoanController;
use App\Http\Controllers\client\LadLoansController;
// use App\Http\Controllers\admin\DashboardController;
// use App\Http\Controllers\admin\MembershipController;
// use App\Http\Controllers\admin\LoanController;
// use App\Http\Controllers\admin\MemberController;
// use App\Http\Controllers\officer\PreMembershipApplicationController;
// use App\Http\Controllers\officer\MembershipAppController;
// use App\Http\Controllers\officer\OfficerDashboardController;
use App\Http\Controllers\officer\MembershipInfoController;

// use App\Http\Controllers\client\MembershipController;

use App\Http\Controllers\PracticeController;

use  App\Http\Controllers\client\ExpressLoanController;
use Illuminate\Support\Facades\Auth;
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

Route::middleware(['auth', 'isAdmin'])->group(function() {

  Route::resource('/admin/dashboard', AdminDashboardController::class);
  Route::resource('/admin/membership', ApproveMembershipApplicationController::class);
  Route::resource('/admin/approved-membership', MembershipReportsController::class);
  Route::resource('/admin/loan_app', ApproveLoanApplicationController::class);
  Route::resource('/admin/approved-loans', LoanApplicationReportsController::class);
  Route::resource('/admin/member-list', MemberListController::class);
  Route::resource('/admin/accounts', AccountController::class);
  Route::resource('/approved', ApprovedLadLoansController::class);



});

Auth::routes();
// Route::view("/home", "client.home");
Route::view("/regular-special-loan-form", "client.regular-special-loan-form");
Route::view("/express-loan-form", "client.express-loan-form");
Route::view('/regular-loans', 'client.regular-loans');
Route::view('/special-loans', 'client.special-loans');
Route::view('/express-loans', 'client.express-index');

Route::view('/contact-us', 'client.contact-us');
Route::view('/form', 'client.membership-application');
//Route::view('/about-us', 'client.about-us');
//Route::view('/membership-information', 'client.membership-information');
Route::view('/officer/loan', 'officer.loan');
Route::view('/loans', 'client.loans');
Route::view('/officer/pre-approved-loans', 'officer.pre-approved-loans');
Route::view('/admin/member', 'admin.member');
Route::view('/loan-history', 'client.loan-history');
Route::view('/pre_seminar', 'client.pre_seminar');
Route::resource('/membership-application', MembershipApplicationController::class);
Route::resource('/express-loan-form', ExpressLoanAppController::class);
Route::resource('/regular-special-loan-form', RegularSpecialLoanController::class);
Route::resource('/loan-history', LoanHistoryController::class);
Route::resource('/home', PreSeminarController::class);
Route::view('/regular-loans-information', 'client.loan.regular.regular-loans-information');
Route::view('/LAD-loans-information', 'client.loan.LAD.lad-loans-information');
Route::view('/express-loans-information','client.loan.express.express-loans-information');
Route::view('/special-loans-information','client.loan.special.special-loans-information');
Route::resource('/express-loan-application-form', ExpressLoanController::class);

Route::middleware(['auth', 'isClient'])->group(function() {
  Route::resource('/client/dashboard', ClientDashboardController::class);
  Route::resource('/client/loan-history', LoanHistoryController::class);
  Route::resource('/client/active-loan', ActiveLoanController::class);
  Route::resource('/lad-loans', LadLoansController::class);
  Route::view('/express-loans', 'client.loan.express.express-index');
});


//offcer
Route::middleware(['auth', 'isOfficer'])->group(function() {
  Route::resource('/officer/dashboard', OfficerDashboardController::class);
  Route::resource('/officer/membership-application', PreMembershipApplicationController::class);
  Route::resource('/officer/pre-approved-membership', ReportsMembershipApplicationController::class);
  Route::resource('/officer/loan', PreLoanApplicationController::class);
  Route::resource('/officer/pre-approved-loans', ReportsloanApplicationController::class);
  Route::resource('/product-loans', ProductLoanController::class);
  Route::resource('/officer/membership_info', MembershipInfoController::class);
  Route::resource('/pre-approved', PreApprovedLadLoansController::class);

  // Route::get('/officer/{id}', [MembershipInfoController::class, 'show']);
  // Route::get('/officer/membership_info/{id}', 'MembershipInfoController@show')->name('displayMembershipApplication');

});

//Admin

Route::resource('/registration', RegistrationController::class);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::view('/', 'client.home.home-index');
Route::view('about-us', 'client.about-us.about-us-index');
Route::view('membership-information', 'client.membership.membership-information.mem-info-index');
Route::view('membership-application-form', 'client.membership.membership-application-form.mem-app-form-index');
Route::view('seminar-index', 'client.online_seminar.seminar-index');
