<?php

namespace App\Http\Controllers;

use App\Models\AndroidTerminal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Type\Integer;

class AndroidTerminalController extends Controller
{
    //Función para mostrar los dispositivos almacenados en la BD
    public function index(){
        
        $terminals = AndroidTerminal::join('companies', 'android_terminals.idCompany', '=', 'companies.idCompany')
        ->select('android_terminals.*', 'companies.nameCompany')
        ->get();
    
        return view('terminals.index', ['terminals' => $terminals]);

    }

    //función para mostrar el contenido del POS
    public function show(AndroidTerminal $terminal)
    {
        $r_terminal = AndroidTerminal::join('companies', 'android_terminals.idCompany', '=', 'companies.idCompany')
            ->where('android_terminals.idTerminal', '=', $terminal->idTerminal)
            ->select('android_terminals.*', 'companies.nameCompany')
            ->first();
    
        return view('terminals.show', ['terminal' => $r_terminal]);
    }
    
}
