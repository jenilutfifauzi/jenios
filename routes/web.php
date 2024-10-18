<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Livewire\Homepage;

Route::get('/', Homepage::class)->name('homepage');