<?php

use App\Http\Controllers\mirrorDungeonsController;
use App\Http\Controllers\CommentsController;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return redirect()->route('LimbusCompany.index');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('profile.edit');
    Volt::route('settings/password', 'settings.password')->name('user-password.edit');
    Volt::route('settings/appearance', 'settings.appearance')->name('appearance.edit');

    Volt::route('settings/two-factor', 'settings.two-factor')
        ->middleware(
            when(
                Features::canManageTwoFactorAuthentication()
                    && Features::optionEnabled(Features::twoFactorAuthentication(), 'confirmPassword'),
                ['password.confirm'],
                [],
            ),
        )
        ->name('two-factor.show');
});

route::resource('/LimbusCompany', mirrorDungeonsController::class);

Route::post('/comments', [CommentsController::class, 'store'])
    ->middleware('auth')
    ->name('comments.store');

Route::delete('/comments/{id}', [CommentsController::class, 'destroy'])
    ->middleware('auth')
    ->name('comments.destroy');
