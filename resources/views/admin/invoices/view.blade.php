@extends('admin.layouts.app')

@section('title', 'Invoice Details')

@push('styles')
<style>
    :root {
        --primary-color: #0f172a;
        --secondary-bg: #f8fafc;
        --border-color: #e2e8f0;
    }

    body {
        background-color: #f1f5f9;
        font-family: 'Inter', sans-serif;
    }

    .invoice-container {
        max-width: 900px;
        margin: 20px auto;
        background: white;
        border-radius: 12px;
        box-shadow: 0 10px 15px -3px rgba(162, 105, 105, 0.1);
        border: 1px solid var(--border-color);
        overflow: hidden;
    }

    .invoice-header-strip {
        background: var(--primary-color);
        color: white;
        padding: 25px 35px;
    }

    .client-box {
        background: var(--secondary-bg);
        border-radius: 8px;
        padding: 15px;
        border: 1px solid var(--border-color);
    }

    .table-details thead {
        background: #f1f5f9;
        color: #475569;
        text-transform: uppercase;
        font-size: 0.75rem;
        letter-spacing: 0.5px;
    }

    .table-details th,
    .table-details td {
        padding: 12px 15px;
        border-bottom: 1px solid var(--border-color);
    }

    .summary-item {
        display: flex;
        justify-content: space-between;
        padding: 4px 0;
        color: #64748b;
    }

    .summary-total {
        border-top: 2px solid var(--primary-color);
        margin-top: 10px;
        padding-top: 10px;
        font-weight: 800;
        font-size: 1.1rem;
        color: var(--primary-color);
    }

    .status-badge {
        padding: 4px 12px;
        border-radius: 20px;
        font-size: 0.75rem;
        font-weight: 600;
        text-transform: uppercase;
    }

    @media print {
        @page {
            size: A4;
            margin: 8mm;
            /* Kam margin taki content zyada aaye */
        }

        body {
            background: white !important;
        }

        /* Screen ki faltu cheezein chhupane ke liye */
        body * {
            visibility: hidden;
        }

        .invoice-container,
        .invoice-container * {
            visibility: visible;
        }

        .no-print,
        .btn,
        .sidebar,
        nav,
        header {
            display: none !important;
        }

        .invoice-container {
            position: absolute;
            left: 0;
            top: 0;
            width: 100% !important;
            box-shadow: none !important;
            border: none !important;
            margin: 0 !important;
            padding: 0 !important;
        }

        /* 1. Header ko chhota kiya */
        .invoice-header-strip {
            background: #f1f5f9 !important;
            color: #000 !important;
            padding: 10px 15px !important;
            border-bottom: 1px solid #000;
        }

        /* 2. Table rows ko ekdum chipka diya (Extreme Space Saving) */
        .table-details th,
        .table-details td {
            padding: 4px 6px !important;
            font-size: 11px !important;
            border-bottom: 1px solid #ccc !important;
        }

        /* 3. BANK aur SUMMARY ko ek hi row mein lane ka logic */
        .dd {
            display: flex !important;
            flex-direction: row !important;
            flex-wrap: nowrap !important;
            margin-top: 15px !important;
        }

        .dd .col-md-7 {
            width: 60% !important;
            /* Bank area */
            flex: 0 0 60% !important;
        }

        .dd .col-md-5 {
            width: 40% !important;
            /* Summary area */
            flex: 0 0 40% !important;
        }

        /* 4. Extra padding/margin khatam */
        .p-4 {
            padding: 15px !important;
        }

        .mb-4 {
            margin-bottom: 10px !important;
        }

        .client-box {
            padding: 8px !important;
            background: #fff !important;
        }

        .summary-item {
            padding: 2px 0 !important;
            font-size: 11px !important;
        }

        .summary-total {
            font-size: 13px !important;
            margin-top: 5px !important;
            padding-top: 5px !important;
        }

    }
</style>
@endpush

