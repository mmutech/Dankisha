<?php

use App\Livewire\Pages\LandingPage;
use App\Livewire\Pages\ServiceDetails;
use Illuminate\Support\Facades\Route;

Route::get('/', LandingPage::class);
Route::get('/service-details/{slug}', ServiceDetails::class);
