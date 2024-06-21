<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function index()
    {
        return view('plans.plans', [
            'plans' => Plan::paginate(20),
        ]);
    }

    public function create()
    {
        return view('plans.plans_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'plan_name' => ['required','max:255', 'string', 'unique:plans'],
            'period_deficiency' => ['required', 'int'],
            'expiration' => ['required'],
            'description' => ['required', 'string', 'max:255'],
        ]);

        $plan = Plan::create([
            'plan_name' => $request->plan_name,
            'period_deficiency' => $request->period_deficiency,
            'expiration' => $request->expiration,
            'description' => $request->description,
        ]);

        event(new Registered($plan));

        return redirect(route('plans.index', absolute: false));

//        dump($request);
    }

    public function edit($id)
    {
        return view('plans.plans_edit', [
            'plan' => Plan::find($id),
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'plan_name' => ['required','max:255', 'string', 'unique:plans'],
            'period_deficiency' => ['required', 'int'],
            'expiration' => ['required'],
            'description' => ['required', 'string', 'max:255'],
        ]);

        $plan = Plan::find($id);
        $plan->update($request->all());

        return redirect(route('plans.index', absolute: false));
    }

    public function destroy(Request $request)
    {
        $plan = Plan::find($request->id);
        $plan->delete();

        return redirect(route('plans.index', absolute: false));
    }
}