@section('content')
<div class="container py-3">

    <div class="d-flex justify-content-between align-items-center mb-3 no-print">
        <h5 class="fw-bold mb-0">Invoice Preview</h5>
        <div class="d-flex gap-2">
            <a href="{{ route('admin.invoices.index') }}" class="btn btn-sm btn-light border">
                <i class="bi bi-arrow-left"></i> Back to List
            </a>
            <button onclick="window.print()" class="btn btn-sm btn-primary px-3">
                <i class="bi bi-printer"></i> Print / Save PDF
            </button>

        </div>
    </div>

    <div class="invoice-container">
        <div class="invoice-header-strip d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center gap-3">
                @if(file_exists(public_path('logo1.png')))
                <img src="{{ asset('logo.png') }}" height="50" style="filter: brightness(0) invert(1);">
                @endif
                <div>
                    <h5 class="mb-0 fw-bold">
                        {{ $company['company_name'] }}
                    </h5>
                    <P class="mb-0 fw-bold">
                        {{ $company['gstin'] }}
                    </P>
                    <p class="mb-0 small opacity-75">
                        <i class="bi bi-telephone-fill me-2 text-secondary"></i>{{ $company['company_phone'] }} <i class="bi bi-envelope-fill me-2 text-secondary"></i>{{ $company['company_email'] }}
                    </p>
                    <p class="mb-0 small opacity-75">
                        <i class="bi bi-geo-alt-fill me-2 text-secondary"></i> {{ $company['address'] }}
                    </p>

                </div>
            </div>
            <div class="text-end">
                <h4 class="mb-0 text-uppercase fw-light">{{ $invoice->invoice_type }}-Invoice </h4>
                <div>
                    <span class="small text-uppercase fw-bold"> </span>
                    <span class="fw-bold ms-2">#{{ $invoice->invoice_no }}</span>
                </div>
                <div>
                    <span class="small text-uppercase fw-bold">Date:</span>
                    <span class="ms-2">{{ date('d M, Y', strtotime($invoice->invoice_date)) }}</span>
                </div>
            </div>
        </div>

        <div class="p-4">
            <div class="row g-4">
                <div class="col-6">
                    <p class="text-muted small fw-bold text-uppercase mb-1" style="font-size: 12px;">Billed To:</p>

                    <div class="client-details" style="font-size: 13px; line-height: 1.3;">
                        <h6 class="fw-bold mb-1 text-dark text-uppercase" style="font-size: 13px;">
                            <i class="bi bi-person-circle me-2"></i>{{ $invoice->client_name }}
                        </h6>

                        <div class="mb-1">
                            @if($invoice->invoice_type == 'GST')
                            <span class="fw-bold">GSTIN:</span> <span class="text-uppercase">{{ $invoice->client_gstin }}</span>
                            @endif
                        </div>

                        <div class="text-muted">
                            <div class="mb-1">
                                <i class="bi bi-geo-alt-fill me-2 text-secondary"></i>{{ $invoice->client_address }}, {{ $invoice->client_state }} ({{ $invoice->client_state_code }})
                            </div>

                            <div class="d-flex flex-wrap">
                                <span><i class="bi bi-telephone-fill me-2 text-secondary"></i>{{ $invoice->client_phone }}</span>
                                @if($invoice->client_email)
                                <span class="mx-2">|</span>
                                <span><i class="bi bi-envelope-fill me-2 text-secondary"></i>{{ $invoice->client_email }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>


            <div class="table-responsive mb-4">
                <table class="table table-details">
                    <thead>
                        <tr>
                            <th width="50">#</th>
                            <th>Description</th>
                            <th class="text-center">Qty</th>
                            <th class="text-end">Rate</th>
                            <th class="text-end">Disc</th>
                            @if($invoice->invoice_type == 'GST') <th class="text-end">GST</th> @endif
                            <th class="text-end">Amount</th>
                        </tr>
                    </thead>
                    <tbody style="font-size: 13px;">
                        @foreach($invoice->items as $i => $item)
                        <tr>
                            <td>{{ $i+1 }}</td>
                            <td class="fw-medium">{{ $item->description }}</td>
                            <td class="text-center">{{ $item->quantity }}</td>
                            <td class="text-end">₹{{ number_format($item->unit_price, 2) }}</td>
                            <td class="text-end text-danger">-{{ number_format($item->discount_per_item, 2) }}</td>
                            @if($invoice->invoice_type == 'GST')
                            <td class="text-end">{{ $item->gst_rate }}%</td>
                            @endif
                            <td class="text-end fw-bold">₹{{ number_format($item->total_item_amount, 2) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="row mt-5 align-items-start dd">
                <div class="col-md-7">
                    @if(isset($bank) && $bank)
                    <div class="p-2 border rounded shadow-sm" style="background-color: #f9f9f9; border-left: 4px solid #4aa2fa; font-size: 11px;">
                        <div class="row g-0 align-items-center">

                            <div class="col-8 border-end pe-2">
                                <h6 class="mb-1 text-uppercase fw-bold" style="color: #4aa2fa; font-size: 11px;">
                                    <i class="fas fa-university me-1"></i> Bank Details
                                </h6>
                                <div class="row g-0">
                                    <div class="col-5 text-muted">Bank Name</div>
                                    <div class="col-7 fw-bold">: {{ $bank->bank_name }}</div>

                                    <div class="col-5 text-muted">A/c No.</div>
                                    <div class="col-7 fw-bold">: {{ $bank->account_no }}</div>

                                    <div class="col-5 text-muted">IFSC Code</div>
                                    <div class="col-7 fw-bold">: {{ $bank->ifsc_code }}</div>

                                    <div class="col-5 text-muted">Branch</div>
                                    <div class="col-7">: {{ $bank->branch_name }}</div>
                                    <div class="col-5 text-muted">Account Type</div>
                                    <div class="col-7 ">: {{ $bank->account_type }}</div>
                                </div>
                            </div>

                            <div class="col-4 text-center ps-2"> 
                                <img src="{{ url('frontend/img/qr.jpg') }}" alt="QR" style="width: 85px; height: 85px; border: 1px solid #ddd; padding: 2px; background: #fff;">
                                 
                                <p class="mb-0 mt-1 fw-bold text-uppercase" style="font-size: 8px;">Scan to Pay</p>
                            </div>

                        </div>
                    </div>
                    @else
                    <div class="p-2 border rounded bg-light text-muted" style="font-size: 10px;">
                        <i class="fas fa-info-circle me-1"></i> No Bank Details available.
                    </div>
                    @endif
                </div>

                <div class="col-md-5">
                    <div class="summary-container ps-md-4" style="font-size: 13px;">
                        <div class="summary-item d-flex justify-content-between">
                            <span class="text-muted">Subtotal</span>
                            <span>₹{{ number_format($invoice->subtotal, 2) }}</span>
                        </div>

                        <div class="summary-item d-flex justify-content-between text-danger">
                            <span>Total Discount</span>
                            <span>-₹{{ number_format($invoice->total_discount, 2) }}</span>
                        </div>

                        <div class="summary-item d-flex justify-content-between">
                            <span class="text-muted">Taxable Value</span>
                            <span>₹{{ number_format($invoice->total_taxable_value, 2) }}</span>
                        </div>

                        @if($invoice->invoice_type == 'GST')
                        <div class="summary-item d-flex justify-content-between text-primary small">
                            <span>CGST</span>
                            <span>₹{{ number_format($invoice->total_cgst, 2) }}</span>
                        </div>
                        <div class="summary-item d-flex justify-content-between text-primary small">
                            <span>SGST</span>
                            <span>₹{{ number_format($invoice->total_sgst, 2) }}</span>
                        </div>
                        @endif

                        <div class="summary-total d-flex justify-content-between border-top pt-1 mt-1">
                            <span class="fw-bold">Grand Total</span>
                            <span class="text-dark fw-bold">₹{{ number_format($invoice->grand_total, 2) }}</span>
                        </div>

                        @if($invoice->paid_amount > 0)
                        <div class="summary-item d-flex justify-content-between small text-success fw-bold">
                            <span>Amount Paid</span>
                            <span>₹{{ number_format($invoice->paid_amount, 2) }}</span>
                        </div>
                        @else
                        @if($invoice->net_payable > 0)
                        <div class="summary-item d-flex justify-content-between fw-bold text-danger border-top pt-2 mt-1">
                            <span>Balance Due</span>
                            <span>₹{{ number_format($invoice->net_payable, 2) }}</span>
                        </div>
                        @endif
                        @endif

                    </div>
                </div>
            </div>

            <div class="mt-5 border-top">
                <p class="text-muted small italic" style="font-size: 10px;">This is a computer generated invoice and does not require a physical signature.</p>
            </div>
        </div>
    </div>
</div>
@endsection