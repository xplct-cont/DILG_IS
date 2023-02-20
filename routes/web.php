<?php

use Carbon\Carbon;

//Admin View
use Illuminate\Support\Facades\Auth;


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Normal_View\Lgu\LguController;

//Normal View
use App\Http\Controllers\Admin_View\Admin_LguController;
use App\Http\Controllers\Admin_View\Admin_FaqsController;
use App\Http\Controllers\Admin_View\Admin_HomeController;
use App\Http\Controllers\Admin_View\Admin_JobsController;
use App\Http\Controllers\Admin_View\Admin_PdmuController;
use App\Http\Controllers\Normal_View\Faqs\FaqsController;
use App\Http\Controllers\Normal_View\Home\HomeController;
// use App\Http\Controllers\Normal_View\Faqs\FaqsController;
use App\Http\Controllers\Normal_View\Jobs\JobsController;

//Normal View
// use App\Http\Controllers\Normal_View\Home\HomeController;
use App\Http\Controllers\Admin_View\Admin_UpdateController;
use App\Http\Controllers\Normal_View\About\AboutController;
use App\Http\Controllers\Admin_View\Admin_ProfileController;
use App\Http\Controllers\Admin_View\Admin_ProjectController;
use App\Http\Controllers\Admin_View\AdminRegisterController;
use App\Http\Controllers\Normal_View\Update\UpdatesController;
use App\Http\Controllers\Normal_View\Project\ProjectController;
use App\Http\Controllers\Admin_View\Admin_OrganizationController;
use App\Http\Controllers\Normal_View\Contacts\ContactsController;
// use App\Http\Controllers\Normal_View\Field_Officers\Field_OfficersController;
use App\Http\Controllers\Admin_View\Admin_ChangePasswordController;
use App\Http\Controllers\Admin_View\Admin_Field_OfficersController;
use App\Http\Controllers\Admin_View\Admin_Bohol_IssuancesController;
use App\Http\Controllers\Normal_View\Republic_Act\RepublicActController;
use App\Http\Controllers\Normal_View\Organization\OrganizationController;
use App\Http\Controllers\Normal_View\Memo_Circular\MemoCircularController;
use App\Http\Controllers\Normal_View\Draft_Issuance\DraftIssuanceController;
use App\Http\Controllers\Normal_View\Joint_Circular\JointCircularController;
use App\Http\Controllers\Normal_View\Provincial_Director\DirectorController;
use App\Http\Controllers\Normal_View\Field_Officers\Field_OfficersController;
use App\Http\Controllers\Normal_View\Bohol_Issuances\Bohol_IssuancesController;
use App\Http\Controllers\Normal_View\Attached_Agencies\Attached_AgenciesController;
use App\Http\Controllers\Normal_View\Presidential_Directive\PresidentialDirectiveController;
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

Route::get('/', [HomeController::class, 'index']);


Auth::routes();

//Routes for Kenn
//Admin_View Routes
Route::get('/home', [Admin_HomeController::class, 'index'])->name('home');
Route::post('/add_images/{id}', [Admin_HomeController::class, 'store']);

Route::get('/admin/profile', [Admin_ProfileController::class, 'index'])->name('admin/profile');
Route::put('/update-profile/{id}', [Admin_ProfileController::class, 'update_profile']);

Route::get('/admin/change-password/{id}', [Admin_ChangePasswordController::class, 'index']);
Route::post('/admin/change-password', [Admin_ChangePasswordController::class, 'change_password']);

Route::get('/admin/jobs', [Admin_JobsController::class, 'index'])->name('admin/jobs');
Route::post('/add-new-job', [Admin_JobsController::class, 'store']);
Route::get('/delete_jobs/{id}', [Admin_JobsController::class, 'delete_jobs']);
Route::put('/update_jobs/{id}', [Admin_JobsController::class, 'update_jobs']);

Route::get('/admin/organization', [Admin_OrganizationController::class, 'index'])->name('admin/organization');
Route::post('/add-org', [Admin_OrganizationController::class, 'store']);
Route::get('/delete_org/{id}', [Admin_OrganizationController::class, 'delete_org']);
Route::put('/update-org/{id}', [Admin_OrganizationController::class, 'update_org']);

Route::get('/admin/pdmu', [Admin_PdmuController::class, 'index'])->name('admin/pdmu');
Route::post('/add-pdmu', [Admin_PdmuController::class, 'store']);
Route::get('/delete_pdmu/{id}', [Admin_PdmuController::class, 'delete_pdmu']);
Route::put('/update-pdmu/{id}', [Admin_PdmuController::class, 'update_pdmu']);

