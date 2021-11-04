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

    $data=[
        "nome" => "giordano",
        "cognome" => "rinaldi",
        "asRoma" => [ "Dentro lo stadio ti sostengo
        Fuori io vado a caricar
        Sicuro che dopo non mi pento
        Sempre ti voglio accompagnar
        Daje Roma facci un gol
        Daje Roma facci un gol
        Daje Roma daje Roma facci un gol!",
        "Un capitano, c'è solo un capitano, un capitaaaanoooooo, c'è solo un capitaaaanooooo!!!!!!!",
        "voglia di stringersi un po...curva sud vecchie maniere...e si parlava di noi di giorno e sera alza al cielo la bandiera e grida forte roma vinci insieme a noi...se per innammorarmi ancora sosterrò sempre e solo la mia roma... lo sai perchè tutta la mia vita è giallorossa c'è una ragione ho la roma in fondo al cuore asroma io non vivo senza te",
        "ROMA, ROMA, ROMA
        Core de stà città
        Unico grande amore
        De tanta e tanta gente
        Che fai sospirà
        ROMA, ROMA, ROMA
        Lassace cantà
        Da sta voce nasce 'n coro
        Só centomila voci
        Che hai fatto ' nammorà
        ROMA, ROMA BELLA
        T'ho dipinta io
        Gialla come er sole
        Rossa come er core mio
        ROMA, ROMA, ROMA
        Nun te fa 'ncantà
        Tu sei nata grande
        E grande hai da restà
        ROMA, ROMA, ROMA!!!
        Core de sta città
        Unico grande amore
        De tanta e tanta gente
        CHE HAI FATTO INNAMMORÀ!!!"
        ]
    ];

    return view('homepage', $data);
});
