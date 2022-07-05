<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Da;
use Carbon\Carbon;

class DaController extends Controller
{ 
    public function insert(Request $request){

    $demande=new Da();
    

    $demande->designation=$request->input('designation');
    $demande->reference=$request->input('reference');
    $demande->quantite=$request->input('quantite');
    $demande->cccout=$request->input('cccout');
    $demande->cnecono=$request->input('cnecono');
    $demande->delai=$request->input('delai');
    $demande->emetteur="ali";
    $mytime = Carbon::now();
    $demande->date= $mytime->toDateTimeString();
    
    $demande->acheteur=$request->input('acheteur');
    $demande->save();
    
    
       $url = "https://script.google.com/macros/s/AKfycbwR-nRPHikbPTn_q6TiWSzV8TSfkfiXlBCLEiN9Ti7Nqks8OPS1j_dv7Oj15JsMWFtd/exec";
       $ch = curl_init($url);
       curl_setopt_array($ch, [
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_POSTFIELDS => http_build_query([
             "recipient" => "ali.ouahli@etu.uae.ac.ma",
             "subject"   => "Vous avez une nouvelle demande achat",
             "body"      => "lalalalalala"
          ])
       ]);
    
   
    
    return redirect('/nouvelledm')->with('statut',"Demande Added Successfully");
}
}
