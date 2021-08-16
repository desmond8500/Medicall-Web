<?php

use App\Http\Livewire\Medicall\Admin\Index as AdminIndex;
use App\Http\Livewire\Medicall\Admin\Newsletter;
use App\Http\Livewire\Medicall\Admin\Rendezvous;
use App\Http\Livewire\Medicall\Layout\Index;
use Illuminate\Support\Facades\Route;



Route::get('/', Index::class)->name('index');
// Admin
Route::get('/admin/index', AdminIndex::class)->name('admin.index');
Route::get('/admin/newsletter', Newsletter::class)->name('admin.newsletter');
Route::get('/admin/rendezvous', Rendezvous::class)->name('admin.rv');
