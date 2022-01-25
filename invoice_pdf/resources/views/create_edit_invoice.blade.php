<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Creazione Fattura</title>
</head>
<body>

    <form class="container-fluid" name="input" method="POST" action="{{ route('invoice_creator') }}" enctype="multipart/form-data" >
        @csrf
         
        <div class="form-group mb-3">
          <label for="TIPO_FATTURA" class="col-form-label">TIPO FATTURA</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="TIPO_FATTURA" name="TIPO_FATTURA" value="">
          </div>
        </div>
{{-- 
        <div class="form-group mb-3">
            <label for="RESELLER" class="col-form-label">RESELLER</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="RESELLER" name="RESELLER"  value="">
            </div>
        </div> --}}
        
        <div class="form-group mb-3">
            <label for="RAGIONE_SOCIALE" class="col-form-label">RAGIONE SOCIALE</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="RAGIONE_SOCIALE" name="RAGIONE_SOCIALE"  value="">
            </div>
        </div>

        <div class="form-group mb-3">
            <label for="INDIRIZZO_FATTURAZIONE" class="col-form-label ">INDIRIZZO FATTURAZIONE</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="INDIRIZZO_FATTURAZIONE" name="INDIRIZZO_FATTURAZIONE"  value="">
            </div>
        </div>

        <div class="form-group mb-3">
            <label for="CAP" class="col-form-label">CAP</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="CAP" name="CAP"  value="">
            </div>
        </div>

        <div class="form-group mb-3">
            <label for="COMUNE" class="col-form-label">COMUNE</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="COMUNE" name="COMUNE"  value="">
            </div>
        </div>

        <div class="form-group mb-3">
            <label for="PROVINCIA" class="col-form-label">PROVINCIA</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="PROVINCIA" name="PROVINCIA"  value="">
            </div>
        </div>

        <div class="form-group mb-3">
            <label for="CODICE_FISCALE" class="col-form-label">CODICE FISCALE</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="CODICE_FISCALE" name="CODICE_FISCALE"  value="">
            </div>
        </div>

        <div class="form-group mb-3">
            <label for="PARTITA_IVA" class="col-form-label">PARTITA IVA</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="PARTITA_IVA" name="PARTITA_IVA"  value="">
            </div>
        </div>

        <div class="form-group mb-3">
            <label for="CODICE_CLIENTE" class="col-form-label">CODICE CLIENTE</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="CODICE_CLIENTE" name="CODICE_CLIENTE"  value="">
            </div>
        </div>

        <div class="form-group mb-3">
            <label for="CODICE_CONTRATTO" class="col-form-label">CODICE CONTRATTO</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="CODICE_CONTRATTO" name="CODICE_CONTRATTO"  value="">
            </div>
        </div>

        <div class="form-group mb-3">
            <label for="NUMERO_FATTURA" class="col-form-label">NUMERO FATTURA</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="NUMERO_FATTURA" name="NUMERO_FATTURA"  value="">
            </div>
        </div>

        <div class="form-group mb-3">
            <label for="DATA_FATTURA" class="col-form-label">DATA FATTURA</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="DATA_FATTURA" name="DATA_FATTURA"  value="">
            </div>
        </div>

        <div class="form-group mb-3">
            <label for="DATA_SCADENZA" class="col-form-label">DATA SCADENZA</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="DATA_SCADENZA" name="DATA_SCADENZA"  value="">
            </div>
        </div>

        <div class="form-group mb-3">
            <label for="DESCRIZIONE_1" class="col-form-label">DESCRIZIONE 1</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="DESCRIZIONE_1" name="DESCRIZIONE_1"  value="">
            </div>
        </div>

        <div class="form-group mb-3">
            <label for="IMPONIBILE_1" class="col-form-label">IMPONIBILE 1</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="IMPONIBILE_1" name="IMPONIBILE_1"  value="">
            </div>
        </div>

        <div class="form-group mb-3">
            <label for="DESCRIZIONE_2" class="col-form-label">DESCRIZIONE 2</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="DESCRIZIONE_2" name="DESCRIZIONE_2"  value="">
            </div>
        </div>

        <div class="form-group mb-3">
            <label for="IMPONIBILE_2" class="col-form-label">IMPONIBILE 2</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="IMPONIBILE_2" name="IMPONIBILE_2"  value="">
            </div>
        </div>

        <div class="form-group mb-3">
            <label for="DESCRIZIONE_3" class="col-form-label">DESCRIZIONE 3</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="DESCRIZIONE_3" name="DESCRIZIONE_3"  value="">
            </div>
        </div>

        <div class="form-group mb-3">
            <label for="IMPONIBILE_3" class="col-form-label">IMPONIBILE 3</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="IMPONIBILE_3" name="IMPONIBILE_3"  value="">
            </div>
        </div>

        <div class="form-group mb-3">
            <label for="IVA" class="col-form-label">IVA</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="IVA" name="IVA"  value="">
            </div>
        </div>

        <div class="form-group mb-3">
            <label for="PROGRESSIVO_XML" class="col-form-label">PROGRESSIVO XML</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="PROGRESSIVO_XML" name="PROGRESSIVO_XML"  value="">
            </div>
        </div>
        
        <button type="submit" class="btn btn-danger m-3">Salva Fattura</button>
      </form>
    
</body>
</html>