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
            $table->string('TIPO_FATTURA', 100)->nullable();
            $table->string('RESELLER', 100)->nullable();
            $table->string('RAGIONE_SOCIALE', 100)->nullable();
            $table->string('INDIRIZZO_FATTURAZIONE', 100)->nullable();

            $table->string('CAP', 5)->nullable();
            $table->string('COMUNE', 50)->nullable();
            $table->string('PROVINCIA', 50)->nullable();
            $table->string('CODICE_FISCALE', 20)->nullable();

            $table->string('PARTITA_IVA', 30)->nullable();
            $table->string('CODICE_CLIENTE')->nullable();
            $table->string('CODICE_CONTRATTO')->nullable();
            $table->string('NUMERO_FATTURA');
            $table->date('DATA_FATTURA', )->nullable();
            $table->date('DATA_SCADENZA')->nullable();

            $table->longText('DESCRIZIONE_1')->nullable();
            $table->integer('IMPONIBILE_1')->nullable();
            $table->longText('DESCRIZIONE_2')->nullable();
            $table->integer('IMPONIBILE_2')->nullable();
            $table->longText('DESCRIZIONE_3')->nullable();
            $table->integer('IMPONIBILE_3')->nullable();

            $table->string('IVA')->nullable();
            $table->string('PROGRESSIVO_XML')->nullable();
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
