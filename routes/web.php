<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

Route::get('/', function () {
    return view('login');
})->name('login'); // asigna el nombre 'login' a la ruta para que el middleware('auth') pueda redirigir a esta ruta cuando un usuario no autenticado intente acceder a un sitio que requiere autenticación

Route::get('/register', function () {
    return view('register');
});

Route::post('/register', function () {
    $name = request('name');
    $email = request('email');
    $password = request('password');

    $user = User::create([
        'name' => $name,
        'email' => $email,
        'password' => Hash::make($password),
    ]);

    Auth::login($user);

    return redirect('/home');
});

Route::post('/login', function () {
    $email = request('email');
    $password = request('password');

    $credentials = [
        'email' => $email,
        'password' => $password,
    ];
    
    if (Auth::attempt($credentials)) { // del propio Laravel para comprobar que los datos de user son correctos comparandolos con la base de datos
        return redirect('/home');
    }
    
    return redirect('/');
});

Route::get('/home', function () {
    return view('home');
})->middleware('auth'); // middleware del propio Laravel para verificar si el usuario está autenticado

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
});
