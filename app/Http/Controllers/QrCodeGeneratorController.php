<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrCodeGeneratorController extends Controller
{
    public function index(){
        return view('index');
    }
    public function createQrCode(Request $request)
    {

        $UrlLink = $request->input('url');

        $qrcode = QrCode::size(300)->generate($UrlLink);

        return view('qrcode', compact('qrcode'));
    }
}
