<?php

use App\Http\Livewire\Medicall\Admin\Index as AdminIndex;
use App\Http\Livewire\Medicall\Layout\Index;
use Illuminate\Support\Facades\Route;



Route::get('/', Index::class)->name('index');
Route::get('/admin/index', AdminIndex::class)->name('admin.index');
