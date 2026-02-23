@extends('admin.layouts.app')

@section('title', 'Inquiry Details')

@push('styles')
<style>
    :root {
        --primary-gradient: linear-gradient(135deg, #6366f1 0%, #a855f7 100%);
        --bg-soft: #f8fafc;
        --card-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.04), 0 8px 10px -6px rgba(0, 0, 0, 0.04);
    }

    body { background-color: var(--bg-soft); font-family: 'Inter', sans-serif; }

    .detail-card {
        background: white;
        border-radius: 24px;
        box-shadow: var(--card-shadow);
        border: 1px solid rgba(0, 0, 0, 0.02);
        overflow: hidden;
    }

    .info-label {
        font-size: 0.75rem;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        color: #64748b;
        font-weight: 700;
        margin-bottom: 4px;
    }

    .info-value {
        color: #1e293b;
        font-weight: 500;
        font-size: 1.05rem;
    }

    .message-box {
        background: #f1f5f9;
        border-radius: 16px;
        padding: 24px;
        color: #334155;
        line-height: 1.6;
        white-space: pre-wrap;
    }

    .back-btn {
        background: white;
        color: #64748b;
        border: 1px solid #e2e8f0;
        border-radius: 12px;
        padding: 8px 16px;
        transition: all 0.2s;
    }

    .back-btn:hover {
        background: #f8fafc;
        color: #1e293b;
    }

    .avatar-large {
        width: 64px;
        height: 64px;
        border-radius: 16px;
        background: var(--primary-gradient);
        color: white;
        display: flex; align-items: center; justify-content: center;
        font-size: 24px; font-weight: bold;
    }

    /* New Invoice Button Styling */
    .btn-invoice-action {
        background: #10b981;
        color: white;
        border: none;
        transition: 0.3s;
    }
    .btn-invoice-action:hover {
        background: #059669;
        color: white;
        transform: translateY(-2px);
    }
</style>
@endpush

@section('content')
<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <a href="{{ route('admin.inquiries.index') }}" class="back-btn text-decoration-none d-inline-flex align-items-center gap-2">
                <i class="bi bi-arrow-left"></i> Back to Pipeline
            </a>
        </div>
        <div class="d-flex gap-2">
            <form action="{{ route('admin.inquiry.toggle', $inquiry->id) }}" method="POST">
                @csrf
                <button class="btn btn-{{ $inquiry->is_read ? 'outline-secondary' : 'primary' }} rounded-pill px-4">
                    <i class="bi {{ $inquiry->is_read ? 'bi-envelope' : 'bi-check2-all' }} me-2"></i>
                    Mark as {{ $inquiry->is_read ? 'Unread' : 'Read' }}
                </button>
            </form>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-lg-8">
            <div class="detail-card p-4 p-md-5">
                <div class="d-flex align-items-center gap-4 mb-5">
                    <div class="avatar-large">
                        {{ strtoupper(substr($inquiry->name, 0, 1)) }}
                    </div>
                    <div>
                        <h3 class="fw-bold mb-1 text-dark">{{ $inquiry->name }}</h3>
                        <p class="text-muted mb-0">Submitted {{ $inquiry->created_at->format('M d, Y • h:i A') }}</p>
                    </div>
                </div>

                <div class="mb-4">
                    <h6 class="info-label">Requirement Details</h6>
                    <div class="message-box">
                        {{ $inquiry->message }}
                    </div>
                </div>

                <div class="row g-4 mt-2">
                    <div class="col-md-6">
                        <div class="p-3 border rounded-4">
                            <h6 class="info-label">Email Address</h6>
                            <div class="info-value">
                                <a href="mailto:{{ $inquiry->email }}" class="text-decoration-none text-primary">
                                    {{ $inquiry->email }} <i class="bi bi-box-arrow-up-right small"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 border rounded-4">
                            <h6 class="info-label">Project Budget</h6>
                            <div class="info-value text-success">
                                <i class="bi bi-currency-dollar"></i> {{ $inquiry->budget ?: 'Not Specified' }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="detail-card p-4 mb-4">
                <h6 class="fw-bold mb-3">Quick Actions</h6>
                <div class="d-grid gap-2">
                    <a href="{{ route('admin.invoices.create', ['inquiry_id' => $inquiry->id]) }}" class="btn btn-invoice-action rounded-3 py-2 fw-bold">
                        <i class="bi bi-file-earmark-plus-fill me-2"></i> Create Invoice
                    </a>
                    
                    <a href="mailto:{{ $inquiry->email }}" class="btn btn-dark rounded-3 py-2">
                        <i class="bi bi-reply-fill me-2"></i> Reply via Email
                    </a>
                    
                    <button class="btn btn-light border rounded-3 py-2 text-danger" onclick="confirmDelete()">
                        <i class="bi bi-trash3 me-2"></i> Delete Inquiry
                    </button>
                </div>

                <hr class="my-4 opacity-50">

                <h6 class="info-label">Metadata</h6>
                <div class="small">
                    <div class="d-flex justify-content-between mb-2">
                        <span class="text-muted">Status:</span>
                        <span class="badge {{ $inquiry->is_read ? 'bg-success-subtle text-success' : 'bg-warning-subtle text-warning' }}">
                            {{ $inquiry->is_read ? 'Processed' : 'New Inquiry' }}
                        </span>
                    </div>
                    <div class="d-flex justify-content-between">
                        <span class="text-muted">Reference ID:</span>
                        <span class="text-dark">#INQ-{{ str_pad($inquiry->id, 5, '0', STR_PAD_LEFT) }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function confirmDelete() {
        if(confirm('Are you sure you want to remove this inquiry? This action cannot be undone.')) {
            // Aapka delete form ka logic yahan aayega
        }
    }
</script>
@endsection