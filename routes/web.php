<?php


use App\Http\Controllers\Admin\ApplicationSettingController;
use App\Http\Controllers\Admin\BestPartnerController;
use App\Http\Controllers\Admin\HomePage\HomePageController;
use App\Http\Controllers\Admin\HomePage\TenSegmentController;
use App\Http\Controllers\Admin\HomePage\WhyAnController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\AdvisorController;
use App\Http\Controllers\Admin\OurTeamController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\AboutPageController;
use App\Http\Controllers\Admin\OthersBannerController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Frontend\FrontEndController;
use App\Http\Controllers\Frontend\AnyQuestionController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
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

Route::get('/clear', function(){
    Artisan::call('optimize');
    // Artisan::call('cache:clear');
    // Artisan::call('route:clear');
    // Artisan::call('config:clear');
});




// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

Auth::routes([
    'register' => false,
]);

Route::match(['get', 'post'], 'register', function(){
	return redirect('/login');
});

// Admin Home Page
Route::get('/home', [HomeController::class, 'index'])->name('home');


/*
|--------------------------------------------------------------------------
| Profile Controller
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'profile'], function(){
    Route::get('view', [ProfileController::class, 'profile_view'])->name('profile.view');
    Route::post('update', [ProfileController::class, 'profile_update'])->name('profile.update');
    Route::get('password', [ProfileController::class, 'profile_password'])->name('profile.password');
    Route::post('password_update', [ProfileController::class, 'profile_password_update'])->name('profile.password.update');
});




/*
|--------------------------------------------------------------------------
| Application Setting Controller
|--------------------------------------------------------------------------
*/

Route::get('/general-settings', [ApplicationSettingController::class, 'index'])->name('general_setting');
Route::post('/update-settings', [ApplicationSettingController::class, 'updateSetting'])->name('update_setting');


/*
|----------------------------------------------------------------------------------------------------------------------------------------------------
| Home Page Controller
|----------------------------------------------------------------------------------------------------------------------------------------------------
*/

Route::group(['prefix' => 'profile'], function(){
    Route::get('view', [ProfileController::class, 'profile_view'])->name('profile.view');
    Route::post('update', [ProfileController::class, 'profile_update'])->name('profile.update');
    Route::get('password', [ProfileController::class, 'profile_password'])->name('profile.password');
    Route::post('password_update', [ProfileController::class, 'profile_password_update'])->name('profile.password.update');
});


/*
|--------------------------------------------------------------------------
| HomePage Controller
|--------------------------------------------------------------------------
*/

Route::get('/home-page', [HomePageController::class, 'index'])->name('home_page');
Route::post('/update-home-page', [HomePageController::class, 'updateHome'])->name('update_home_page');
Route::get('/what-you-get-creat', [HomePageController::class, 'whatYouGetCreate'])->name('what_you_get.create');
Route::get('/what-you-get-index', [HomePageController::class, 'whatYouGetIndex'])->name('what_you_get.index');
Route::post('/what-you-get-store', [HomePageController::class, 'whatYouGetStore'])->name('what_you_get.store');
Route::get('/what-you-get-edit/{id}', [HomePageController::class, 'whatYouGetEdit'])->name('what_you_get.edit');
Route::post('/what-you-get-update', [HomePageController::class, 'whatYouGetUpdate'])->name('what_you_get.update');
Route::get('/what-you-get-delete/{id}', [HomePageController::class, 'whatYouGetDelete'])->name('what_you_get.delete');


/*
|--------------------------------------------------------------------------
| AboutUsPage Controller
|--------------------------------------------------------------------------
*/

Route::get('/about-us-page', [AboutPageController::class, 'index'])->name('about_page');
Route::post('/update-about-us-page', [AboutPageController::class, 'updateHome'])->name('update_about_page');
Route::get('/key_objective-creat', [AboutPageController::class, 'keyObjectiveCreate'])->name('key_objective.create');
Route::get('/key_objective-index', [AboutPageController::class, 'keyObjectiveIndex'])->name('key_objective.index');
Route::post('/key_objective-store', [AboutPageController::class, 'keyObjectiveStore'])->name('key_objective.store');
Route::get('/key_objective-edit/{id}', [AboutPageController::class, 'keyObjectiveEdit'])->name('key_objective.edit');
Route::post('/key_objective-update', [AboutPageController::class, 'keyObjectiveUpdate'])->name('key_objective.update');
Route::get('/key_objective-delete/{id}', [AboutPageController::class, 'keyObjectiveDelete'])->name('key_objective.delete');



/*
|--------------------------------------------------------------------------
| OtherBanner Controller
|--------------------------------------------------------------------------
*/

Route::get('/others-banner-page', [OthersBannerController::class, 'index'])->name('others_banner');
Route::post('/update-others-banner', [OthersBannerController::class, 'update'])->name('update_others_banner');


