<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        return view('company.company', [
            'companies' => Company::paginate(20),
        ]);
    }

    public function create()
    {
        return view('company.company_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'company_name' => ['required', 'string', 'max:125'],
            'cpf_cnpj' => ['required', 'string', 'max:255'],
            'responsible_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:companies'],
            'phone' => ['required', 'string', 'max:11'],
            'cellphone' => ['required', 'string', 'max:11'],
        ]);
//
        $company = Company::create([
            'company_name' => $request->company_name,
            'cpf_cnpj' => $request->cpf_cnpj,
            'responsible_name' => $request->responsible_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'cellphone' => $request->cellphone,
        ]);

        event(new Registered($company));

        return redirect(route('company.index', absolute: false));

//        dump($request);
    }

    public function show($id)
    {
        return view('company.company_show',[
            'company' => Company::find($id),
        ]);
    }

    public function edit($id)
    {
        return view('company.company_edit', [
            'company' => Company::find($id),
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'company_name' => ['required', 'string', 'max:125'],
            'cpf_cnpj' => ['required', 'string', 'max:255'],
            'responsible_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:11'],
            'cellphone' => ['required', 'string', 'max:11'],
        ]);


        $company = Company::find($id);
        $company->update($request->all());

        return redirect(route('company.index', absolute: false));
    }

    public function destroy(Request $request)
    {
        $company = Company::find($request->id);
        $company->delete();

        return redirect(route('company.index', absolute: false));
    }
}
