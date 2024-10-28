<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Reserva;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function admin()
    {
        $reservas = Reserva::all();
        return view('admin', compact('reservas'));
    }
}
