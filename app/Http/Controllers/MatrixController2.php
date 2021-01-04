<?php

namespace App\Http\Controllers;

class MatrixController2 extends Controller
{
    public function generate()
    {
        return response()->json(array('ok' => true, 'thesisResearch' => 'gaaa', 200));
    }
}
