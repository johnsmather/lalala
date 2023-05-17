<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\Main;
use Illuminate\Support\Facades\Route;


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

Route::group(['namespace' => 'Main'], function () {
    Route::get('/', [Main\IndexController::class, '__invoke'])->name('index');
    Route::get('/profile', [Main\ProfileController::class, '__invoke', 'middleware' => ['auth']])->name('profile');

    Route::group(['namespace' => 'Theory', 'prefix' => 'theories'], function () {
        Route::get('/', [Main\Theory\IndexController::class, '__invoke'])->name('theories');
        Route::get('/{theory}', [Main\Theory\ShowController::class, '__invoke'])->name('theories.show');
    });

    Route::group(['namespace' => 'Logical', 'prefix' => 'logicals', 'middleware' => ['auth']], function () {
        Route::get('/', [Main\Logical\IndexController::class, '__invoke'])->name('logicals');;
        Route::get('/{logical}', [Main\Logical\ShowController::class, '__invoke'])->name('logicals.show');
    });

    Route::group(['namespace' => 'Test', 'prefix' => 'tests', 'middleware' => ['auth']], function () {
        Route::get('/', [Main\Test\IndexController::class, '__invoke'])->name('tests');;
        Route::get('/{test}', [Main\Test\ShowController::class, '__invoke'])->name('tests.show');
    });

    Route::group(['namespace' => 'Practice', 'prefix' => 'practices', 'middleware' => ['auth']], function () {
        Route::get('/', [Main\Practice\IndexController::class, '__invoke'])->name('practices');;
        Route::get('/{practice}', [Main\Practice\ShowController::class, '__invoke'])->name('practices.show');
    });
    Route::group(['namespace' => 'ComplitedTasks', 'prefix' => 'ComplitedTasks'], function () {
        Route::post('/', [Main\ComplitedTasks\StoreController::class, '__invoke'])->name('ComplitedTasks.store');
    });
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', [Admin\Main\IndexController::class, '__invoke'])->name('admin');
    });
    Route::group(['namespace' => 'Theory', 'prefix' => 'theories'], function () {
        Route::get('/', [Admin\Theory\IndexController::class, '__invoke'])->name('admin.theory');
        Route::get('/create', [Admin\Theory\CreateController::class, '__invoke'])->name('admin.theory.create');
        Route::post('/', [Admin\Theory\StoreController::class, '__invoke'])->name('admin.theory.store');
        Route::get('/{theory}', [Admin\Theory\ShowController::class, '__invoke'])->name('admin.theory.show');
        Route::get('/{theory}/edit', [Admin\Theory\EditController::class, '__invoke'])->name('admin.theory.edit');
        Route::patch('/{theory}', [Admin\Theory\UpdateController::class, '__invoke'])->name('admin.theory.update');
        Route::delete('/{theory}', [Admin\Theory\DeleteController::class, '__invoke'])->name('admin.theory.delete');
    });
    Route::group(['namespace' => 'Practice', 'prefix' => 'practices'], function () {
        Route::get('/', [Admin\Practice\IndexController::class, '__invoke'])->name('admin.practice');
        Route::get('/create', [Admin\Practice\CreateController::class, '__invoke'])->name('admin.practice.create');
        Route::post('/', [Admin\Practice\StoreController::class, '__invoke'])->name('admin.practice.store');
        Route::get('/{practice}', [Admin\Practice\ShowController::class, '__invoke'])->name('admin.practice.show');
        Route::get('/{practice}/edit', [Admin\Practice\EditController::class, '__invoke'])->name('admin.practice.edit');
        Route::patch('/{practice}', [Admin\Practice\UpdateController::class, '__invoke'])->name('admin.practice.update');
        Route::delete('/{practice}', [Admin\Practice\DeleteController::class, '__invoke'])->name('admin.practice.delete');
    });
    Route::group(['namespace' => 'Test', 'prefix' => 'tests'], function () {
        Route::get('/', [Admin\Test\IndexController::class, '__invoke'])->name('admin.test');
        Route::get('/create', [Admin\Test\CreateController::class, '__invoke'])->name('admin.test.create');
        Route::post('/', [Admin\Test\StoreController::class, '__invoke'])->name('admin.test.store');
        Route::get('/{test}', [Admin\Test\ShowController::class, '__invoke'])->name('admin.test.show');
        Route::get('/{test}/edit', [Admin\Test\EditController::class, '__invoke'])->name('admin.test.edit');
        Route::patch('/{test}', [Admin\Test\UpdateController::class, '__invoke'])->name('admin.test.update');
        Route::delete('/{test}', [Admin\Test\DeleteController::class, '__invoke'])->name('admin.test.delete');
    });
    Route::group(['namespace' => 'Logical', 'prefix' => 'logicals'], function () {
        Route::get('/', [Admin\Logical\IndexController::class, '__invoke'])->name('admin.logical');
        Route::get('/create', [Admin\Logical\CreateController::class, '__invoke'])->name('admin.logical.create');
        Route::post('/', [Admin\Logical\StoreController::class, '__invoke'])->name('admin.logical.store');
        Route::get('/{logical}', [Admin\Logical\ShowController::class, '__invoke'])->name('admin.logical.show');
        Route::get('/{logical}/edit', [Admin\Logical\EditController::class, '__invoke'])->name('admin.logical.edit');
        Route::patch('/{logical}', [Admin\Logical\UpdateController::class, '__invoke'])->name('admin.logical.update');
        Route::delete('/{logical}', [Admin\Logical\DeleteController::class, '__invoke'])->name('admin.logical.delete');
    });
    Route::group(['namespace' => 'ComplitedTasks', 'prefix' => 'ComplitedTasks'], function () {
        Route::get('/', [Admin\ComplitedTasks\IndexController::class, '__invoke'])->name('admin.ComplitedTasks');
        Route::get('/create', [Admin\ComplitedTasks\CreateController::class, '__invoke'])->name('admin.ComplitedTasks.create');
        Route::post('/', [Admin\ComplitedTasks\StoreController::class, '__invoke'])->name('admin.ComplitedTasks.store');
        Route::get('/{ComplitedTasks}', [Admin\ComplitedTasks\ShowController::class, '__invoke'])->name('admin.ComplitedTasks.show');
        Route::get('/{ComplitedTasks}/edit', [Admin\ComplitedTasks\EditController::class, '__invoke'])->name('admin.ComplitedTasks.edit');
        Route::patch('/{ComplitedTasks}', [Admin\ComplitedTasks\UpdateController::class, '__invoke'])->name('admin.ComplitedTasks.update');
        Route::delete('/{ComplitedTasks}', [Admin\ComplitedTasks\DeleteController::class, '__invoke'])->name('admin.ComplitedTasks.delete');
    });
    Route::group(['namespace' => 'TestTasks', 'prefix' => 'testTasks'], function () {
        Route::get('/', [Admin\testTasks\IndexController::class, '__invoke'])->name('admin.testTasks');
        Route::get('/create', [Admin\testTasks\CreateController::class, '__invoke'])->name('admin.testTasks.create');
        Route::post('/', [Admin\testTasks\StoreController::class, '__invoke'])->name('admin.testTasks.store');
        Route::get('/{testTasks}', [Admin\testTasks\ShowController::class, '__invoke'])->name('admin.testTasks.show');
        Route::get('/{testTasks}/edit', [Admin\testTasks\EditController::class, '__invoke'])->name('admin.testTasks.edit');
        Route::patch('/{testTasks}', [Admin\testTasks\UpdateController::class, '__invoke'])->name('admin.testTasks.update');
        Route::delete('/{testTasks}', [Admin\testTasks\DeleteController::class, '__invoke'])->name('admin.testTasks.delete');
    });
    Route::group(['namespace' => 'User', 'prefix' => 'users'], function () {
        Route::get('/', [Admin\User\IndexController::class, '__invoke'])->name('admin.user');
        Route::get('/create', [Admin\User\CreateController::class, '__invoke'])->name('admin.user.create');
        Route::post('/', [Admin\User\StoreController::class, '__invoke'])->name('admin.user.store');
        Route::get('/{user}', [Admin\User\ShowController::class, '__invoke'])->name('admin.user.show');
        Route::get('/{user}/edit', [Admin\User\EditController::class, '__invoke'])->name('admin.user.edit');
        Route::patch('/{user}', [Admin\User\UpdateController::class, '__invoke'])->name('admin.user.update');
        Route::delete('/{user}', [Admin\User\DeleteController::class, '__invoke'])->name('admin.user.delete');
    });
});

Auth::routes();
