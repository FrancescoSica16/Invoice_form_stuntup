<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" type='text/css' href="C:\Users\cicci\Documents\Invoice_form_stuntup\invoice_pdf\public\css\invoice.css"> 
    <title>Fattura</title>
</head>

<body>
    <div id="invoice-container">
    <header class="clearfix">
      <div id="logo">
         <img src='C:\Users\cicci\Documents\Invoice_form_stuntup\invoice_pdf\storage\app\public\futura_energia_logo.jpg'>
      </div>
@foreach ($invoice as $item)
      <h1>Fattura n° {{$item->NUMERO_FATTURA}}</h1>
      <div id="company" class="clearfix">
        <div>{{$item->RESELLER}}</div>
        <div>Via delle bicocche<br /> SA 84084</div>
        <div>(602) 519-0450</div>
        <div><a href="mailto:company@example.com">futura.energia@example.com</a></div>
      </div>
      <div id="project">
        <div><span>Tipo fattura</span> {{$item->RESELLER}}/div>
        <div><span>CLIENTE</span> {{$item->CODICE_CLIENTE}}</div>
        <div><span>INDIRIZZO </span> {{$item->INDIRIZZO_FATTURAZIONE}}</div>
        <div><span>EMAIL</span> <a href="mailto:john@example.com">CLIENTE@example.com</a></div>
        <div><span>EMISSIONE</span> {{$item->DATA_FATTURA}}</div>
        <div><span>SCADENZA</span> {{$item->DATA_SCADENZA}}</div>
      </div>
    </header>
    <main>
      <table>
        <thead>
          <tr>          
            <th class="desc">DESCRIZIONE</th>
            <th class="unit">IMPONIBILE</th>          
          </tr>
        </thead>
        <tbody>
          <tr>           
            <td class="desc">{{$item->DESCRIZIONE_1}}</td>
            <td class="unit">{{$item->IMPONIBILE_1}} &euro;</td>          
          </tr>
          <tr>          
            <td class="desc">{{$item->DESCRIZIONE_2}}</td>
            <td class="unit">{{$item->IMPONIBILE_2}} &euro;</td>
          </tr>
          <tr>
            <td class="desc" >IVA</td>
            <td class="total">{{$item->IVA}}</td>
          </tr>  
          @endforeach   
          @foreach ($totale as $tot)
          <tr>
            <td class="grand total">TOTALE</td>
            <td class="grand total">{{$tot->total_sales}} &euro;</td>
          </tr>
          @endforeach             
        </tbody>
      </table>
    </main>
    
    <footer>
      FOOTER FATTURA
    </footer>
    </div>
</body>
</html>