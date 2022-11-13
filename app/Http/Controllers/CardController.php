<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Applicant;
use Illuminate\Http\Request;
use PDF;

class CardController extends Controller
{
    public function getCard()
    {
        $data = [
            'nama' => 'Oxford',
            'reg' => '5009201112',
        ];
        $pdf = PDF::loadView('epc.card', $data);
        return $pdf->download('solution.pdf');
    }
}
