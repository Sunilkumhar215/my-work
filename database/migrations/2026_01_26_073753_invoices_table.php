<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();

            $table->string('invoice_no')->unique();
            $table->enum('invoice_type', ['GST', 'NON-GST'])->default('GST');

            $table->date('invoice_date');
            $table->date('due_date')->nullable();

            // Client Info
            $table->string('client_name');
            $table->string('client_phone');
            $table->string('client_email')->nullable();
            $table->text('client_address');
            $table->string('client_gstin', 15)->nullable();
            $table->string('client_pan', 10)->nullable();
            $table->string('client_state');
            $table->string('client_state_code', 2);
            $table->string('place_of_supply');
            $table->string('reverse_charge')->default('No');

            // Totals
            $table->decimal('subtotal', 15, 2)->default(0);
            $table->decimal('total_discount', 15, 2)->default(0);
            $table->decimal('total_taxable_value', 15, 2)->default(0);

            $table->decimal('total_cgst', 15, 2)->default(0);
            $table->decimal('total_sgst', 15, 2)->default(0);
            $table->decimal('total_igst', 15, 2)->default(0);
            $table->decimal('total_gst_amount', 15, 2)->default(0);

            $table->decimal('grand_total', 15, 2)->default(0);
            $table->decimal('net_payable', 15, 2)->default(0);

            $table->decimal('paid_amount', 15, 2)->default(0);

            $table->enum('status', ['paid', 'unpaid', 'partially_paid', 'cancelled'])->default('unpaid');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
