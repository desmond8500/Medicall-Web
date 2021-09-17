<?php

use App\Http\Controllers\MedicallController;
use App\Http\Livewire\Medicall\Admin\Index as AdminIndex;
use App\Http\Livewire\Medicall\Admin\Newsletter;
use App\Http\Livewire\Medicall\Admin\Rendezvous;
use App\Http\Livewire\Medicall\Admin\Users;
use App\Http\Livewire\Medicall\Layout\Index;
use App\Http\Livewire\Medicall\Pages\Blog;
use App\Http\Livewire\Medicall\Pages\Blogs;
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

Route::middleware(['auth'])->group(function () {
    // Common
    Route::get('/user/profile',   Profile::class)->name('user.profile');
    Route::get('/medicall/blog/list',  Blogs::class)->name('blog.list');
    Route::get('/medicall/blog/article/{article_id?}',  Blog::class)->name('blog.article');
    Route::get('/canvas', function () { })->name('canvas');

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

});

Route::prefix('canvas-ui')->group(function () {
    Route::prefix('api')->group(function () {
        Route::get('posts', [\App\Http\Controllers\CanvasUiController::class, 'getPosts']);
        Route::get('posts/{slug}', [\App\Http\Controllers\CanvasUiController::class, 'showPost'])
             ->middleware('Canvas\Http\Middleware\Session');

        Route::get('tags', [\App\Http\Controllers\CanvasUiController::class, 'getTags']);
        Route::get('tags/{slug}', [\App\Http\Controllers\CanvasUiController::class, 'showTag']);
        Route::get('tags/{slug}/posts', [\App\Http\Controllers\CanvasUiController::class, 'getPostsForTag']);

        Route::get('topics', [\App\Http\Controllers\CanvasUiController::class, 'getTopics']);
        Route::get('topics/{slug}', [\App\Http\Controllers\CanvasUiController::class, 'showTopic']);
        Route::get('topics/{slug}/posts', [\App\Http\Controllers\CanvasUiController::class, 'getPostsForTopic']);

        Route::get('users/{id}', [\App\Http\Controllers\CanvasUiController::class, 'showUser']);
        Route::get('users/{id}/posts', [\App\Http\Controllers\CanvasUiController::class, 'getPostsForUser']);
    });

    Route::get('/{view?}', [\App\Http\Controllers\CanvasUiController::class, 'index'])
         ->where('view', '(.*)')
         ->name('canvas-ui');
});
