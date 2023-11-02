<?php

use App\Room;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes(/*['register' => false]*/);

Route::as('public.')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('inicio');

    Route::get('/introduction', function () {
        return view('introduction');
    })->name('introduction');

    Route::get('/rooms-tariff', function () {
        $rooms = Room::paginate(6);
        return view('rooms_tariff', compact('rooms'));
    })->name('rooms-tariff');

    Route::get('/gallery', function () {
        return view('gallery');
    })->name('gallery');

    Route::get('/contact', function () {
        return view('contact');
    })->name('contact');

    Route::get('/tour/{room:slug}', function (?Room $room) {
        return view('tour', compact('room'));
    })->name('tour');


});

// Admin

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth', 'is_admin']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Rooms
    Route::delete('rooms/destroy', 'RoomsController@massDestroy')->name('rooms.massDestroy');
    Route::resource('rooms', 'RoomsController');

    // Events
    Route::delete('events/destroy', 'EventsController@massDestroy')->name('events.massDestroy');
    Route::resource('events', 'EventsController');

    Route::get('system-calendar', 'SystemCalendarController@index')->name('systemCalendar');

    Route::get('search-room', 'BookingsController@searchRoom')->name('searchRoom');
    Route::post('book-room', 'BookingsController@bookRoom')->name('bookRoom');

    Route::get('my-credits', 'BalanceController@index')->name('balance.index');
    Route::post('add-balance', 'BalanceController@add')->name('balance.add');

    Route::resource('transactions', 'TransactionsController')->only(['index']);
});
