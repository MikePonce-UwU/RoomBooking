<?php

use App\Http\Livewire\SearchRoom;
use Illuminate\Support\Facades\Route;

Route::get('/booking', SearchRoom::class)->name('search-room');