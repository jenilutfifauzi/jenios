<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Livewire\Contact;
use App\Livewire\Homepage;

Route::get('/', Homepage::class)->name('homepage');
Route::get('/contact', Contact::class)->name('contact');
