@extends('admin.layouts.app')

@section('title', 'Add New Bank')

@include('admin.layouts.styles')
@push('styles')
<style>
    :root {
        --primary-gradient: linear-gradient(135deg, #6366f1 0%, #a855f7 100%);
        --bg-soft: #f8fafc;
        --card-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.04), 0 8px 10px -6px rgba(0, 0, 0, 0.04);
    }

    body {
        background-color: var(--bg-soft);
        font-family: 'Inter', sans-serif;
    }

    .bank-container {
        background: white;
        border-radius: 24px;
        box-shadow: var(--card-shadow);
        border: 1px solid rgba(0, 0, 0, 0.02);
        padding: 40px;
        margin-top: 30px;
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

    .form-control:focus,
    .form-select:focus {
        background-color: #fff;
        border-color: #6366f1;
        box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.1);
        outline: none;
    }

    .btn-save {
        background: var(--primary-gradient);
        border: none;
        border-radius: 12px;
        padding: 12px 24px;
        font-weight: 600;
        color: white;
        transition: transform 0.2s;
    }

    .btn-save:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 15px -3px rgba(99, 102, 241, 0.4);
        color: white;
    }

    .error-message {
        color: #ef4444;
        font-size: 0.75rem;
        margin-top: 4px;
        font-weight: 500;
    }

    .form-control.error {
        border-color: #ef4444 !important;
        background-color: #fef2f2;
    }

    .header-icon {
        width: 48px;
        height: 48px;
        border-radius: 12px;
        background: var(--primary-gradient);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        margin-bottom: 20px;
    }
</style>
@endpush

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="mb-4">
                <a href="{{ route('admin.bank.index') }}" class="btn btn-light rounded-pill px-4 border">
                    <i class="bi bi-arrow-left me-2"></i> Back to Banks
                </a>
            </div>
            <div class="bank-container">

                <div class="header-icon">
                    <i class="bi bi-bank"></i>
                </div>
                <h3 class="fw-bold text-dark mb-1">Add Bank Account</h3>
                <p class="text-muted mb-4">Setup a new bank profile for processing transactions.</p>

                <form id="bankForm" method="POST" action="{{ route('admin.bank.store') }}">
                    @csrf
                    <div class="row g-4">
                        <div class="col-md-6">
                            <label class="form-label">Bank Name</label>
                            <input type="text" class="form-control" name="bank_name" id="bank_name" placeholder="e.g. HDFC Bank">
                            <div class="error-message" id="bank_name_error"></div>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Account Number</label>
                            <input type="text" class="form-control" name="account_no" id="account_no" placeholder="0000 0000 0000">
                            <div class="error-message" id="account_no_error"></div>
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">IFSC Code</label>
                            <input type="text" class="form-control" name="ifsc_code" id="ifsc_code" placeholder="HDFC0001234">
                            <div class="error-message" id="ifsc_code_error"></div>
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">Branch Name</label>
                            <input type="text" class="form-control" name="branch_name" id="branch_name" placeholder="Branch location">
                            <div class="error-message" id="branch_name_error"></div>
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">Account Type</label>
                            <select class="form-select" name="account_type" id="account_type">
                                <option value="">Select Type</option>
                                <option value="Current">Current</option>
                                <option value="Savings">Savings</option>
                            </select>
                            <div class="error-message" id="account_type_error"></div>
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">Invoice Type</label>
                            <select class="form-select" name="invoice_type" id="invoice_type">
                                <option value="">Select Invoice Type</option>
                                <option value="gst">GST</option>
                                <option value="non-gst">Non-GST</option>
                            </select>
                            <div class="error-message" id="invoice_type_error"></div>
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">Stamp Duty (%)</label>
                            <input type="text" class="form-control" name="stamp_duty" id="stamp_duty" placeholder="0.00">
                            <div class="error-message" id="stamp_duty_error"></div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Account Status</label>
                            <select name="status" class="form-select">
                                <option value="0" {{ isset($bank) && $bank->status == 0 ? 'selected' : '' }}>Inactive</option>
                                <option value="1" {{ isset($bank) && $bank->status == 1 ? 'selected' : '' }}>Active (Set as Current)</option>
                            </select>
                            <small class="text-muted">Active karne par purana wala account automatically inactive ho jayega.</small>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">Account Scenario / Notes</label>
                            <textarea class="form-control" name="account_scenario" id="account_scenario" rows="3" placeholder="Describe the use case for this account..."></textarea>
                            <div class="error-message" id="account_scenario_error"></div>
                        </div>
                    </div>

                    <div class="mt-5 d-flex gap-3">
                        <button type="submit" class="btn btn-save px-5">
                            <i class="bi bi-check-circle me-2"></i> Save Bank Details
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('bankForm').addEventListener('submit', function(e) {
        let valid = true;

        // Clear previous errors
        document.querySelectorAll('.error-message').forEach(el => el.innerText = '');
        document.querySelectorAll('.form-control, .form-select').forEach(el => el.classList.remove('error'));

        const showError = (id, msg) => {
            valid = false;
            const field = document.getElementById(id);
            field.classList.add('error');
            document.getElementById(id + '_error').innerText = msg;
        };

        // Basic Validations
        const bankName = document.getElementById('bank_name');
        if (!bankName.value.trim()) showError('bank_name', 'Bank Name is required');

        const accountNo = document.getElementById('account_no');
        if (!accountNo.value.trim()) {
            showError('account_no', 'Account Number is required');
        } else if (!/^\d{9,18}$/.test(accountNo.value.trim())) {
            showError('account_no', 'Must be 9-18 digits');
        }

        const ifsc = document.getElementById('ifsc_code');
        if (!ifsc.value.trim()) {
            showError('ifsc_code', 'IFSC Code is required');
        } else if (!/^[A-Z]{4}0[A-Z0-9]{6}$/.test(ifsc.value.trim().toUpperCase())) {
            showError('ifsc_code', 'Invalid IFSC format (e.g. ABCD0123456)');
        }

        const branch = document.getElementById('branch_name');
        if (!branch.value.trim()) showError('branch_name', 'Branch is required');

        const accountType = document.getElementById('account_type');
        if (!accountType.value) showError('account_type', 'Please select account type');

        const stampDuty = document.getElementById('stamp_duty');
        if (!stampDuty.value.trim()) {
            showError('stamp_duty', 'Required');
        } else if (isNaN(stampDuty.value)) {
            showError('stamp_duty', 'Must be a number');
        }

        if (!valid) e.preventDefault();
    });
</script>
@endsection