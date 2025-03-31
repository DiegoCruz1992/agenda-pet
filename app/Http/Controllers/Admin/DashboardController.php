<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $title = 'Dashboard';
        // Agrupa agendamentos por dia e conta quantos existem em cada um
        /* $agendamentos = Agendamento::selectRaw('DATE(data_horario) as dia, COUNT(*) as total')
        ->groupBy('dia')
        ->orderBy('dia', 'asc')
        ->get(); */

        // Formata os dados para o gráfico
        /* $labels = $agendamentos->pluck('dia');
        $data = $agendamentos->pluck('total'); */
        $labelsDias = ['20-03-2025', '21-03-2025', '22-03-2025', '23-03-2025', '24-03-2025', '25-03-2025', '26-03-2025'];
        $dataDias = [5, 8, 3, 11, 7, 4, 2];

        $labelsPort = ['Pequeno', 'Médio', 'Grande', 'Outros'];
        $dataAmount = [15, 10, 5, 3]; // Quantidade de pets de cada porte

        return view('dashboard.index', compact('labelsDias', 'dataDias', 'labelsPort', 'dataAmount', 'title'));
    }
}