/*
|--------------------------------------------------------------------------
| TenSegment Controller
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'ten_segment'], function(){
    Route::get('create', [TenSegmentController::class, 'create'])->name('ten_segment.create');
    Route::get('index', [TenSegmentController::class, 'index'])->name('ten_segment.index');
    Route::post('store', [TenSegmentController::class, 'store'])->name('ten_segment.store');
    Route::get('edit/{id}', [TenSegmentController::class, 'edit'])->name('ten_segment.edit');
    Route::post('update', [TenSegmentController::class, 'update'])->name('ten_segment.update');
    Route::get('delete/{id}', [TenSegmentController::class, 'delete'])->name('ten_segment.delete');
});


/*
|--------------------------------------------------------------------------
| WhyAn Controller
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'why_an'], function(){
    Route::get('create', [WhyAnController::class, 'create'])->name('why_an.create');
    Route::get('index', [WhyAnController::class, 'index'])->name('why_an.index');
    Route::post('store', [WhyAnController::class, 'store'])->name('why_an.store');
    Route::get('edit/{id}', [WhyAnController::class, 'edit'])->name('why_an.edit');
    Route::post('update', [WhyAnController::class, 'update'])->name('why_an.update');
    Route::get('delete/{id}', [WhyAnController::class, 'delete'])->name('why_an.delete');
});



/*
|--------------------------------------------------------------------------
| BestPartner Controller
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'best_partner'], function(){
    Route::get('create', [BestPartnerController::class, 'create'])->name('bestpartner.create');
    Route::get('index', [BestPartnerController::class, 'index'])->name('bestpartner.index');
    Route::post('store', [BestPartnerController::class, 'store'])->name('bestpartner.store');
    Route::get('edit/{id}', [BestPartnerController::class, 'edit'])->name('bestpartner.edit');
    Route::post('update', [BestPartnerController::class, 'update'])->name('bestpartner.update');
    Route::get('delete/{id}', [BestPartnerController::class, 'delete'])->name('bestpartner.delete');
});



/*
|--------------------------------------------------------------------------
| Advisor Controller
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'advisor'], function(){
    Route::get('create', [AdvisorController::class, 'create'])->name('advisor.create');
    Route::get('index', [AdvisorController::class, 'index'])->name('advisor.index');
    Route::post('store', [AdvisorController::class, 'store'])->name('advisor.store');
    Route::get('edit/{id}', [AdvisorController::class, 'edit'])->name('advisor.edit');
    Route::post('update', [AdvisorController::class, 'update'])->name('advisor.update');
    Route::get('delete/{id}', [AdvisorController::class, 'delete'])->name('advisor.delete');
});



/*
|--------------------------------------------------------------------------
| Ourteam Controller
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'our_team'], function(){
    Route::get('create', [OurTeamController::class, 'create'])->name('our_team.create');
    Route::get('index', [OurTeamController::class, 'index'])->name('our_team.index');
    Route::post('store', [OurTeamController::class, 'store'])->name('our_team.store');
    Route::get('edit/{id}', [OurTeamController::class, 'edit'])->name('our_team.edit');
    Route::post('update', [OurTeamController::class, 'update'])->name('our_team.update');
    Route::get('delete/{id}', [OurTeamController::class, 'delete'])->name('our_team.delete');
});

/*
|--------------------------------------------------------------------------
| Gallery Controller
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'gallery'], function(){
    Route::get('create', [GalleryController::class, 'create'])->name('gallery.create');
    Route::get('index', [GalleryController::class, 'index'])->name('gallery.index');
    Route::post('store', [GalleryController::class, 'store'])->name('gallery.store');
    Route::get('edit/{id}', [GalleryController::class, 'edit'])->name('gallery.edit');
    Route::post('update', [GalleryController::class, 'update'])->name('gallery.update');
    Route::get('delete/{id}', [GalleryController::class, 'delete'])->name('gallery.delete');
});


/*
|--------------------------------------------------------------------------
| Faq Controller
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'faq'], function(){
    Route::get('create', [FaqController::class, 'create'])->name('faq.create');
    Route::get('index', [FaqController::class, 'index'])->name('faq.index');
    Route::post('store', [FaqController::class, 'store'])->name('faq.store');
    Route::get('edit/{id}', [FaqController::class, 'edit'])->name('faq.edit');
    Route::post('update', [FaqController::class, 'update'])->name('faq.update');
    Route::get('delete/{id}', [FaqController::class, 'delete'])->name('faq.delete');
});


/*
|----------------------------------------------------------------------------------------------------------------------------------------------------
| FrontEnd Controller
|----------------------------------------------------------------------------------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| FrontEnd Controller
|--------------------------------------------------------------------------
*/

Route::get('/', [FrontEndController::class, 'index'])->name('frontend.home');
Route::get('/about', [FrontEndController::class, 'about'])->name('frontend.about');
Route::get('/advisore', [FrontEndController::class, 'advisore'])->name('frontend.advisore');
Route::get('/contact', [FrontEndController::class, 'contact'])->name('frontend.contact');
Route::get('/faq', [FrontEndController::class, 'faq'])->name('frontend.faq');
Route::get('/gallery', [FrontEndController::class, 'gallery'])->name('frontend.gallery');
Route::get('/news', [FrontEndController::class, 'news'])->name('frontend.event');
Route::get('/team', [FrontEndController::class, 'team'])->name('frontend.team');


/*
|--------------------------------------------------------------------------
| AnyQuestion Controller
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'any_question'], function(){
    Route::get('create', [AnyQuestionController::class, 'create'])->name('any_question.create');
    Route::get('index', [AnyQuestionController::class, 'index'])->name('any_question.index');
    Route::post('store', [AnyQuestionController::class, 'store'])->name('any_question.store');
    Route::get('edit/{id}', [AnyQuestionController::class, 'edit'])->name('any_question.edit');
    Route::post('update', [AnyQuestionController::class, 'update'])->name('any_question.update');
    Route::get('delete/{id}', [AnyQuestionController::class, 'delete'])->name('any_question.delete');
});