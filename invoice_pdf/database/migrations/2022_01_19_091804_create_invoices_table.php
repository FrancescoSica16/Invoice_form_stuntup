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
            $table->string('TIPO FATTURA');
            $table->string('RESELLER');
            $table->string('RAGIONE SOCIALE');
            $table->string('INDIRIZZO FATTURAZIONE');

            $table->string('CAP', 5);
            $table->string('COMUNE');
            $table->string('PROVINCIA');
            $table->string('CODICE FISCALE');

            $table->string('PARTITA IVA');
            $table->string('CODICE CLIENTE');
            $table->string('CODICE CONTRATTO');
            $table->string('NUMERO FATTURA');
            $table->date('DATA FATTURA');
            $table->date('DATA SCADENZA');

            $table->string('DESCRIZIONE 1');
            $table->integer('IMPONIBILE 1');
            $table->string('DESCRIZIONE 2');
            $table->integer('IMPONIBILE 2');
            $table->string('DESCRIZIONE 3');
            $table->integer('IMPONIBILE 3');

            $table->string('IVA');
            $table->string('PROGRESSIVO XML');
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
