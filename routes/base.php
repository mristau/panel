<?php

use App\Livewire\Installer\PanelInstaller;
use App\Filament\Pages\ContentPage;
use Illuminate\Support\Facades\Route;

Route::get('installer', PanelInstaller::class)->name('installer')
    ->withoutMiddleware(['auth']);

Route::get('/c/{slug}', ContentPage::class)->name('content-page')
     ->withoutMiddleware(['auth']);
