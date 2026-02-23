@extends('admin.layouts.app') @section('content')
<div class="container py-4">
    <div class="d-print-none mb-4 d-flex justify-content-between align-items-center">
        <h4 class="mb-0">Invoice: {{ $invoice->invoice_no }}</h4>
        <div>
            <button onclick="window.print()" class="btn btn-primary shadow-sm">
                <i class="bi bi-printer"></i> Print / Save as PDF
            </button>
            <a href="{{ route('admin.invoices.index') }}" class="btn btn-light border shadow-sm">Back to List</a>
        </div>
    </div>

    <div class="card border-0 shadow-sm p-4 p-md-5 bg-white mx-auto printable-content" id="invoice-card" style="max-width: 900px; color: #333;">
        
        <div class="row mb-5">
            <div class="col-6">
                <h2 class="fw-bold text-primary mb-1">{{ $company['company_name'] }}</h2>
                <p class="small mb-0 text-muted">
                    {{ $company['address'] }}<br>
                    <strong>GSTIN:</strong> {{ $company['gstin'] }}<br>
                    <strong>Email:</strong> {{ $company['company_email'] }}
                </p>
            </div>
            <div class="col-6 text-end">
                <h1 class="text-uppercase fw-light text-muted mb-0" style="letter-spacing: 5px;">INVOICE</h1>
                <p class="mb-0"><strong>Invoice No:</strong> #{{ $invoice->invoice_no }}</p>
                <p class="mb-0"><strong>Date:</strong> {{ \Carbon\Carbon::parse($invoice->invoice_date)->format('d M, Y') }}</p>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-6">
                <p class="text-muted small text-uppercase fw-bold mb-2">Billed To:</p>
                <h5 class="fw-bold mb-1">{{ $invoice->client_name }}</h5>
                <p class="small text-muted">
                    {{ $invoice->client_address }}<br>
                    <strong>Phone:</strong> {{ $invoice->client_phone }}<br>
                    <strong>GSTIN:</strong> {{ $invoice->client_gstin ?? 'N/A' }}
                </p>
            </div>
        </div>

        <div class="table-responsive mb-4">
            <table class="table table-bordered align-middle">
                <thead class="bg-light">
                    <tr class="text-uppercase small fw-bold">
                        <th style="width: 50%;">Description</th>
                        <th class="text-center">Rate</th>
                        <th class="text-center">Qty</th>
                        <th class="text-end">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="py-3">
                            <span class="fw-bold">{{ $invoice->service_name ?? 'Professional Services' }}</span>
                            <div class="small text-muted">{{ $invoice->description }}</div>
                        </td>
                        <td class="text-center">₹{{ number_format($invoice->rate, 2) }}</td>
                        <td class="text-center">{{ $invoice->quantity ?? 1 }}</td>
                        <td class="text-end fw-bold">₹{{ number_format($invoice->total_amount, 2) }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="row pt-3">
            <div class="col-7">
                @if($bank)
                <div class="p-3 border rounded bg-light" style="font-size: 0.85rem;">
                    <p class="fw-bold text-uppercase mb-2 border-bottom pb-1">Bank Payment Details</p>
                    <div class="row">
                        <div class="col-5 text-muted">Account Name:</div>
                        <div class="col-7 fw-bold">{{ $bank->account_name }}</div>
                        <div class="col-5 text-muted">Account Number:</div>
                        <div class="col-7 fw-bold">{{ $bank->account_number }}</div>
                        <div class="col-5 text-muted">Bank Name:</div>
                        <div class="col-7 fw-bold">{{ $bank->bank_name }}</div>
                        <div class="col-5 text-muted">IFSC Code:</div>
                        <div class="col-7 fw-bold text-uppercase">{{ $bank->ifsc_code }}</div>
                    </div>
                </div>
                @endif
            </div>
            <div class="col-5 text-end">
                <div class="row mb-2">
                    <div class="col-6 text-muted">Sub Total:</div>
                    <div class="col-6 fw-bold">₹{{ number_format($invoice->total_amount, 2) }}</div>
                </div>
                <div class="row mb-3">
                    <div class="col-6 h5 fw-bold text-primary font-weight-bold">Grand Total:</div>
                    <div class="col-6 h5 fw-bold text-primary font-weight-bold">₹{{ number_format($invoice->total_amount, 2) }}</div>
                </div>
            </div>
        </div>

        <div class="mt-5 pt-5 border-top text-center text-muted small">
            <p>Thank you for your business! This is a computer generated invoice.</p>
        </div>
    </div>
</div>

<style>
/* Print Styles */
@media print {
    body { background-color: white !important; }
    .d-print-none, .main-footer, .sidebar, .navbar { display: none !important; }
    .content-wrapper { margin: 0 !important; padding: 0 !important; border: none !important; }
    .printable-content { 
        box-shadow: none !important; 
        border: none !important; 
        width: 100% !important; 
        max-width: 100% !important; 
        margin: 0 !important; 
        padding: 0 !important;
    }
    .card { border: none !important; }
}
</style>
@endsection