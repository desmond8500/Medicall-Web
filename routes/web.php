<?php

use App\Http\Livewire\Medicall\Layout\Index;
use Illuminate\Support\Facades\Route;



Route::get('/', Index::class)->name('index');
