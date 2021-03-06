<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Invoice;
use App\Model\Reseller;
use Illuminate\Support\Facades\DB;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_invoice = DB::table('invoices')->select('NUMERO_FATTURA', )->get();

        return view('index_invoice' , compact('list_invoice'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $invoice = new Invoice();
        $reseller_list =  DB::table('resellers')->select('id', 'reseller_name')->get();
        
        return view('create_edit_invoice', compact('invoice', 'reseller_list'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {    
        $data = $request->all();  
        $invoice = new Invoice;      
        $invoice->fill($data);      
        $invoice->save();

        return redirect()->route('show_invoice', $invoice->NUMERO_FATTURA);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Reseller $reseller , Invoice $invoice , $NUMERO_FATTURA)
    {      
        
        $invoice = DB::table('invoices')->select('resellers.*', 'invoices.*')->join('resellers', 'invoices.reseller_id', '=', 'resellers.id')->where('NUMERO_FATTURA', '=' , $NUMERO_FATTURA)->get();   
        return view("show_invoice", compact("NUMERO_FATTURA", "invoice"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
