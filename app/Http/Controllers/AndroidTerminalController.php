<?php

namespace App\Http\Controllers;

use App\Models\AndroidTerminal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AndroidTerminalController extends Controller
{
    //Función para mostrar los dispositivos almacenados en la BD
    public function index(){
        
        $terminals = DB::table('android_terminals')
                    ->join('companies', 'android_terminals.idTerminal', '=', 'companies.idCompany')
                    ->select('android_terminals.*', 'companies.nameCompany')
                    ->get();

        return view('terminals.index', ['terminals' => $terminals]);

    }

    //función para mostrar el contenido del POS
    public function show(AndroidTerminal $terminal){
        return view('terminals.show', ['terminal' => $terminal]);
    }
}
