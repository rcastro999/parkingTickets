<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveCompanyRequest;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    //function index para mostrar los registros almacenados en la BD
    public function index(){

        $companies = Company::get();

        return view('companies.index', ['companies' => $companies]);
    }

    //function show para mostrar el detalle del registro seleccionado
    public function show(Company $company){
        return view('companies.show', ['company' => $company]);
    }

    //funcion para mostrar la vista de creacion de una empresa
    public function create(){
        return view('companies.create', ['company' => new Company]);
    }

    //Función para guardar el registro en la BD
    public function store(SaveCompanyRequest $request){

        Company::create($request->validated());

        return to_route('companies.index')->with('status', 'Empresa creada');

    }

    //Función para mostrar la vista de edición
    public function edit(Company $company){
        return view('companies.edit', ['company' => $company]);
    }

    public function update(SaveCompanyRequest $request, Company $company){
        $company->update($request->validated());

        return to_route('companies.show', $company)->with('status', 'Empresa actualizada!');
    }
}
