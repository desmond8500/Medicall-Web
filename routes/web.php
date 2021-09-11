<?php

use App\Http\Controllers\MedicallController;
use App\Http\Livewire\Medicall\Admin\Index as AdminIndex;
use App\Http\Livewire\Medicall\Admin\Newsletter;
use App\Http\Livewire\Medicall\Admin\Rendezvous;
use App\Http\Livewire\Medicall\Admin\Users;
use App\Http\Livewire\Medicall\Layout\Index;
use App\Http\Livewire\Medicall\Pages\Login;
use App\Http\Livewire\Medicall\Pages\MedicPage;
use App\Http\Livewire\Medicall\Pages\Register;
use App\Http\Livewire\Medicall\Pages\UserPage;
use App\Http\Livewire\Tiny\User\Dossier;
use App\Http\Livewire\Tiny\User\Profile;
use App\Http\Livewire\Tiny\User\Rendezvous as UserRendezvous;
use App\Http\Livewire\Tiny\User\Traitement;
use Illuminate\Support\Facades\Route;



Route::get('/',         Index::class)->name('index');
Route::get('/login',    Login::class)->name('login');
Route::get('/register', Register::class)->name('register');
Route::get('/logout',   [MedicallController::class, 'logout'])->name('logout');

// Common
Route::get('/user/profile',   Profile::class)->name('user.profile');

// User
Route::get('/user/index',       UserPage::class)->name('user.index');
Route::get('/user/dossier',     Dossier::class)->name('user.dossier');
Route::get('/user/rv',          UserRendezvous::class)->name('user.rv');
Route::get('/user/traitement',  Traitement::class)->name('user.traitement');
// Medic
Route::get('/medic/index',      MedicPage::class)->name('medic.index');

// Admin
Route::get('/admin/index',      AdminIndex::class)->name('admin.index');
Route::get('/admin/newsletter', Newsletter::class)->name('admin.newsletter');
Route::get('/admin/rendezvous', Rendezvous::class)->name('admin.rv');
Route::get('/admin/users',      Users::class)->name('admin.users');
