<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\attivita;

class attivitaController extends Controller
{
    //
    public function confermaAttivita(Request $request){
$conferma= \App\attivita::find($request->id);
$conferma->attivato=1;
$conferma->save();
$listaAttivita= \App\attivita::where("attivato",0)->get();
return view ("adminconf",["listaAttivita"=>$listaAttivita]);


    }
    public function saveAttivita(Request $request){

        $validatedData = $request->validate([
            'cittaAttvita' => 'required',
            'attivita' => 'required',
            'nome' => 'required',
        ]);

foreach($request->cittaAttvita as $citta){

    foreach($request->attivita as $attivita){

            $nuovaAttivita= new attivita();
            $nuovaAttivita->nome=$request->nome;
            $nuovaAttivita->telefono=$request->telefono;
            $nuovaAttivita->email=$request->email;
            $nuovaAttivita->sitoweb=$request->sitoweb;
            $nuovaAttivita->note=$request->note;
            $nuovaAttivita->citta=$citta;
            $nuovaAttivita->attivita=$attivita;
            $nuovaAttivita->attivato=1;
            $nuovaAttivita->save();

    }
}

return redirect("nuova-attivita")->with("status","Grazie per aver caricato la nuova attività, presto la troverai online");
}
}
