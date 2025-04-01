<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function historia()
    {
        return view('historia');
    }

    public function contato()
    {
        return view('contato');
    }

    public function agendamento()
    {
        return view('agendamento');
    }
}
