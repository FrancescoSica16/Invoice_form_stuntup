<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // DEFINIRE COLUMN TYPE
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('TIPO_FATTURA', 100);
            $table->string('RESELLER', 100);
            $table->string('RAGIONE_SOCIALE', 100);
            $table->string('INDIRIZZO_FATTURAZIONE', 100);

            $table->string('CAP', 5);
            $table->string('COMUNE', 50);
            $table->string('PROVINCIA', 50);
            $table->string('CODICE_FISCALE', 20);

            $table->string('PARTITA_IVA', 30);
            $table->string('CODICE_CLIENTE');
            $table->string('CODICE_CONTRATTO');
            $table->string('NUMERO_FATTURA');
            $table->date('DATA_FATTURA');
            $table->date('DATA_SCADENZA');

            $table->longText('DESCRIZIONE_1');
            $table->integer('IMPONIBILE_1');
            $table->longText('DESCRIZIONE_2');
            $table->integer('IMPONIBILE_2');
            $table->longText('DESCRIZIONE_3');
            $table->integer('IMPONIBILE_3');

            $table->string('IVA');
            $table->string('PROGRESSIVO_XML');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
