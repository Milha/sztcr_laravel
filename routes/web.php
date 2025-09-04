<?php

use Illuminate\Support\Facades\Route;
use App\Models\Radnik;
use App\Http\Controllers\DobavljacController;
use App\Http\Controllers\RadnikController;
use App\Http\Controllers\PonudaDobavljacaController;
use App\Http\Controllers\ProizvodController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\KorisnikController;


Route::get('/', function () {
    return view('index');
    // $radnici = Radnik::all();

    // dd($radnici);
});

Route::get('/administrator/admin', function () {
    return view('administrator/admin');
})->name('administrator.admin');

Route::get('/administrator/adminRadnici/adminRadnici', function () {
    return view('administrator/adminRadnici/adminRadnici');
});

Route::get('/zaposleni/pomoc', function () {
    return view('zaposleni.pomoc');
});

Route::get('/zaposleni', function () {
    return view('zaposleni.index');
})->name('zaposleni.index');

Route::get('/gosti', function () {
    return view('gosti.index');
})->name('gosti.index');

Route::get('/ponudjaci', function () {
    return view('ponudjaci.index');
})->name('ponudjaci.index');

// Rute za Korisnike
// Route::resource('/korisnici', KorisnikController::class);
Route::get('/korisnici', [KorisnikController::class, 'index'])->name('korisnici.index');
Route::get('/korisnici/create', [KorisnikController::class, 'create'])->name('korisnici.create');
Route::post('/korisnici', [KorisnikController::class, 'store'])->name('korisnici.store');
Route::get('/korisnici/{korisnik}', [KorisnikController::class, 'show'])->name('korisnici.show');
Route::get('/korisnici/{korisnik}/edit', [KorisnikController::class, 'edit'])->name('korisnici.edit');
Route::put('/korisnici/{korisnik}', [KorisnikController::class, 'update'])->name('korisnici.update');
Route::delete('/korisnici/{korisnik}/edit', [KorisnikController::class, 'destroy'])->name('korisnici.destroy');


// Dobavljaci rute
Route::get('/dobavljaci', [DobavljacController::class, 'index'])->name('dobavljaci.index');
Route::get('/dobavljaci/create', [DobavljacController::class, 'create'])->name('dobavljaci.create');
Route::post('/dobavljaci', [DobavljacController::class, 'store'])->name('dobavljaci.store');
Route::get('/dobavljaci/{dobavljac}', [DobavljacController::class, 'show'])->name('dobavljaci.show');
Route::get('/dobavljaci/{dobavljac}/edit', [DobavljacController::class, 'edit'])->name('dobavljaci.edit');
Route::put('/dobavljaci/{dobavljac}', [DobavljacController::class, 'update'])->name('dobavljaci.update');
Route::delete('/dobavljaci/{dobavljac}/edit', [DobavljacController::class, 'destroy'])->name('dobavljaci.destroy');

// Radnici rute

// Route::resource('radnici', RadnikController::class);
Route::get('/radnici', [RadnikController::class, 'index'])->name('radnici.index')->middleware(['auth', 'can:administrator']);
Route::get('/radnici/create', [RadnikController::class, 'create'])->name('radnici.create');;
Route::post('/radnici', [RadnikController::class, 'store'])->name('radnici.store');
Route::get('/radnici/{radnik}', [RadnikController::class, 'show'])->name('radnici.show');
Route::get('/radnici/{radnik}/edit', [RadnikController::class, 'edit'])->name('radnici.edit')->middleware(['auth', 'can:edit-radnik']);
Route::put('/radnici/{radnik}', [RadnikController::class, 'update'])->name('radnici.update');
Route::delete('/radnici/{radnik}', [RadnikController::class, 'destroy'])->name('radnici.destroy');

// Ponude dobavljaca rute

// Route::resource('radnici', RadnikController::class);
Route::get('/ponude_dobavljaca', [PonudaDobavljacaController::class, 'index'])->name('ponude_dobavljaca.index');
Route::get('/ponude_dobavljaca/create', [PonudaDobavljacaController::class, 'create'])->name('ponude_dobavljaca.create');;
Route::post('/ponude_dobavljaca', [PonudaDobavljacaController::class, 'store'])->name('ponude_dobavljaca.store');
Route::get('/ponude_dobavljaca/{ponuda}', [PonudaDobavljacaController::class, 'show'])->name('ponude_dobavljaca.show');
Route::get('/ponude_dobavljaca/{ponuda}/edit', [PonudaDobavljacaController::class, 'edit'])->name('ponude_dobavljaca.edit');
Route::put('/ponude_dobavljaca/{ponuda}', [PonudaDobavljacaController::class, 'update'])->name('ponude_dobavljaca.update');
Route::delete('/ponude_dobavljaca/{ponuda}', [PonudaDobavljacaController::class, 'destroy'])->name('ponude_dobavljaca.destroy');


// Proizvodi rute

// Route::resource('radnici', RadnikController::class);
Route::get('/proizvodi', [ProizvodController::class, 'index'])->name('proizvodi.index');
Route::get('/proizvodi/create', [ProizvodController::class, 'create'])->name('proizvodi.create');;
Route::post('/proizvodi', [ProizvodController::class, 'store'])->name('proizvodi.store');
Route::get('/proizvodi/{proizvod}', [ProizvodController::class, 'show'])->name('proizvodi.show');
Route::get('/proizvodi/{proizvod}/edit', [ProizvodController::class, 'edit'])->name('proizvodi.edit')->middleware(['auth', 'can:edit-radnik']);
Route::put('/proizvodi/{proizvod}', [ProizvodController::class, 'update'])->name('proizvodi.update');
Route::delete('/proizvodi/{proizvod}', [ProizvodController::class, 'destroy'])->name('proizvodi.destroy');


// Rute Registracija i Sesija

Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);




// Rute resources
// Route::resource('jobs', JobController::class);


// //  Route::get('/jobs/create', [JobController::class, 'create']);
//  Route::post('/jobs', [JobController::class, 'store'])->middleware('auth');
//  Route::get('/jobs/{job}', [JobController::class, 'show']);

//  Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])
//      ->middleware('auth')
//      ->can('edit', 'job');

//  Route::patch('/jobs/{job}', [JobController::class, 'update']);
//  Route::delete('/jobs/{job}', [JobController::class, 'destroy']);