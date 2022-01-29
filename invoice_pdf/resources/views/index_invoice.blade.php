<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Invoice list</title>
</head>
<body>
    <header class="p-3">
        <h1>fatture registrate</h1>
    </header>

        <a href="{{route("create_edit_invoice")}}">
            <button class="btn btn-primary m-3">Crea nuova fattura</button>
        </a>

    <table class="table table-dark m-3 w-50">
        <thead>
            <th class="col-1">n°fattura</th>
        </thead>
        <tbody>
            @forelse ($list_invoice as $invoice)
                <tr>
                    {{-- <td><a href="{{ route('show_invoice', $invoice->NUMERO_FATTURA ) }}">{{ $invoice->NUMERO_FATTURA }}</a></td>  --}}
                    <td>
                    <button type="button" class="invoice_number" id="{{$invoice->NUMERO_FATTURA}}">
                        {{ $invoice->NUMERO_FATTURA }}
                    </button>
                    </td>

                    <td>
                        <button class="send" id="{{$invoice->NUMERO_FATTURA}}">Invia
                        </button>
                    </td>
                    <td>
                        <button id="toggle" data-target='#invoice_container' data-shown-text='chiudi' data-hidden-text='mostra'>

                        </button>
                    </td>
                </tr>

            @empty
                <tr>
                    <td colspan="3">Non ci sono fatture da visualizzare</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div id="delete_invoice_place">
        <button type="button" class="btn-danger" id="close_invoice">Chiudi fattura</button>
    </div>

    <div id="invoice_selected">

    </div>

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    $( document ).ready(function() {
        
        var existInvoice = $('#invoice_selected').html(' ');
        console.log(existInvoice);
        if(!existInvoice){

        }else{
            $('.btn-danger').addClass('d-none');
        }

    $(".invoice_number").click(function(){

        $('.btn-danger').removeClass('d-none');
        $('#invoice_selected').removeClass('d-none');

        var invoice = $(this).attr('id');

        var url = "/show_invoice/"+invoice;
        $('#invoice_selected').load('/preview/'+invoice);
    });

    $('#delete_invoice_place').click(function(){
        $('#invoice_selected').addClass('d-none');
        $('#close_invoice').addClass('d-none');
    })
    });

    $(document).on('click','.send',function () {

        var id = $(this).attr('id');
        $.ajax({
         method: "GET",
         url: "/send-email-pdf/" + id,
        })
        .done(function( msg ) {
            alert(msg);
        });
    });
</script>

</html>