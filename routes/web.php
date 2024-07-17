<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\AuditsController;
use App\Http\Controllers\DemandesController;
use App\Http\Controllers\Employescontroller;
use App\Http\Controllers\MobiliersController;
use App\Http\Controllers\UsersController;
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


Route::get('/', function () {
    return view('welcome');
});

use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

// Route::get('/test', function () {

//     // Find the user with ID 1
//     $user = User::find(4);

//     // Assign the "admin" role to the user
//     $role = Role::find(1);
//     $user->syncRoles($role);

//     // Add the "articles" permission to the user
//     $permission = Permission::create(['name' => 'articles']);
//     $user->givePermissionTo($permission);
//     // return view('welcome');
// });

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/home', function () {
        return view('home');
    });

    Route::resource('employes', EmployesController::class);

    Route::get('/employes/{id}/vacation', [EmployesController::class, 'vacationRequest'])->name('vacation.request');

    Route::get('demandes/d-conge', function () {
        return view('demandes/d-conge/j-conge');
    });

    Route::get('demandes/d-retraite', function () {
        return view('demandes/d-retraite/t-retraite');
    });

    Route::get('demandes/conge', function () {
        return view('demandes/conge/conge');
    });

    Route::get('localisation', function () {
        return view('localisation/local');
    });
});

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/home', function () {
        return view('home');
    });

    Route::resource('articles', ArticlesController::class);
});


Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/home', function () {
        return view('home');
    });
    route::resource('mobiliers', MobiliersController::class);
});


Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/home', function () {
        return view('home');
    });
    route::resource('demandes',DemandesController::class);
});

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/home', function () {
        return view('home');
    });
    route::resource('audits',AuditsController::class);
});

route::resource('users',UsersController::class);