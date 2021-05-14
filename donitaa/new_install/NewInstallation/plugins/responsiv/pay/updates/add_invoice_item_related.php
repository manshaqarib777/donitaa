<?php namespace Responsiv\Pay\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class AddInvoiceItemRelated extends Migration
{
    public function up()
    {
        if (!Schema::hasColumn('responsiv_pay_invoices', 'related_type')) {
            Schema::table('responsiv_pay_invoice_items', function($table)
            {
                $table->string('related_id')->index()->nullable();
                $table->string('related_type')->index()->nullable();
            });
        }
    }

    public function down()
    {
    }
}
