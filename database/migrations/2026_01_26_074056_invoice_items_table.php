<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('invoice_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('invoice_id')->constrained()->onDelete('cascade');
            $table->string('description'); // Example: SMO
            $table->string('hsn_sac_code'); // Example: 998311
            $table->string('unit')->default('NOS'); // Units like NOS, HRS, SQFT
            $table->integer('quantity')->default(1);
            $table->decimal('unit_price', 15, 2);
            $table->decimal('discount_per_item', 15, 2)->default(0);

            // Item-wise Tax Breakdown
            $table->decimal('taxable_value', 15, 2); // (price * qty) - discount
            $table->decimal('gst_rate', 5, 2); // e.g., 18%
            $table->decimal('cgst_amount', 15, 2);
            $table->decimal('sgst_amount', 15, 2);
            $table->decimal('igst_amount', 15, 2)->default(0);

            $table->decimal('total_item_amount', 15, 2); // Taxable + GST
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
