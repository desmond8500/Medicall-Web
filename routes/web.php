<?php

use App\Http\Controllers\MedicallController;
use App\Http\Livewire\Medicall\Admin\Index as AdminIndex;
use App\Http\Livewire\Medicall\Admin\Newsletter;
use App\Http\Livewire\Medicall\Admin\Rendezvous;
use App\Http\Livewire\Medicall\Layout\Index;
use App\Http\Livewire\Medicall\Pages\Login;
use App\Http\Livewire\Medicall\Pages\Register;
use Illuminate\Support\Facades\Route;



Route::get('/', Index::class)->name('index');
Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');
Route::get('/logout', [MedicallController::class, 'logout'])->name('logout');
// Admin
Route::get('/admin/index', AdminIndex::class)->name('admin.index');
Route::get('/admin/newsletter', Newsletter::class)->name('admin.newsletter');
Route::get('/admin/rendezvous', Rendezvous::class)->name('admin.rv');
