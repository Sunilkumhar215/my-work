@extends('admin.layouts.app')

@section('title', 'Gkon Dashboard')

@section('content')
<div class="container-fluid px-4">
    <div class="d-flex justify-content-between align-items-center mb-4 mt-3">
        <div>
            <h2 class="fw-bold text-dark">Welcome back, Gkon Admin!</h2>
            <p class="text-muted">Here is what's happening with your business today.</p>
        </div>
        <div>
            <a href="{{ route('admin.invoices.create') }}" class="btn btn-primary shadow-sm">
                <i class="bi bi-plus-lg me-2"></i>Create New Invoice
            </a>
        </div>
    </div>

    <div class="row g-3 mb-4">
        <div class="col-md-3">
            <div class="card border-0 shadow-sm p-3 h-100" style="border-left: 5px solid #0d6efd !important;">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0 bg-primary bg-opacity-10 p-3 rounded text-primary">
                        <i class="bi bi-currency-rupee fs-3"></i>
                    </div>
                    <div class="ms-3">
                        <h6 class="text-muted small fw-bold text-uppercase mb-1">Total Revenue</h6>
                        <h4 class="mb-0 fw-bold">₹1,25,000</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card border-0 shadow-sm p-3 h-100" style="border-left: 5px solid #198754 !important;">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0 bg-success bg-opacity-10 p-3 rounded text-success">
                        <i class="bi bi-file-earmark-text fs-3"></i>
                    </div>
                    <div class="ms-3">
                        <h6 class="text-muted small fw-bold text-uppercase mb-1">Total Invoices</h6>
                        <h4 class="mb-0 fw-bold">48</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card border-0 shadow-sm p-3 h-100" style="border-left: 5px solid #ffc107 !important;">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0 bg-warning bg-opacity-10 p-3 rounded text-warning">
                        <i class="bi bi-clock-history fs-3"></i>
                    </div>
                    <div class="ms-3">
                        <h6 class="text-muted small fw-bold text-uppercase mb-1">Pending</h6>
                        <h4 class="mb-0 fw-bold">₹15,400</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card border-0 shadow-sm p-3 h-100" style="border-left: 5px solid #dc3545 !important;">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0 bg-danger bg-opacity-10 p-3 rounded text-danger">
                        <i class="bi bi-person-check fs-3"></i>
                    </div>
                    <div class="ms-3">
                        <h6 class="text-muted small fw-bold text-uppercase mb-1">Profile Status</h6>
                        <h4 class="mb-0 fw-bold text-success">Active</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8 mb-4">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
                    <h5 class="mb-0 fw-bold">Recent Invoices</h5>
                    <a href="{{ route('admin.invoices.index') }}" class="btn btn-sm btn-outline-primary">View All</a>
                </div>
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle mb-0">
                                <thead class="bg-light">
                                    <tr>
                                        <th class="ps-3">No.</th>
                                        <th>Invoice ID</th>
                                        <th>Client</th>
                                        <th>Type</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th class="text-end pe-3">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($invoices as $invoice)
                                    <tr>
                                        <td class="ps-3"><span class="text-muted">{{ $loop->iteration }}</span></td>
                                        <td class="fw-medium text-primary">#{{ $invoice->invoice_no }}</td>
                                        <td>{{ $invoice->client_name }}</td>
                                        <td>
                                            <span class="badge {{ $invoice->invoice_type == 'GST' ? 'bg-info-subtle text-info' : 'bg-secondary-subtle text-secondary' }} px-2 py-1" style="font-size: 0.7rem;">
                                                {{ $invoice->invoice_type }}
                                            </span>
                                        </td>
                                        <td class="fw-semibold">₹{{ number_format($invoice->grand_total, 2) }}</td>
                                        <td>
                                            @php $status = strtoupper(trim($invoice->status)); @endphp
                                            @if($status === 'PAID')
                                            <span class="text-success small fw-bold">● Paid</span>
                                            @elseif($status === 'DUE')
                                            <span class="text-warning small fw-bold">● Due</span>
                                            @else
                                            <span class="text-muted small fw-bold">Pending</span>
                                            @endif
                                        </td>
                                        <td class="text-end pe-3">
                                            <a href="{{ route('admin.invoices.view', $invoice->id) }}" class="btn btn-sm btn-light border">
                                                <i class="bi bi-eye"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 mb-4">
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body text-center py-4">
                    <div class="bg-primary bg-opacity-10 p-3 rounded-circle d-inline-block mb-3">
                        <i class="bi bi-shield-check fs-1 text-primary"></i>
                    </div>
                    <h5 class="fw-bold">Gkon System Check</h5>
                    <p class="text-muted small">All systems are running smoothly. Database and server are healthy.</p>
                    <button class="btn btn-sm btn-outline-dark w-100 mt-2">Check Logs</button>
                </div>
            </div>

            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <h6 class="fw-bold mb-3">Quick Links</h6>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center ps-0">
                            <a href="{{ route('admin.profile') }}" class="text-decoration-none text-dark small"><i class="bi bi-gear me-2"></i>Company Settings</a>
                            <i class="bi bi-chevron-right small text-muted"></i>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center ps-0 border-0">
                            <a href="#" class="text-decoration-none text-dark small"><i class="bi bi-bank me-2"></i>Bank Details</a>
                            <i class="bi bi-chevron-right small text-muted"></i>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection