<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\User; // Pastikan model ini sesuai dengan yang Anda gunakan

class PDFController extends Controller
{
    public function generatePDF()
    {
        $users = User::all();
        $data = ['user' => $users];
        
        $pdf = PDF::loadView('pdf_view', $data);
        
        // Menggunakan metode stream untuk menampilkan PDF di browser
        return $pdf->stream('document.pdf');
    }
}