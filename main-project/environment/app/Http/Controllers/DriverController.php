<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendRequest;
use App\Models\Driver;

class DriverController extends Controller
{
    public function index()
    {
        $existentDrivers = Driver::all();

        return response()->json($existentDrivers);
    }

    public function show($driver)
    {
        $existentDriver = Driver::find($driver);

        return $existentDriver ? response()->json($existentDriver) : response()->json(null, 404);
    }

    public function store(SendRequest $request)
    {
        $driverToCreate = Driver::create($request->all());

        return back()->with("success", "Cadastro realizado com sucesso.");
    }

    public function update(SendRequest $request, $driver)
    {
        $existentDriver = Driver::find($driver);

        if ($existentDriver) {
            $existentDriver->update($request->all());

            return back()->with("success", "Cadastro atualizado com sucesso.");
        } else {
            return response()->json(null, 404);
        }
    }

    public function destroy($driver)
    {
        $existentDriver = Driver::find($driver);

        if ($existentDriver) {
            $existentDriver->delete();

            return response()->json($driver);
        } else {
            return response()->json(null, 404);
        }
    }
}
