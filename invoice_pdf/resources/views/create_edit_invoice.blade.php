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

    <form class="container-fluid">
        @csrf
         
        <div class="form-group">
          <label for="TIPO_FATTURA" class="col-sm-2 col-form-label">TIPO_FATTURA</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="TIPO_FATTURA" name="TIPO_FATTURA" value="">
          </div>
        </div>

        <div class="form-group">
            <label for="RESELLER" class="col-sm-2 col-form-label">RESELLER</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="RESELLER" name="RESELLER"  value="">
            </div>
        </div>
        
        <div class="form-group">
            <label for="RAGIONE_SOCIALE" class="col-sm-2 col-form-label">RAGIONE_SOCIALE</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="RAGIONE_SOCIALE" name="RAGIONE_SOCIALE"  value="">
            </div>
        </div>

        <div class="form-group">
            <label for="INDIRIZZO_FATTURAZIONE" class="col-sm-2 col-form-label ">INDIRIZZO_FATTURAZIONE</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="INDIRIZZO_FATTURAZIONE" name="INDIRIZZO_FATTURAZIONE"  value="">
            </div>
        </div>

        <div class="form-group">
            <label for="CAP" class="col-sm-2 col-form-label">CAP</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="CAP" name="CAP"  value="">
            </div>
        </div>

        <div class="form-group">
            <label for="COMUNE" class="col-sm-2 col-form-label">COMUNE</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="COMUNE" name="COMUNE"  value="">
            </div>
        </div>

        <div class="form-group">
            <label for="PROVINCIA" class="col-sm-2 col-form-label">PROVINCIA</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="PROVINCIA" name="PROVINCIA"  value="">
            </div>
        </div>

        <div class="form-group">
            <label for="CODICE_FISCALE" class="col-sm-2 col-form-label">CODICE_FISCALE</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="CODICE_FISCALE" name="CODICE_FISCALE"  value="">
            </div>
        </div>

        <div class="form-group">
            <label for="PARTITA_IVA" class="col-sm-2 col-form-label">PARTITA_IVA</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="PARTITA_IVA" name="PARTITA_IVA"  value="">
            </div>
        </div>

        <div class="form-group">
            <label for="CODICE_CLIENTE" class="col-sm-2 col-form-label">CODICE_CLIENTE</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="CODICE_CLIENTE" name="CODICE_CLIENTE"  value="">
            </div>
        </div>

        <div class="form-group">
            <label for="CODICE_CONTRATTO" class="col-sm-2 col-form-label">CODICE_CONTRATTO</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="CODICE_CONTRATTO" name="CODICE_CONTRATTO"  value="">
            </div>
        </div>

        <div class="form-group">
            <label for="NUMERO_FATTURA" class="col-sm-2 col-form-label">NUMERO_FATTURA</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="NUMERO_FATTURA" name="NUMERO_FATTURA"  value="">
            </div>
        </div>

        <div class="form-group">
            <label for="DATA_FATTURA" class="col-sm-2 col-form-label">DATA_FATTURA</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="DATA_FATTURA" name="DATA_FATTURA"  value="">
            </div>
        </div>

        <div class="form-group">
            <label for="DATA_SCADENZA" class="col-sm-2 col-form-label">DATA_SCADENZA</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="DATA_SCADENZA" name="DATA_SCADENZA"  value="">
            </div>
        </div>

        <div class="form-group">
            <label for="DESCRIZIONE_1" class="col-sm-2 col-form-label">DESCRIZIONE_1</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="DESCRIZIONE_1" name="DESCRIZIONE_1"  value="">
            </div>
        </div>

        <div class="form-group">
            <label for="IMPONIBILE_1" class="col-sm-2 col-form-label">IMPONIBILE_1</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="IMPONIBILE_1" name="IMPONIBILE_1"  value="">
            </div>
        </div>

        <div class="form-group">
            <label for="DESCRIZIONE_2" class="col-sm-2 col-form-label">DESCRIZIONE_2</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="DESCRIZIONE_2" name="DESCRIZIONE_2"  value="">
            </div>
        </div>

        <div class="form-group">
            <label for="IMPONIBILE_2" class="col-sm-2 col-form-label">IMPONIBILE_2</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="IMPONIBILE_2" name="IMPONIBILE_2"  value="">
            </div>
        </div>

        <div class="form-group">
            <label for="DESCRIZIONE_3" class="col-sm-2 col-form-label">DESCRIZIONE_3</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="DESCRIZIONE_3" name="DESCRIZIONE_3"  value="">
            </div>
        </div>

        <div class="form-group">
            <label for="IMPONIBILE_3" class="col-sm-2 col-form-label">IMPONIBILE_3</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="IMPONIBILE_3" name="IMPONIBILE_3"  value="">
            </div>
        </div>

        <div class="form-group">
            <label for="IVA" class="col-sm-2 col-form-label">IVA</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="IVA" name="IVA"  value="">
            </div>
        </div>

        <div class="form-group">
            <label for="PROGRESSIVO_XML" class="col-sm-2 col-form-label">PROGRESSIVO_XML</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="PROGRESSIVO_XML" name="PROGRESSIVO_XML"  value="">
            </div>
        </div>
        
        <button type="submit" class="btn btn-danger m-3">Salva Fattura</button>
      </form>
    
</body>
</html>