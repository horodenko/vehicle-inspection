<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendRequest;
use App\Models\Driver;
use App\Models\Vehicle;

class DriverController extends Controller
{
    public readonly Driver $driver;

    public function index()
    {
        $drivers = Driver::all();

        return response()->json($drivers);
        // return view('drivers', ['drivers' => $drivers]);
    }

    public function show(Driver $driver)
    {
        return view('drivers_show', ['driver' => $driver]);
    }

    public function create()
    {
        return view('drivers_create');
    }

    public function edit(Driver $driver)
    {
        return view('drivers_edit', ['driver' => $driver]);
    }

    public function store(SendRequest $request)
    {
        $created = Driver::create([
            'nome' => $request->input('nome'),
            'cpf' => $request->input('cpf'),
            'rg' => $request->input('rg')
        ]);

        if ($created) {
            return redirect()->back()->with('message', 'Criado com sucesso.');
        } else {
            return redirect()->back()->with('message', 'Não foi possível realizar a criação.');
        }
    }

    public function update(SendRequest $request, string $id)
    {
        $filteredFields = $request->except(['_token', '_method']);

        $updated = Driver::where('id', $id)->update($filteredFields);

        if ($updated) {
            return redirect()->back()->with('message', 'Atualizado com sucesso.');
        } else {
            return redirect()->back()->with('message', 'Não foi possível atualizar.');
        }
    }

    public function destroy(SendRequest $request, string $id)
    {
        Driver::where('id', $id)->delete();

        return redirect()->route('home');
    }
}
