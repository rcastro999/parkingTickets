<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveAndroidTerminalRequest;
use App\Models\AndroidTerminal;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Type\Integer;

class AndroidTerminalController extends Controller
{
    //Función para mostrar los dispositivos almacenados en la BD
    public function index(){
        
        $terminals = AndroidTerminal::join('companies', 'android_terminals.idCompany', '=', 'companies.idCompany')
        ->select('android_terminals.*', 'companies.*')
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

    //funcion para mostrar la vista de creacion de un POS
    public function create(){
        $companies = Company::all();
        return view('terminals.create', ['terminal' => new AndroidTerminal, 'companies' => $companies]);
    }

    //funcion para guardar un registro en la BD
    public function store(SaveAndroidTerminalRequest $request){
        AndroidTerminal::create($request->validated());

        return to_route('terminals.index')->with('status', 'Dispositivo POS creado con exito!');
    }
    
}