Route::get('/admin/lgu', [Admin_LguController::class, 'index'])->name('admin/lgu');
Route::post('/add-lgu', [Admin_LguController::class, 'store']);
Route::get('/delete_lgu/{id}', [Admin_LguController::class, 'delete_lgu']);
Route::put('/update-lgu/{id}', [Admin_LguController::class, 'update_lgu']);

Route::get('/admin/faqs', [Admin_FaqsController::class, 'index'])->name('admin/faqs');
Route::post('/add-faqs', [Admin_FaqsController::class, 'store']);
Route::get('/delete_faqs/{id}', [Admin_FaqsController::class, 'delete_faqs']);
Route::put('/update-faqs/{id}', [Admin_FaqsController::class, 'update_faqs']);

Route::get('/admin/issuances', [Admin_Bohol_IssuancesController::class, 'index'])->name('admin/issuances');
Route::post('/add-issuances', [Admin_Bohol_IssuancesController::class, 'store']);
Route::get('/delete_issuances/{id}', [Admin_Bohol_IssuancesController::class, 'delete_issuances']);
Route::put('/update-issuances/{id}', [Admin_Bohol_IssuancesController::class, 'update_issuances']);

//Normal_View Routes
Route::get('/provincial_director',[DirectorController::class, 'index'])->name('/provincial_director');

Route::get('/attached_agencies',[Attached_AgenciesController::class, 'index'])->name('/attach_agencies');
Route::get('/lgu',[LguController::class, 'index'])->name('/lgu');

Route::get('/faqs',[FaqsController::class, 'index'])->name('/faqs');

Route::get('/latest_issuances',[Bohol_IssuancesController::class, 'index'])->name('/latest_issuances');
Route::get('/latest_issuances/{id}',[Bohol_IssuancesController::class, 'show']);
Route::get('/download/{file}',[Bohol_IssuancesController::class, 'download']);

Route::post('/send-email', [ContactsController::class, 'sendEmail']);










//Routes for Chadie

//Admin_View Routes
Route::get('admin/projects',[Admin_ProjectController::class,'index'])->name('admin/projects');
Route::post('admin/projects-create',[Admin_ProjectController::class,'store']);
Route::get('admin/projects-delete/{id}',[Admin_ProjectController::class,'destroy']);
Route::put('admin/projects-update/{id}',[Admin_ProjectController::class,'update']);





//Normal_View Routes

// Route::get("/single-updates-update",function(){
//     return view('Normal_View.Updates.single_updates');
// });

Route::get("/project",[ProjectController::class,'index']);




Route::get('/draft-issuance',[DraftIssuanceController::class,'index']);
Route::get('/joint-circular',[JointCircularController::class,'index']);
Route::get('/republic-act',[RepublicActController::class,'index']);
Route::get('/presidential-directive',[PresidentialDirectiveController::class,'index']);
Route::get('/memo-circular',[MemoCircularController::class,'index']);




Route::get('admin/register',[AdminRegisterController::class,'index'])->name('admin/register');



//Routes for Vienna
//Admin_View Routes
Route::get('/admin/news_updates', [Admin_UpdateController::class, 'index'])->name('admin/news_updates');
Route::post('/add-updates', [Admin_UpdateController::class, 'store']);
Route::get('/delete_updates/{id}', [Admin_UpdateController::class, 'delete_updates']);
Route::put('/edit_updates/{id}', [Admin_UpdateController::class, 'edit_updates']);


//Normal_View Routes
Route::get('/about', [AboutController::class, 'index'])->name('/about');
Route::get('/jobs', [JobsController::class, 'index'])->name('/jobs');
Route::get('/contacts', [ContactsController::class, 'index'])->name('/contacts');

Route::get('/news_update', [UpdatesController::class, 'index'])->name('/news_update');

Route::get('/search/', [Admin_JobsController::class, 'search'])->name('search');





















//Routes for Franklin


//Admin_View Routes
Route::get('/admin/field_officers', [Admin_Field_OfficersController::class, 'index'])->name('admin/field_officers');
Route::post('/add-field_officer', [Admin_Field_OfficersController::class, 'store']);
Route::get('/delete_field_officer/{id}', [Admin_Field_OfficersController::class, 'delete_field_officer']);
Route::put('/update-field_officer/{id}', [Admin_Field_OfficersController::class, 'update_field_officer']);


//Normal_View Routes
Route::get('/organization',[OrganizationController::class, 'index']);
Route::get('/field_officers',[Field_OfficersController::class, 'index'])->name('/field_officers');









//End here


