<?php

namespace App\Http\Controllers;

use App\Domain\Gatcha;
use App\Models\Style;

class GatchaController extends Controller
{
    public function index()
    {
        return view('gatcha.index');
    }

    public function result(Style $style)
    {
        $styles = Gatcha::getStyles($style, 10);
        return view('gatcha.result', ['styles' => $styles]);
    }
}
