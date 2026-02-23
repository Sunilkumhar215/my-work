@extends('admin.layouts.app')

@section('title','Bank Accounts')

@include('admin.layouts.styles')
@push('styles')
<style>
    :root {
        --primary-gradient: linear-gradient(135deg, #6366f1 0%, #a855f7 100%);
    }

    body {
        background-color: #f8fafc;
        font-family: 'Inter', system-ui, -apple-system, sans-serif;
    }

    /* Card Styling */
    .custom-card {
        border: none;
        border-radius: 24px;
        box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05);
        overflow: hidden;
    }

    .card-header-ui {
        background: white;
        padding: 25px 30px;
        border-bottom: 1px solid #f1f5f9;
    }

    /* Table Styling */
    .table-container {
        padding: 0 20px 20px 20px;
    }

    .table {
        border-collapse: separate;
        border-spacing: 0 8px;
    }

    .table thead th {
        background: transparent;
        color: #64748b;
        text-transform: uppercase;
        font-size: 0.75rem;
        font-weight: 700;
        letter-spacing: 0.05em;
        border: none;
        padding: 15px;
    }

    .table tbody tr {
        background-color: #fff;
        transition: all 0.2s ease;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.02);
    }

    .table tbody tr:hover {
        transform: scale(1.005);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        background-color: #fff !important;
    }

    .table td {
        padding: 16px;
        vertical-align: middle;
        border: none;
        color: #1e293b;
        font-size: 0.9rem;
    }

    .table td:first-child {
        border-radius: 12px 0 0 12px;
    }

    .table td:last-child {
        border-radius: 0 12px 12px 0;
    }

    /* Button Styling */
    .btn-ui {
        padding: 8px 18px;
        border-radius: 12px;
        font-weight: 600;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        border: none;
        font-size: 13px;
    }

    .btn-ui.primary {
        background: var(--primary-gradient);
        color: white !important;
    }

    .btn-action {
        width: 32px;
        height: 32px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 8px;
        transition: 0.2s;
    }

    /* Badge for Account Type */
    .badge-type {
        background: #eef2ff;
        color: #6366f1;
        padding: 5px 12px;
        border-radius: 20px;
        font-weight: 600;
        font-size: 11px;
    }
</style>
@endpush

@section('content')
<div class="container py-5">
    <div class="custom-card bg-white">
        <div class="card-header-ui d-flex justify-content-between align-items-center">
            <div>
                <h4 class="fw-bold text-dark mb-0">Bank Accounts</h4>
                <p class="text-muted small mb-0">Manage your connected financial institutions</p>
            </div>
            <a href="{{ route('admin.bank.create') }}" class="btn-ui primary">
                <i class="bi bi-plus-lg"></i> Add New Bank
            </a>
        </div>

        <div class="table-container">
            <div class="table-responsive">
                <table class="table align-middle">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Bank Name</th>
                            <th>Account Details</th>
                            <th>IFSC & Branch</th>
                            <th>A/C Type</th>
                            <th>Invoice Type</th>
                            <th>Stamp Duty</th>
                            <th>Status</th>
                            <th class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($banks as $i => $bank)
                        <tr>
                            <td class="text-muted fw-bold">{{ $i + 1 }}</td>
                            <td>
                                <div class="fw-bold text-dark">{{ $bank->bank_name }}</div>
                            </td>
                            <td>
                                <div class="text-dark">{{ $bank->account_no }}</div>
                                <div class="text-muted small" style="font-size: 11px;">Scenario: {{ Str::limit($bank->account_scenario, 20) }}</div>
                            </td>
                            <td>
                                <div class="fw-medium">{{ $bank->ifsc_code }}</div>
                                <div class="text-muted small">{{ $bank->branch_name }}</div>
                            </td>
                            <td>
                                <span class="badge-type">{{ $bank->account_type }}</span>
                            </td>

                            <td>
                                @if(strtolower($bank->invoice_type) == 'gst')
                                <span class="badge bg-success-subtle text-success border border-success-subtle px-3">GST</span>
                                @elseif(strtolower($bank->invoice_type) == 'non-gst')
                                <span class="badge bg-warning-subtle text-warning border border-warning-subtle px-3">NON-GST</span>
                                @else
                                <span class="badge bg-light text-muted border px-3">N/A</span>
                                @endif
                            </td>

                            <td>
                                <span class="fw-bold text-success">₹{{ number_format($bank->stamp_duty, 2) }}</span>
                            </td>
                            <td>
                                <div class="form-check form-switch">
                                    <input class="form-check-input status-toggle" type="checkbox"
                                        data-id="{{ $bank->id }}"
                                        data-type="{{ $bank->invoice_type }}"
                                        {{ $bank->status ? 'checked' : '' }}
                                        style="cursor: pointer; width: 40px; height: 20px;">

                                </div>
                            </td>
                            <td class="text-end">
                                <a href="{{ route('admin.bank.edit', $bank->id) }}" class="btn btn-light btn-action text-warning me-1">
                                    <i class="bi bi-pencil-square"></i>
                                </a>

                                <form action="{{ route('admin.bank.destroy', $bank->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-light btn-action text-danger" onclick="return confirm('Delete this bank account?')">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8" class="text-center py-5 text-muted">
                                No bank accounts found. Click "Add New Bank" to get started.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="mt-4">
        <a href="{{ route('admin.inquiries.index') }}" class="btn btn-link text-muted text-decoration-none">
            <i class="bi bi-chevron-left"></i> Back to Inquiries
        </a>
    </div>
</div>
@endsection
@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.status-toggle').on('change', function() {
            let checkbox = $(this);
            let bankId = checkbox.data('id');
            let invoiceType = checkbox.data('type');
            let status = checkbox.prop('checked') ? 1 : 0;
            let label = checkbox.siblings('.status-label');

            $.ajax({
                url: "{{ route('admin.bank.updateStatus') }}", // Naya route banana hoga
                method: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    id: bankId,
                    status: status,
                    invoice_type: invoiceType
                },
                success: function(response) {
                    if (response.success) {
                        // Agar humne kisi ko Active kiya hai, toh usi type ke baaki toggles ko OFF dikhao
                        if (status === 1) {
                            $('.status-toggle[data-type="' + invoiceType + '"]').each(function() {
                                if ($(this).data('id') !== bankId) {
                                    $(this).prop('checked', false);
                                    $(this).siblings('.status-label').text('INACTIVE').removeClass('text-success').addClass('text-muted');
                                }
                            });
                            label.text('ACTIVE').removeClass('text-muted').addClass('text-success');
                        } else {
                            label.text('INACTIVE').removeClass('text-success').addClass('text-muted');
                        }

                        // Optional: Toastr ya Alert dikhane ke liye
                        console.log(response.message);
                    }
                },
                error: function() {
                    checkbox.prop('checked', !status); // Error aane par wapas purani state me le jao
                    alert('Something went wrong!');
                }
            });
        });
    });
</script>
@endpush