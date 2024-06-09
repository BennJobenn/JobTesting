<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/firstpage', function () {

    $name = [
        ['id' => 1, 'names' => 'John Doe','email' => 'johndoe@gmail.com', 'age' => 24],
        ['id' => 2, 'names' => 'John Does','email' => 'johndoes@gmail.com', 'age' => 25],
        ['id' => 3, 'names' => 'John Doess','email' => 'johndoess@gmail.com', 'age' => 26],
        ['id' => 4, 'names' => 'John Doesss','email' => 'johndoesss@gmail.com', 'age' => 27]
    ];

    return view('firstpage', ['name' =>  $name]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
