<?php

use App\Http\Livewire\BootstrapTables;
use App\Http\Livewire\Components\Buttons;
use App\Http\Livewire\Components\Forms;
use App\Http\Livewire\Components\Modals;
use App\Http\Livewire\Components\Notifications;
use App\Http\Livewire\Components\Typography;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\SettingController;
use App\Http\Livewire\Err404;
use App\Http\Livewire\Err500;
use App\Http\Livewire\ResetPassword;
use App\Http\Livewire\ForgotPassword;
use App\Http\Livewire\Lock;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Profile;
use App\Http\Livewire\ProfileController;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\ForgotPasswordExample;
use App\Http\Livewire\Index;
use App\Http\Livewire\LoginExample;
use App\Http\Livewire\Products;
use App\Http\Livewire\ProductsAdd;
use App\Http\Livewire\Projects;
use App\Http\Livewire\ProjectsAdd;
use App\Http\Livewire\Engineers;
use App\Http\Livewire\EngineersAdd;
use App\Http\Livewire\ProfileExample;
use App\Http\Livewire\RegisterExample;
use App\Http\Livewire\Transactions;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ResetPasswordExample;
use App\Http\Livewire\UpgradeToPro;
use App\Http\Livewire\Users;
use App\Http\Livewire\Users\UserController;
use App\Http\Livewire\Engineer\EngineerController;
use App\Http\Livewire\User\UserController as UserUserController;
use App\Http\Livewire\UserBookingsController;
use App\Http\Livewire\EngineerBookingsController;
use App\Models\Engineer;

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



Route::get('/', Index::class)->name('index');
// Route::redirect('/', '/A');

Route::get('/register', Register::class)->name('register');

Route::get('/login', Login::class)->name('login');

Route::get('/forgot-password', ForgotPassword::class)->name('forgot-password');

Route::get('/reset-password/{id}', ResetPassword::class)->name('reset-password')->middleware('signed');

Route::get('/404', Err404::class)->name('404');
Route::get('/500', Err500::class)->name('500');
Route::get('/upgrade-to-pro', UpgradeToPro::class)->name('upgrade-to-pro');


Route::group(['middleware' => 'checkRole:admin'], function () {

Route::middleware('auth')->group(function () {
    Route::get('/profile', Profile::class)->name('profile');
    Route::get('/profile-example', ProfileExample::class)->name('profile-example');
    Route::get('/users', Users::class)->name('users');
    Route::get('/login-example', LoginExample::class)->name('login-example');
    Route::get('/register-example', RegisterExample::class)->name('register-example');
    Route::get('/forgot-password-example', ForgotPasswordExample::class)->name('forgot-password-example');
    Route::get('/reset-password-example', ResetPasswordExample::class)->name('reset-password-example');
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/setting', SettingController::class)->name('setting');

    Route::group(['prefix' => 'products', 'as' => 'products.'], function () {
        Route::get('/', Products::class)->name('products');
        Route::get('/add', ProductsAdd::class, 'add')->name('add');
    });


    Route::group(['prefix' => 'projects', 'as' => 'projects.'], function () {
        Route::get('/', Projects::class)->name('projects');
        Route::get('/add', ProjectsAdd::class, 'add')->name('add');
    });


    Route::group(['prefix' => 'engineers', 'as' => 'engineers.'], function () {
        Route::get('/', Engineers::class)->name('engineers');
        Route::get('/add', EngineersAdd::class, 'add')->name('add');
    });

    // Route::get('/projects', Projects::class)->name('projects');


    Route::get('/transactions', Transactions::class)->name('transactions');
    Route::get('/bootstrap-tables', BootstrapTables::class)->name('bootstrap-tables');
    Route::get('/lock', Lock::class)->name('lock');
    Route::get('/buttons', Buttons::class)->name('buttons');
    Route::get('/notifications', Notifications::class)->name('notifications');
    Route::get('/forms', Forms::class)->name('forms');
    Route::get('/modals', Modals::class)->name('modals');
    Route::get('/typography', Typography::class)->name('typography');
});

});





//user

Route::group(['middleware' => 'checkRole:user'], function () {

    Route::middleware('auth')->group(function () {

    Route::group(['prefix' => 'user', 'as' => 'user.'], function () {

        Route::get('/', UserUserController::class)->name('user');
        Route::get('/bookings', UserBookingsController::class)->name('bookings');



    });
});

});





//engineer

Route::group(['middleware' => 'checkRole:engineer'], function () {

    Route::middleware('auth')->group(function () {
        Route::group(['prefix' => 'engineer', 'as' => 'user.'], function () {

        Route::get('/engineer', EngineerController::class)->name('engineer');
        Route::get('/bookings', EngineerBookingsController::class)->name('bookings');

        });
    });

});



Route::middleware('auth')->group(function () {

    Route::get('/profile', ProfileController::class)->name('profile');

});