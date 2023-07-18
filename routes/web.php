<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {


    $navbar = [

        "listnavbar" => [

            [
                "name" => "Home",
                "link" => ('home'),
                "selected" => true
            ],
            [
                "name" => "Shop",
                "link" => "#",
                "selected" => true
            ],
            [
                "name" => "Contacts",
                "link" => "#",
                "selected" => true
            ],
            [
                "name" => "About us",
                "link" => "#",
                "selected" => true
            ],
        ]
        
    ];




    return view('header',$navbar);

})->name('header');


Route::get('/home', function () {


    $listhome = [

        "listhome" => [

            [
                "name" => "Forge",
                "link" => "#",
                "selected" => true
            ],
            [
                "name" => "Vapor",
                "link" => "#",
                "selected" => true
            ],
            [
                "name" => "Ecosystem",
                "link" => "#",
                "selected" => true
            ],
            [
                "name" => "News",
                "link" => "#",
                "selected" => true
            ],
            [
                "name" => "Partnes",
                "link" => "#",
                "selected" => true
            ],
        ]
        
    ];




    return view('home',$listhome);

})->name('home');
