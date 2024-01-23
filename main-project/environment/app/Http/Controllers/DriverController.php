<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendRequest;
use App\Models\Driver;

class DriverController extends Controller
{
    public function index()
    {
        $drivers = Driver::all();

        return response()->json($drivers);
    }

    public function show($id)
    {
        $driver = Driver::find($id);

        return $driver ? response()->json($driver) : response()->json(null, 404);
    }

    public function store(SendRequest $request)
    {
        $driver = Driver::create($request->all());

        return back()->with("success", "Cadastro realizado com sucesso.");
    }

    public function update(SendRequest $request, $id)
    {
        $driver = Driver::find($id);

        if ($driver) {
            $driver->update($request->all());

            return back()->with("success", "Cadastro atualizado com sucesso.");
        } else {
            return response()->json(null, 404);
        }
    }

    public function destroy($id)
    {
        $driver = Driver::find($id);

        if ($driver) {
            $driver->delete();

            return response()->json($driver);
        } else {
            return response()->json(null, 404);
        }
    }
}
