<?php

use App\Livewire\Home;
use App\Livewire\Service;
use App\Livewire\ServiceDetail;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/services', Service::class)->name('services');
Route::get('/service/{slug}', ServiceDetail::class)->name('serviceDetail');
