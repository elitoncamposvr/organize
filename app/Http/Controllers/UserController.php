<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rules;

class UserController extends Controller
{
    public function index()
    {
        return view('users', [
            'users' => User::query()
                ->select(
                    'users.id as user_id',
                    'users.email as user_email',
                    'users.name as user_name',
                    'companies.company_name as company_name',
                    'users.is_admin as user_is_admin',
                    'users.user_level as user_level',
                )
            ->leftJoin('companies', 'users.company_id', '=', 'companies.id')
            ->paginate(20),
        ]);
    }

    public function create()
    {
//        $companies = Company::all();
//
//        dump($companies);

        return view('users_create', [
            'companies' => Company::all(),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'company_id' => ['required'],
            'password' => ['required', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'company_id' => $request->company_id,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        return redirect(route('users', absolute: false));
    }

    public function edit($id)
    {

        return view('users_edit', [
            'users' => User::find($id),
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255'],
        ]);

        $user = User::find($id);
        $user->update($request->all());

        return Redirect::to('/users');
    }

    public function destroy(Request $request)
    {
        $user = User::find($request->id);
        $user->delete();

        return redirect('/users');
    }
}
