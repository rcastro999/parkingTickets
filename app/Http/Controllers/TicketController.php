<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class TicketController extends Controller
{
    //funcion index para ver los tickets almacenados en la base de datos
    public function index(): View{
        return view('tickets.index', ['tickets' => DB::table('tickets')->paginate(1)]);
    }
}
