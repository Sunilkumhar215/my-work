@extends('admin.layouts.app')

@section('title','Inquiry Pipeline')

@push('styles')
<style>
    :root {
        --primary-gradient: linear-gradient(135deg, #6366f1 0%, #a855f7 100%);
        --bg-soft: #f8fafc;
        --card-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.04), 0 8px 10px -6px rgba(0, 0, 0, 0.04);
    }

    body { background-color: var(--bg-soft); font-family: 'Inter', sans-serif; color: #1e293b; }

    .stat-card {
        background: #fff; border-radius: 16px; padding: 20px;
        box-shadow: var(--card-shadow); transition: .3s ease; border: none;
    }
    .stat-card:hover { transform: translateY(-3px); box-shadow: 0 12px 22px rgba(0, 0, 0, .1); }

    .stat-icon {
        width: 42px; height: 5px; border-radius: 12px;
        display: flex; align-items: center; justify-content: center;
        font-size: 20px; margin-bottom: 12px;
    }

    .inquiry-container {
        background: white; border-radius: 20px;
        box-shadow: var(--card-shadow); border: 1px solid rgba(0, 0, 0, 0.05);
        overflow: hidden;
    }

    .table thead th {
        background: #f8fafc; text-transform: uppercase;
        font-size: 0.7rem; letter-spacing: 0.05em;
        color: #64748b; padding: 16px; border-bottom: 1px solid #edf2f7;
    }

    .row-unread { background-color: #f8fafc; font-weight: 500; }
    
    .unread-indicator {
        width: 8px; height: 8px; background: #6366f1;
        border-radius: 50%; display: inline-block; margin-right: 8px;
    }

    .avatar-stack {
        width: 38px; height: 38px; border-radius: 10px;
        background: var(--primary-gradient); color: white;
        display: flex; align-items: center; justify-content: center;
        font-weight: bold; font-size: 14px;
    }

    .btn-action {
        width: 35px; height: 35px; display: inline-flex;
        align-items: center; justify-content: center;
        border-radius: 8px; transition: 0.2s;
    }

    .btn-create-invoice {
        background: #ecfdf5; color: #059669; border: 1px solid #10b98133;
        font-size: 12px; font-weight: 600; padding: 5px 12px; border-radius: 8px;
        text-decoration: none; transition: 0.3s;
    }
    .btn-create-invoice:hover { background: #10b981; color: white; }
</style>
@endpush

@section('content')
<div class="container-fluid px-4 py-4">
    
    <div class="row g-3 mb-4">
        <div class="col-md-3">
            <div class="stat-card">
                <div class="stat-icon bg-primary bg-opacity-10 text-primary"><i class="bi bi-envelope-paper"></i></div>
                <h6 class="text-muted small">Total Inquiries</h6>
                <h2 class="fw-bold mb-0">{{ $inquiries->count() }}</h2>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stat-card">
                <div class="stat-icon bg-warning bg-opacity-10 text-warning"><i class="bi bi-clock-history"></i></div>
                <h6 class="text-muted small">New Leads</h6>
                <h2 class="fw-bold mb-0">{{ $inquiries->where('is_read', 0)->count() }}</h2>
            </div>
        </div>
    </div>

    <div class="inquiry-container">
        <div class="p-4 d-flex justify-content-between align-items-center bg-white">
            <h5 class="fw-bold mb-0">Customer Inquiries</h5>
            <div class="d-flex gap-2">
                <input type="text" class="form-control form-control-sm rounded-pill px-3" placeholder="Search..." style="width: 200px;">
            </div>
        </div>

        <div class="table-responsive">
            <table class="table align-middle mb-0">
                <thead>
                    <tr>
                        <th class="ps-4">Client</th>
                        <th>Budget</th>
                        <th>Message</th>
                        <th>Received</th>
                        <th class="text-end pe-4">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($inquiries as $item)
                    <tr class="{{ $item->is_read ? '' : 'row-unread' }}">
                        <td class="ps-4">
                            <div class="d-flex align-items-center">
                                <div class="avatar-stack me-3">{{ substr($item->name, 0, 1) }}</div>
                                <div>
                                    <div class="text-dark fw-semibold">
                                        @if(!$item->is_read)<span class="unread-indicator"></span>@endif
                                        {{ $item->name }}
                                    </div>
                                    <div class="text-muted small">{{ $item->email }}</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="badge rounded-pill bg-light text-dark border px-3">
                                {{ $item->budget ?: 'N/A' }}
                            </span>
                        </td>
                        <td>
                            <div class="text-truncate" style="max-width: 200px; font-size: 13px;">
                                {{ $item->message }}
                            </div>
                        </td>
                        <td class="small text-muted">{{ $item->created_at->format('d M, Y') }}</td>
                        <td class="text-end pe-4">
                            <div class="d-flex justify-content-end align-items-center gap-2">
                                <a href="{{ route('admin.invoices.create', ['inquiry_id' => $item->id]) }}" class="btn-create-invoice">
                                    <i class="bi bi-plus-circle me-1"></i> Invoice
                                </a>

                                <a href="{{ route('admin.inquiry.show', $item->id) }}" class="btn-action bg-light text-dark border" title="View">
                                    <i class="bi bi-eye"></i>
                                </a>

                                <form action="{{ route('admin.inquiry.toggle', $item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    <button class="btn-action border-0 {{ $item->is_read ? 'bg-secondary-subtle text-secondary' : 'bg-primary-subtle text-primary' }}">
                                        <i class="bi {{ $item->is_read ? 'bi-envelope-open' : 'bi-envelope-fill' }}"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection