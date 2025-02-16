<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrCodeController extends Controller
{
    public function generate()
    {
        $data = "Tanda Tangan Digital: User123 | " . now() . " | Valid";
        return view('tanda-tangan', compact('data'));
    }
}
