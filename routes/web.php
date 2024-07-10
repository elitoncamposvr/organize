<?php

use App\Http\Controllers\ArchiveController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\FolderArchiveController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/users', [UserController::class, 'index'])->name('users');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users/store', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/update/{id}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/users/destroy', [UserController::class, 'destroy'])->name('users.destroy');

    Route::get('/company', [CompanyController::class, 'index'])->name('company.index');
    Route::get('/company/create', [CompanyController::class, 'create'])->name('company.create');
    Route::post('/company/store', [CompanyController::class, 'store'])->name('company.store');
    Route::get('/company/edit/{id}', [CompanyController::class, 'edit'])->name('company.edit');
    Route::put('/company/update/{id}', [CompanyController::class, 'update'])->name('company.update');
    Route::get('/company/show/{id}', [CompanyController::class, 'show'])->name('company.show');
    Route::delete('/company/destroy', [CompanyController::class, 'destroy'])->name('company.destroy');

    Route::get('/plans', [PlanController::class, 'index'])->name('plans.index');
    Route::get('/plans/create', [PlanController::class, 'create'])->name('plans.create');
    Route::post('/plans/store', [PlanController::class, 'store'])->name('plans.store');
    Route::get('/plans/edit/{id}', [PlanController::class, 'edit'])->name('plans.edit');
    Route::put('/plans/update/{id}', [PlanController::class, 'update'])->name('plans.update');
    Route::delete('/plans/destroy', [PlanController::class, 'destroy'])->name('plans.destroy');

    Route::get('/archives', [ArchiveController::class, 'index'])->name('archives.index');
    Route::get('/archives/list/{id}', [ArchiveController::class, 'list'])->name('archives.list');
    Route::get('/archives/create/{id}', [ArchiveController::class, 'create'])->name('archives.create');
    Route::post('/archives/store', [ArchiveController::class, 'store'])->name('archives.store');
    Route::get('/archives/search/{id}', [ArchiveController::class, 'search'])->name('archives.search');

    Route::get('/folderarchives', [FolderArchiveController::class, 'index'])->name('folderarchives.index');
    Route::get('/folderarchives/create', [FolderArchiveController::class, 'create'])->name('folderarchives.create');
    Route::post('/folderarchives/store', [FolderArchiveController::class, 'store'])->name('folderarchives.store');
    Route::get('/folderarchives/edit/{id}', [FolderArchiveController::class, 'edit'])->name('folderarchives.edit');
    Route::put('folderarchives/update/{id}', [FolderArchiveController::class, 'update'])->name('folderarchives.update');
    Route::get('/folderarchives/show/{id}', [FolderArchiveController::class, 'show'])->name('folderarchives.show');
    Route::delete('/folderarchives/destroy', [FolderArchiveController::class, 'destroy'])->name('folderarchives.destroy');

});


Route::get('/registers', function (){
    return view('registers');
})->name('registers');

require __DIR__.'/auth.php';
