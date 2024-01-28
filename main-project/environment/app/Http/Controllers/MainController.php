<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\Inspection;
use App\Models\Vehicle;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

class MainController extends Controller
{
    /**
     * Show the application home page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $drivers = Driver::all();
        foreach ($drivers as $driver) {
            $driver->existent_vehicle = Vehicle::where('id_motorista', $driver->id)->first();
        };

        return view('main', [
            'drivers' => $drivers
        ]);
    }
}
