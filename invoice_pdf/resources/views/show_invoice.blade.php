<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Fattura</title>
</head>
<body>
     <h3>la tua fattura n°{{$NUMERO_FATTURA}}</h3>
     
<img src="{{asset('storage\futura_energia_logo.jpeg')}}" alt="">
    <table class="table table-dark w-75">

    {{-- <thead>
        <tr><th scope="col">Campo Fattura</th><th scope="col">Valore Campo</th></tr>
    </thead> --}}
    <tbody>
        @foreach ($invoice as $item)

            <tr>
                <td class="w-25">{{$item->TIPO_FATTURA}}</td>
            </tr>
            <tr>
                <td class="w-25">{{$item->RESELLER}}</td>
            </tr>
            <tr>
                <td class="w-25">{{$item->INDIRIZZO_FATTURAZIONE}}</td>
            </tr>
            <tr>
                <td class="w-25">{{$item->CAP}}</td>
            </tr>
            <tr>
                <td class="w-25">{{$item->COMUNE}}</td>
            </tr>
            
        @endforeach
       
            
             
        
    </tbody>    
    </table>

    {{-- <a href="{{route("generate_pdf", $bill_number )}}">
        <button class="btn btn-primary m-3">Genera PDF fattura</button>
    </a> --}}
    
</body>
</html>