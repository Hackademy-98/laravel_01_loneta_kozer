<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SerieController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',function(){
    return view('index');
})->name('home');

// rotta per i film
Route::get('/films',function(){
    $films =[
        ["name" => "MAFIA  MAMMA","year" =>2023, "descripsion" => "E una commedia esilarante e ricca di azione su una donna americana di periferia che eredita l'impero mafioso","img" => "https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSU7noJClHMcYVG4FcKUnNisxHtA5s_8Z0dWFu9ZasED-fZHCVM" ],
        ["name" => "FAIR PLAY","year" =>2023, "descripsion" => "presenta come un thriller che punta a far riflettere sul tema dell'ambizione femminile sia percepita dagli uomini ...","img" => "https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcR7HNiTEFq6Abrngpj_dHi0CxbeEm2QwE7z_D1W0WslUgePvOoQ" ],
        ["name" => " THE BURIAL","year" =>2023, "descripsion" => "Con l'aiuto di due avvocati, una famiglia lotta strenuamente per mantenere l'agenzia funebre ereditata da mamma e papà, cercando di sopravvivere ...","img" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ5x8VdPEiienWJ7a7HK7PsyBbwnd5PoZvuRDIQIDXq8ABOKQtp" ],
        ["name" => "AFTER 5","year" =>2023, "descripsion" => "Um amore infinito","img" => "https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcT4eDHyvbqHn3tUn3dyLrb0f06PFl_OHCYMFtlt43amqtb6mZ9m" ],
        ["name" => "LOVE AGAIN","year" =>2023, "descripsion" => "Lui viene investito da un autista ubriaco in pieno giorno, per lei sopravvivere al dolore sarà difficilissimo. Troverà come escamotage quello di ...","img" => "https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRg0tDuv-XDZ8DehCMpgaw7eFgS60MCF_AHUCe22wN5PoINcqOA" ],
        ["name" => "AKA","year" =>2023, "descripsion" => "Adam Franco, agente sotto copertura, deve affrontare una nuova missione: infiltrarsi in un'organizzazione criminale francese per cercare di sventare un attacco ...","img" => "https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRzYBRApOcpxQf07G6FikRn4YbwrMu6VyiVMWG2finj3FGxV6OT" ],
        ["name" => "LA SIRENETTA","year" =>2023, "descripsion" => "In questa rivisitazione realistica e mozzafiato del classico musical d'animazione, una giovane e vivace sirena è determinata a seguire il suo cuore.","img" => "https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcSf5RmFOKE6yMFbd4jF9ye9WGcjtcRNMXOuyOmXE0RT9urqqP3w" ],
        ["name" => "MAVKA","year" =>2023, "descripsion" => "Mavka è una bellissima ninfa della foresta conosciuta dagli umani come Anima della Foresta. Insieme al suo animale custode difende la foresta dai pericoli ...","img" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTlA3ZMWo02mvBw00sNKgBGgqY3Oyu4xN6q0CYo6fTaL4qqG6Rl" ],
        ["name" => "LA PRINCIPESSA INCANTATA","year" =>2018, "descripsion" => "Un bardo si innamora della principessa Mila ma quando la ragazza viene rapita, dovrà fare di tutto per riuscire a salvarla.","img" => "https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcS9LoVmOeUljtDfsLt2PmU5CKzSrqYRqXZ-g7IrMWuYIv1LvSdY" ],
        ["name" => "SUPEREROI","year" =>2000, "descripsion" => "Supereroi. Servono i superpoteri per amarsi tutta una vita,Anna e Marco lo sanno bene. Lei è unafumettista dal carattere impulsivo, nemicadelle convenzioni; ...","img" => "https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRMaj2DJ2oVa30tIXwJ1r-cpFFLO-nDPDycpMflzH5LWfmVf5SM" ],
    ];
    return view('films', ['film'=>$films]);
    
})->name('index.films');

Route::get('/series',[SerieController::class,'index'])->name('index.series');
   

// rotta della pagina del detaglio delle serie TV
Route::get('/serie/detail/{name}',[SerieController::class,'show'])->name('show.series');

