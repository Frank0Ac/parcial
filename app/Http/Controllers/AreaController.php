<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AreaConocimiento;

class AreaController extends Controller
{
    public function listarAreas()
    {
        $areas = AreaConocimiento::all();

        return view('areas.index', compact('areas'));
    }
}