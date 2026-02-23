@extends('admin.layouts.app')

@section('title', 'Edit Bank Details')

@include('admin.layouts.styles')
@push('styles')
<style>
    :root {
        --primary-gradient: linear-gradient(135deg, #6366f1 0%, #a855f7 100%);
        --bg-soft: #f8fafc;
    }

    body {
        background-color: var(--bg-soft);
        font-family: 'Inter', sans-serif;
    }

    .edit-container {
        background: white;
        border-radius: 24px;
        box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05);
        padding: 40px;
        border: 1px solid rgba(0, 0, 0, 0.02);
    }

    .form-label {
        font-size: 0.75rem;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        color: #64748b;
        font-weight: 700;
        margin-bottom: 8px;
    }

    .form-control,
    .form-select {
        border-radius: 12px;
        padding: 12px 16px;
        border: 1px solid #e2e8f0;
        background-color: #f8fafc;
        transition: all 0.3s ease;
    }

    .form-control:focus {
        background-color: #fff;
        border-color: #6366f1;
        box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.1);
    }

    /* Red border and error styling */
    .form-control.is-invalid,
    .form-select.is-invalid {
        border-color: #ef4444 !important;
        background-color: #fffafb !important;
    }

    .invalid-feedback {
        color: #ef4444;
        font-size: 0.8rem;
        font-weight: 500;
        display: none;
        /* JS handle karega */
    }

    .btn-update {
        background: var(--primary-gradient);
        border: none;
        border-radius: 12px;
        padding: 12px 30px;
        font-weight: 600;
        color: white;
        transition: all 0.3s ease;
    }

    .btn-update:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(99, 102, 241, 0.3);
        color: white;
    }

    .header-icon-edit {
        width: 48px;
        height: 48px;
        border-radius: 12px;
        background: #fff8eb;
        color: #f59e0b;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        margin-bottom: 20px;
        border: 1px solid #fef3c7;
    }
</style>
@endpush

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="mb-4">
                <a href="{{ route('admin.bank.index') }}" class="text-muted text-decoration-none">
                    <i class="bi bi-arrow-left me-1"></i> Back to Bank Accounts
                </a>
            </div>

            <div class="edit-container">
                <div class="header-icon-edit">
                    <i class="bi bi-pencil-square"></i>
                </div>

                <div class="mb-4">
                    <h3 class="fw-bold text-dark mb-1">Edit Bank Account</h3>
                    <p class="text-muted">Modify information for <strong>{{ $bank->bank_name }}</strong></p>
                </div>

                <form id="bankForm" method="POST" action="{{ route('admin.bank.update', $bank->id) }}" novalidate>
                    @csrf
                    @method('PUT')

                    <div class="row g-4">
                        <div class="col-md-6">
                            <label class="form-label">Bank Name</label>
                            <input type="text" class="form-control" name="bank_name" value="{{ $bank->bank_name }}" placeholder="Enter bank name">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Account Number</label>
                            <input type="text" class="form-control" name="account_no" value="{{ $bank->account_no }}" placeholder="Enter account number">
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">IFSC Code</label>
                            <input type="text" class="form-control" name="ifsc_code" value="{{ $bank->ifsc_code }}" placeholder="e.g. SBIN0001234">
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">Branch Name</label>
                            <input type="text" class="form-control" name="branch_name" value="{{ $bank->branch_name }}" placeholder="Enter branch">
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">Account Type</label>
                            <select name="account_type" class="form-select">
                                <option value="">Select Type</option>
                                <option value="Savings" {{ $bank->account_type == 'Savings' ? 'selected' : '' }}>Savings</option>
                                <option value="Current" {{ $bank->account_type == 'Current' ? 'selected' : '' }}>Current</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">Invoice Type</label>
                            <select name="invoice_type" class="form-select">
                                <option value="">Select Invoice Type</option>
                                <option value="gst" {{ $bank->invoice_type == 'gst' ? 'selected' : '' }}>GST</option>
                                <option value="non-gst" {{ $bank->invoice_type == 'non-gst' ? 'selected' : '' }}>Non-GST</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">Stamp Duty (₹)</label>
                            <div class="input-group has-validation">
                                <span class="input-group-text bg-light border-end-0" style="border-radius: 12px 0 0 12px;">₹</span>
                                <input type="number" step="0.01" class="form-control border-start-0" name="stamp_duty" value="{{ $bank->stamp_duty }}" style="border-radius: 0 12px 12px 0;">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">Account Status</label>
                            <select name="status" class="form-select">
                                <option value="0" {{ $bank->status == 0 ? 'selected' : '' }}>Inactive</option>
                                <option value="1" {{ $bank->status == 1 ? 'selected' : '' }}>Active (Set as Current)</option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">Account Scenario</label>
                            <textarea class="form-control" name="account_scenario" rows="3">{{ $bank->account_scenario }}</textarea>
                        </div>
                    </div>

                    <div class="mt-5 d-flex justify-content-between align-items-center">
                        <span class="text-muted small">
                            <i class="bi bi-info-circle me-1"></i> Last updated: {{ $bank->updated_at->format('d M, Y') }}
                        </span>
                        <div>
                            <a href="{{ route('admin.bank.index') }}" class="btn btn-light px-4 me-2" style="border-radius: 12px;">Cancel</a>
                            <button type="submit" class="btn btn-update">
                                <i class="bi bi-check2-circle me-2"></i> Update Changes
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.getElementById('bankForm').addEventListener('submit', function(e) {
        let isValid = true;
        // In fields ko check karega
        const requiredFields = ['bank_name', 'account_no', 'ifsc_code', 'branch_name', 'account_type', 'invoice_type'];

        requiredFields.forEach(fieldName => {
            const field = this.querySelector(`[name="${fieldName}"]`);
            if (!field) return;

            // Purane errors hatayein
            field.classList.remove('is-invalid');
            let existingError = field.closest('.col-md-4, .col-md-6, .col-md-12').querySelector('.invalid-feedback');
            if (existingError) existingError.remove();

            if (!field.value.trim()) {
                isValid = false;
                field.classList.add('is-invalid'); // Red border lagayi

                // Error message create karein
                const error = document.createElement('div');
                error.className = 'invalid-feedback';
                error.innerText = 'This field is required.';
                error.style.display = 'block';

                // Field ke parent (col-md) mein add karein
                field.closest('.col-md-4, .col-md-6, .col-md-12').appendChild(error);
            }
        });

        if (!isValid) {
            e.preventDefault(); // Stop reload
            // Pehle error field par focus karein
            this.querySelector('.is-invalid').focus();
        }
    });
</script>
@endpush