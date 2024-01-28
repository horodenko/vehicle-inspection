<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendRequest;
use App\Models\Driver;
use App\Models\Vehicle;

class VehicleController extends Controller
{
    public readonly Vehicle $vehicle;

    public function index()
    {
        $vehicles = Vehicle::all();

        return response()->json($vehicles);
        // return view('vehicles', ['vehicles' => $vehicles]);
    }

    public function show(Vehicle $vehicle)
    {
        return view('vehicles_show', ['vehicle' => $vehicle]);
    }

    public function create()
    {
        return view('vehicles_create');
    }

    public function edit(Vehicle $vehicle)
    {
        return view('vehicles_edit', ['vehicle' => $vehicle]);
    }

    public function store(SendRequest $request)
    {
        // dump($request->intinput('id_motorista'));
        $created = Vehicle::create([
            'placa' => $request->input('placa'),
            'tipo_veiculo' => $request->input('tipo_veiculo'),
            'id_motorista' => (int)$request->input('id_motorista')
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

        $updated = Vehicle::where('id', $id)->update($filteredFields);

        if ($updated) {
            return redirect()->back()->with('message', 'Atualizado com sucesso.');
        } else {
            return redirect()->back()->with('message', 'Não foi possível atualizar.');
        }
    }

    public function destroy(string $id)
    {
        Vehicle::where('id', $id)->delete();

        return redirect()->route('home');
    }
}
