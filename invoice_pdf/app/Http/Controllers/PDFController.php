<?php

namespace App\Http\Controllers;

use App\Model\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PDFController extends Controller
{
    // function to display preview
    public function preview(Invoice $invoice, $NUMERO_FATTURA)
    {
        $invoice = DB::table('invoices')->select()->where('NUMERO_FATTURA', '=' , $NUMERO_FATTURA)->get();

        $totale = DB::table('invoices')->select(DB::raw('SUM(IMPONIBILE_1 + IMPONIBILE_2) as total_sales'))->where('NUMERO_FATTURA', '=' , $NUMERO_FATTURA)->get();
        
        return view('graph', compact('NUMERO_FATTURA', 'invoice', 'totale'));
    }

    // function to generate PDF
    public function generatePDF(Invoice $invoice, $NUMERO_FATTURA)
    {
         $invoice = DB::table('invoices')->select()->where('NUMERO_FATTURA', '=' , $NUMERO_FATTURA)->get();
         $totale = DB::table('invoices')->select(DB::raw('SUM(IMPONIBILE_1 + IMPONIBILE_2) as total_sales'))->where('NUMERO_FATTURA', '=' , $NUMERO_FATTURA)->get();
        // dd($totale);
              
        $pdf = \PDF::loadView('graph', compact('NUMERO_FATTURA', 'invoice','totale'));       
         $pdf->setOption('enable-javascript', true);
        $pdf->setOption('javascript-delay', 5000);
        $pdf->setOption('enable-smart-shrinking', true);
        
        $pdf->setOption('enable-smart-shrinking', true);
        $pdf->setOption('enable-local-file-access', true);
        $pdf->setOption('no-stop-slow-scripts', true);
       
        return $pdf->download('graph.pdf');
    }
}
