@extends('admin.layouts.app')

@section('title', 'Invoices List')

@push('styles')
<style>
    :root {
        --bg-soft: #f8fafc;
        --border-color: #e2e8f0;
        --text-main: #334155;
    }

    body {
        background-color: var(--bg-soft);
        font-family: 'Inter', sans-serif;
    }

    .list-card {
        background: white;
        border-radius: 10px;
        border: 1px solid var(--border-color);
        box-shadow: 0 2px 4px rgba(0,0,0,0.02);
        overflow: hidden;
    }

    .table {
        margin-bottom: 0;
        vertical-align: middle;
    }

    .table thead {
        background: #f1f5f9;
    }

    .table thead th {
        font-size: 0.75rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-weight: 600;
        color: #64748b;
        padding: 12px 15px;
        border-bottom: 1px solid var(--border-color);
    }

    .table tbody td {
        padding: 10px 15px;
        color: var(--text-main);
        border-bottom: 1px solid #f8fafc;
        font-weight: 400; /* Light font weight */
    }

    /* Status Badges Compact */
    .badge-custom {
        padding: 4px 8px;
        border-radius: 5px;
        font-size: 0.7rem;
        font-weight: 600;
    }

    .bg-light-success { background: #dcfce7; color: #166534; }
    .bg-light-warning { background: #fef9c3; color: #854d0e; }
    .bg-light-secondary { background: #f1f5f9; color: #475569; }

    .btn-action {
        padding: 3px 10px;
        font-size: 0.75rem;
        border-radius: 4px;
    }

    .page-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }
</style>
@endpush

@section('content')
<div class="container-fluid py-4">
    
    <div class="page-header">
        <div>
            <h5 class="fw-bold mb-1">Invoices History</h5>
            <p class="text-muted small mb-0">Manage and view all your generated invoices.</p>
        </div>
        <div class="d-flex gap-2">
            <a href="{{ route('admin.invoices.create') }}" class="btn btn-sm btn-outline-secondary">
                <i class="bi bi-plus"></i> New Invoice
            </a>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success py-2 px-3 small border-0 shadow-sm mb-3">
            {{ session('success') }}
        </div>
    @endif

    <div class="list-card">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th width="50">#</th>
                        <th>Invoice No</th>
                        <th>Client Name</th>
                        <th>Type</th>
                        <th>Taxable</th>
                        <th>Total Amount</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th class="text-end">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($invoices as $invoice)
                    <tr>
                        <td><span class="text-muted">{{ $loop->iteration }}</span></td>
                        <td class="fw-medium text-primary">#{{ $invoice->invoice_no }}</td>
                        <td>{{ $invoice->client_name }}</td>
                        <td> 
                            @if($invoice->invoice_type == 'GST')
                                <span class="badge-custom bg-light-success">GST</span>
                            @else
                                <span class="badge-custom bg-light-secondary">NON-GST</span>
                            @endif
                        </td>
                        <td>₹{{ number_format($invoice->total_taxable_value, 2) }}</td>
                        <td class="fw-semibold">₹{{ number_format($invoice->grand_total, 2) }}</td>
                        <td>
                            @php $status = strtoupper(trim($invoice->status)); @endphp
                            @if($status === 'PAID')
                                <span class="badge-custom bg-light-success">● Paid</span>
                            @elseif($status === 'DUE')
                                <span class="badge-custom bg-light-warning">● Due</span>
                            @else
                                <span class="badge-custom bg-light-secondary">Pending</span>
                            @endif
                        </td>
                        <td class="text-muted" style="font-size: 0.8rem;">
                            {{ date('d M, Y', strtotime($invoice->invoice_date)) }}
                        </td>
                        <td class="text-end">
                            <a href="{{ route('admin.invoices.view', $invoice->id) }}" class="btn btn-sm btn-dark btn-action">
                                View
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection