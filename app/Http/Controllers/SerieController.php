<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Serie;

class SerieController extends Controller
{
   public function index(){
    $serieTV = Serie::all();
    return view('series',compact('serieTV')) ;
    //     $series = [
    //        ["name" => "Gilmore Girls", "year" =>2000, "descripsion" => "Racconta le vicende di madre e figlia unite da un legame molto profondo", "img" => "https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcTpLxqSb26vnIDFdnIr54hjXMZHjXLCYJmIhaNnr1xN_i22HZGK"],
    //        ["name" => "Viking", "year" =>2016, "descripsion" => "Per salvare Freydis, Leif accetta di unirsi all'assedio di Londra con Canuto e Harald. La regina Emma invia il figliastro Edmondo ad assicurare l'aiuto di ...", "img" => "https://www.filmtv.it/imgbank/GALLERYXL/R201712/Viking_fronte_NEUTRO.jpg"],
    //        ["name" => "Gomorra", "year" =>2008, "descripsion" => "Liberamente ispirata all'omonimo romanzo di Roberto Saviano, la serie narra le vicende dei clan camorristici di varie zone di Napoli, in particolare ... ", "img" => "https://venetofilmcommission.com/wp-content/uploads/2022/02/2008-GOMORRA-ESP.webp"],
    //        ["name" => "Beverly Hills 90210", "year" =>1990, "descripsion" => "A group of friends living in Beverly Hills, California make their way through life from their school days into adulthood.A group of friends living in Beverly ...", "img" => "https://m.media-amazon.com/images/I/81+hRhp7djL._AC_UF1000,1000_QL80_.jpg"],
    //        ["name" => "The O.C.", "year" =>2002, "descripsion" => "Ryan, adolescente tormentato, si trasferisce da un quartiere disagiato a casa dei Cohen, nella benestante Orange County. Sandy e Kirsten sono contenti che Ryan ...", "img" => "https://m.media-amazon.com/images/I/61-8E1ivkJL._SL500_.jpg"],
    //        ["name" => "One Tree Hill", "year" =>2003, "descripsion" => "Tree Hill è una piccola città, forse troppo piccola per i due fratellastri Lucas e Nathan Scott che hanno un padre in comune, ma vite molto diverse. Nathan è il ...", "img" => "https://m.media-amazon.com/images/I/715CXlw5dyL._AC_UF1000,1000_QL80_.jpg"]
    //    ];
   
    //    return view('series',['serieTV'=>$series]);
}

public function show($id) {
    $data = Serie::find($id);
    return view('detail',compact('data'));

    // $series = [
    //     ["name" => "Gilmore Girls", "year" =>2000, "descripsion" => "Racconta le vicende di madre e figlia unite da un legame molto profondo", "img" => "https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcTpLxqSb26vnIDFdnIr54hjXMZHjXLCYJmIhaNnr1xN_i22HZGK"],
    //     ["name" => "Viking", "year" =>2016, "descripsion" => "Per salvare Freydis, Leif accetta di unirsi all'assedio di Londra con Canuto e Harald. La regina Emma invia il figliastro Edmondo ad assicurare l'aiuto di ...", "img" => "https://www.filmtv.it/imgbank/GALLERYXL/R201712/Viking_fronte_NEUTRO.jpg"],
    //     ["name" => "Gomorra", "year" =>2008, "descripsion" => "Liberamente ispirata all'omonimo romanzo di Roberto Saviano, la serie narra le vicende dei clan camorristici di varie zone di Napoli, in particolare ... ", "img" => "https://venetofilmcommission.com/wp-content/uploads/2022/02/2008-GOMORRA-ESP.webp"],
    //     ["name" => "Beverly Hills 90210", "year" =>1990, "descripsion" => "A group of friends living in Beverly Hills, California make their way through life from their school days into adulthood.A group of friends living in Beverly ...", "img" => "https://m.media-amazon.com/images/I/81+hRhp7djL._AC_UF1000,1000_QL80_.jpg"],
    //     ["name" => "The O.C.", "year" =>2002, "descripsion" => "Ryan, adolescente tormentato, si trasferisce da un quartiere disagiato a casa dei Cohen, nella benestante Orange County. Sandy e Kirsten sono contenti che Ryan ...", "img" => "https://m.media-amazon.com/images/I/61-8E1ivkJL._SL500_.jpg"],
    //     ["name" => "One Tree Hill", "year" =>2003, "descripsion" => "Tree Hill è una piccola città, forse troppo piccola per i due fratellastri Lucas e Nathan Scott che hanno un padre in comune, ma vite molto diverse. Nathan è il ...", "img" => "https://m.media-amazon.com/images/I/715CXlw5dyL._AC_UF1000,1000_QL80_.jpg"]
    // ];
    // per ogni elemento presente in series
    // se il nome e uguale al nome del singolo elemento dell'array
    // manda il singolo elemento all lista detail
    // foreach($series as $serie){
    //     if($name == $serie["name"]){
    //         return view('detail',["serie"=>$serie]);
    //     }
    // }
}
  public function create(){
    return view('serie.create');
  
}
public function store(Request $request){
    Serie::create([
        "title"=> $request->title,
        "year" => $request->year,
        "description" => $request->description
    ]);
    return redirect()->route('create.serie');
}
}
