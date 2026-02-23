@extends('admin.layouts.app')

@section('title', 'Generate Invoice')

@push('styles')
<style>
    :root {
        --primary-color: #6366f1;
        --bg-soft: #f8fafc;
        --text-secondary: #64748b;
        --border-color: #e2e8f0;
    }

    body {
        background-color: var(--bg-soft);
        font-family: 'Inter', sans-serif;
    }

    /* Main Card */
    .invoice-card {
        background: white;
        border-radius: 12px;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
        border: 1px solid var(--border-color);
        overflow: hidden;
    }

    /* Header */
    .invoice-header {
        background: #fff;
        padding: 12px 20px;
        /* Thoda aur compact kiya */
        border-bottom: 1px solid var(--border-color);
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .invoice-badge {
        background: #eef2ff;
        color: var(--primary-color);
        padding: 3px 8px;
        border-radius: 6px;
        font-weight: 600;
        font-size: 1rem;
    }

    /* Form Elements */
    .form-label-sm {
        font-size: 1rem;
        color: var(--text-secondary);
        font-weight: 600;
        margin-bottom: 3px;
        display: block;
        text-transform: uppercase;
    }

    .form-control,
    .form-select {
        border-radius: 6px;
        border: 1px solid var(--border-color);
        padding: 5px 8px;
        /* Height kam */
        font-size: 1rem;
        box-shadow: none;
    }

    /* Textarea specific style */
    textarea.form-control {
        resize: vertical;
        min-height: 34px;
    }

    .form-control:focus,
    .form-select:focus {
        border-color: var(--primary-color);
        box-shadow: 0 0 0 2px rgba(99, 102, 241, 0.1);
    }

    /* Sections */
    .section-box {
        background: #fafafa;
        border-radius: 8px;
        padding: 15px;
        height: 100%;
        border: 1px solid var(--border-color);
    }

    .box-title {
        font-size: 1rem;
        font-weight: 700;
        margin-bottom: 8px;
        color: #334155;
        text-transform: uppercase;
        border-bottom: 1px dashed #e2e8f0;
        padding-bottom: 5px;
    }

    /* Table */
    .table-invoice {
        width: 100%;
        margin-bottom: 0;
    }

    .table-invoice thead th {
        font-size: 1rem;
        color: var(--text-secondary);
        font-weight: 700;
        padding: 8px 5px;
        background: #f1f5f9;
        text-transform: uppercase;
    }

    .table-invoice tbody td {
        padding: 4px;
        vertical-align: middle;
    }

    /* Summary */
    .summary-box {
        background: #f8fafc;
        border-radius: 8px;
        padding: 12px;
        border: 1px solid var(--border-color);
    }

    .summary-row {
        display: flex;
        justify-content: space-between;
        margin-bottom: 6px;
        font-size: 1rem;
        color: #475569;
    }

    .summary-total {
        border-top: 1px dashed #cbd5e1;
        padding-top: 8px;
        margin-top: 8px;
        font-weight: 700;
        font-size: 1rem;
        color: #0f172a;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .btn-save {
        background: #0f172a;
        color: white;
        border: none;
        padding: 8px 15px;
        border-radius: 6px;
        font-size: 0.85rem;
        font-weight: 500;
        width: 100%;
    }

    .btn-save:hover {
        background: #1e293b;
        color: white;
    }

    .gst-hide {
        display: none !important;
    }

    .input-error {
        border-color: #ef4444 !important;
        background: #fff5f5;
    }
</style>
@endpush

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-xl-11 col-lg-12">

            <form id="invoiceForm" method="POST" action="{{ route('admin.invoices.store') }}">
                @csrf
                <input type="hidden" name="invoice_no" value="{{ $invoiceNo }}">

                <div class="invoice-card">
                    <div class="invoice-header">
                        <div class="d-flex align-items-center gap-2">
                            <a href="{{ route('admin.inquiries.index') }}" class="btn btn-sm btn-light border px-2">
                                <i class="bi bi-arrow-left"></i>
                            </a>
                            <span class="fw-bold text-dark" style="font-size: 1rem;">New Invoice</span>
                            <span class="invoice-badge">#{{ $invoiceNo }}</span>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <select name="invoice_type" id="invoiceType" class="form-select form-select-sm" style="width: 120px; background-color: #f8fafc;">
                                <option value="">Type</option>
                                <option value="gst">GST</option>
                                <option value="non-gst">Non-GST</option>
                            </select>
                            <a href="{{ route('admin.invoices.index') }}" class="btn btn-light btn-sm border" style="font-size: 0.8rem;">
                                History
                            </a>
                        </div>
                    </div>

                    <div class="p-2">

                        <div class="row g-3 mb-3">
                            <div class="col-md-4">
                                <div class="section-box p-3" style="background: #f8f9fa; border-radius: 8px; border-left: 4px solid #333;">
                                    <h6 class="text-uppercase text-muted small fw-bold mb-3">From:</h6>

                                    <h4 style="font-weight: 800; color: #2c3e50; margin-bottom: 10px;">
                                        <i class="fas fa-building text-primary me-2"></i> {{ $company['company_name'] }}
                                    </h4>

                                    <p style="margin-bottom: 8px; font-size: 0.9rem;">
                                        <i class="fas fa-id-card text-secondary me-2"></i>
                                        <strong>GSTIN:</strong> <span class="badge bg-light text-dark border">{{ $company['gstin'] }}</span>
                                    </p>

                                    <p style="margin-bottom: 8px; font-size: 0.9rem; line-height: 1.4;">
                                        <i class="fas fa-map-marker-alt text-danger me-2"></i>
                                        {{ $company['address'] }}
                                    </p>

                                    <div style="margin-top: 12px; font-size: 0.85rem; color: #555;">
                                        <p style="margin-bottom: 4px;">
                                            <i class="fas fa-envelope text-info me-2"></i> {{ $company['company_email'] }}
                                        </p>
                                        <p style="margin-bottom: 0;">
                                            <i class="fas fa-phone-alt text-success me-2"></i> {{ $company['company_phone'] }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-8">
                                <div class="section-box bg-white">
                                    <div class="box-title text-success">Bill To (Customer)</div>
                                    <div class="row g-2">
                                        <div class="col-md-3">
                                            <label class="form-label-sm">Mobile</label>
                                            <input type="tel" class="form-control" name="client_phone" maxlength="10" placeholder="10 digits" oninput="this.value=this.value.replace(/[^0-9]/g,'');">
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label-sm">Name</label>
                                            <input class="form-control" name="client_name" placeholder='Customer Name'>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label-sm">Email</label>
                                            <input class="form-control" name="client_email" placeholder='Customer Email'>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label-sm">PAN</label>
                                            <input class="form-control" name="client_pan" placeholder='Pan No.'>
                                        </div>

                                        <div class="col-md-7">
                                            <label class="form-label-sm">Customer Address</label>
                                            <textarea
                                                class="form-control"
                                                name="client_address"
                                                rows="2"
                                                placeholder="House No, Street, Area"
                                                style="resize: none; overflow: hidden; height: auto; min-height: 38px;"
                                                oninput="this.style.height = ''; this.style.height = this.scrollHeight + 'px'"></textarea>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label-sm">State</label>
                                            <input class="form-control" name="client_state">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label-sm">State Code</label>
                                            <input type="number" class="form-control" name="client_state_code">
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label-sm gst-col">GSTIN</label>
                                            <input class="form-control gst-col" name="client_gstin">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3 border rounded">
                            <table class="table-invoice">
                                <thead>
                                    <tr>
                                        <th class="ps-3">Item Description</th>
                                        <th style="width:70px" class="text-center">Qty</th>
                                        <th style="width:100px">Price</th>
                                        <th style="width:90px">Disc</th>
                                        <th class="gst-col" style="width:85px">Tax</th>
                                        <th class="text-end pe-3" style="width:110px">Total</th>
                                    </tr>
                                </thead>
                                <tbody id="items">
                                    <tr>
                                        <td class="ps-3"><input name="items[0][description]" class="form-control" placeholder="Item Name"></td>
                                        <td><input name="items[0][quantity]" type="number" class="form-control text-center qty" value="1"></td>
                                        <td><input name="items[0][unit_price]" type="number" class="form-control price" value="0"></td>
                                        <td><input name="items[0][discount]" type="number" class="form-control discount" value="0"></td>
                                        <td class="gst-col">
                                            <select name="items[0][gst_rate]" class="form-select tax">
                                                <option value="0">0%</option>
                                                <option value="5">5%</option>
                                                <option value="12">12%</option>
                                                <option value="18" selected>18%</option>
                                                <option value="28">28%</option>
                                            </select>
                                        </td>
                                        <td class="total text-end pe-3 fw-bold">0.00</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="p-2 bg-light border-top d-flex gap-2">
                                <button type="button" class="btn btn-outline-primary btn-sm" onclick="addRow()" style="font-size: 0.75rem;">
                                    + Add Item
                                </button>
                                <button type="button" class="btn btn-outline-danger btn-sm" onclick="removeLastRow()" style="font-size: 0.75rem;">
                                    - Remove Item
                                </button>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-6 col-lg-5">
                                    <div id="bankDetails" class="p-3 border rounded d-none shadow-sm h-75" style="background-color: #f0f7ff; border-left: 5px solid #4aa2fa !important;">
                                        <h6 class="text-primary mb-3"><strong><i class="fas fa-university"></i> Bank Details</strong></h6>
                                        <div class="row small">
                                            <div class="col-5 text-muted">Bank Name:</div>
                                            <div class="col-7 fw-bold"><span id="displayBankName"></span></div>

                                            <div class="col-5 text-muted">A/C No:</div>
                                            <div class="col-7 fw-bold"><span id="displayAccNo"></span></div>

                                            <div class="col-5 text-muted">IFSC Code:</div>
                                            <div class="col-7 fw-bold"><span id="displayIfsc"></span></div>

                                            <div class="col-5 text-muted">Branch:</div>
                                            <div class="col-7 fw-bold"><span id="displayBranchname"></span></div>

                                            <div class="col-5 text-muted">A/C Type:</div>
                                            <div class="col-7 fw-bold"><span id="displayBranchnameActype"></span></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-4 offset-lg-3">
                                    <div class="summary-box p-3 border rounded shadow-sm bg-light">
                                        <div class="summary-row d-flex justify-content-between">
                                            <span>Subtotal</span>
                                            <span id="sub" class="fw-bold">0.00</span>
                                        </div>
                                        <div class="summary-row d-flex justify-content-between text-danger">
                                            <span>Discount</span>
                                            <span>- <span id="bill_discount">0.00</span></span>
                                        </div>

                                        <div class="gst-col border-top border-bottom py-2 my-2">
                                            <div class="summary-row d-flex justify-content-between mb-1 small text-muted">
                                                <span>CGST (<span id="cgst_rate_label">0</span>%)</span>
                                                <span id="cgst">0.00</span>
                                            </div>
                                            <div class="summary-row d-flex justify-content-between mb-0 small text-muted">
                                                <span>SGST (<span id="sgst_rate_label">0</span>%)</span>
                                                <span id="sgst">0.00</span>
                                            </div>
                                        </div>

                                        <div class="summary-total d-flex justify-content-between fs-5 fw-bold text-dark mb-3">
                                            <span>Grand Total</span>
                                            <span>₹<span id="grand">0.00</span></span>
                                        </div>

                                        <div class="pt-2 border-top">
                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                <span class="small fw-semibold">Paid Amount</span>
                                                <input type="number" id="paid" name="paid" value="0" class="form-control form-control-sm text-end" style="width: 100px;">
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center p-2 bg-white rounded border border-danger">
                                                <span class="small fw-bold text-danger">Balance Due</span>
                                                <span class="fw-bold text-danger" id="due">0.00</span>
                                            </div>
                                        </div>

                                        <div class="mt-3">
                                            <button type="submit" class="btn btn-primary w-100 fw-bold">
                                                <i class="fas fa-file-invoice"></i> Generate Invoice
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
    let rowIndex = 1;
    const type = document.getElementById('invoiceType');


    function removeLastRow() {
        const table = document.getElementById('items');
        const rowCount = table.rows.length;
        if (rowCount > 1) {
            table.deleteRow(rowCount - 1);
        } else {
            alert("Kam se kam ek item hona zaroori hai!");
        }
    }

    function addRow() {
        document.getElementById('items').insertAdjacentHTML('beforeend', `
    <tr>
        <td class="ps-3"><input name="items[${rowIndex}][description]" class="form-control" placeholder="Item Name"></td>
        <td><input name="items[${rowIndex}][quantity]" type="number" class="form-control text-center qty" value="1"></td>
        <td><input name="items[${rowIndex}][unit_price]" type="number" class="form-control price" value="0"></td>
        <td><input name="items[${rowIndex}][discount]" type="number" class="form-control discount" value="0"></td>
        <td class="gst-col">
             <select name="items[${rowIndex}][gst_rate]" class="form-select tax">
                <option value="0">0%</option>
                <option value="5">5%</option>
                <option value="12">12%</option>
                <option value="18" selected>18%</option>
                <option value="28">28%</option>
            </select>
        </td>
        <td class="total text-end pe-3 fw-bold">0.00</td>
    </tr>`);
        rowIndex++;
        toggleGST();
    }

    function toggleGST() {
        const isGST = type.value === "gst";
        document.querySelectorAll('.gst-col').forEach(el => {
            el.classList.toggle('gst-hide', !isGST);
        });
        if (!isGST) document.querySelectorAll('.tax').forEach(t => t.value = 0);
        calculate();
    }

    function calculate() {
        let sub = 0,
            cgst = 0,
            sgst = 0,
            totalDiscount = 0,
            totalBase = 0,
            totalGstRate = 0;

        document.querySelectorAll('#items tr').forEach(row => {
            let qty = +row.querySelector('.qty').value || 0;
            let price = +row.querySelector('.price').value || 0;
            let discount = +row.querySelector('.discount').value || 0;
            let tax = type.value === "gst" ? +row.querySelector('.tax').value || 0 : 0;

            let base = (qty * price);
            let afterDisc = Math.max(0, base - discount);
            let gstAmt = afterDisc * (tax / 100);
            let total = afterDisc + gstAmt;

            row.querySelector('.total').innerText = total.toFixed(2);

            sub += base;
            totalDiscount += discount;
            cgst += gstAmt / 2;
            sgst += gstAmt / 2;
            totalBase += afterDisc;
            totalGstRate += tax;
        });

        let avgRate = totalBase > 0 ? (totalGstRate / document.querySelectorAll('#items tr').length) : 0;
        let halfRate = (avgRate / 2).toFixed(1);

        const cgstLabel = document.getElementById('cgst_rate_label');
        const sgstLabel = document.getElementById('sgst_rate_label');
        if (cgstLabel) cgstLabel.innerText = halfRate;
        if (sgstLabel) sgstLabel.innerText = halfRate;

        document.getElementById('bill_discount').innerText = totalDiscount.toFixed(2);

        let less = Math.max(0, sub - totalDiscount);
        let grand = less + cgst + sgst;
        let paid = +document.getElementById('paid').value || 0;
        let due = Math.max(0, grand - paid);

        document.getElementById('sub').innerText = sub.toFixed(2);
        document.getElementById('cgst').innerText = cgst.toFixed(2);
        document.getElementById('sgst').innerText = sgst.toFixed(2);
        document.getElementById('grand').innerText = grand.toFixed(2);
        document.getElementById('due').innerText = due.toFixed(2);
    }

    document.addEventListener('input', e => {
        if (e.target.matches('.qty,.price,.discount,.tax,#paid')) calculate();
    });

    type.addEventListener('change', toggleGST);
    toggleGST();

    document.querySelector('[name="client_phone"]').addEventListener('keyup', function() {
        let phone = this.value.trim();
        if (phone.length === 10) {
            // Dynamic Route using Blade (agar ye script file .blade.php ke andar hai)
            let url = "{{ route('admin.customers.ajax', ':phone') }}".replace(':phone', phone);

            fetch(url)
                .then(r => {
                    if (!r.ok) throw new Error("Customer not found");
                    return r.json();
                })
                .then(d => {
                    // ... baki sara logic same rahega
                    document.querySelector('[name="client_name"]').value = d.name || '';
                    document.querySelector('[name="client_email"]').value = d.email || '';
                    document.querySelector('[name="client_address"]').value = d.address || '';
                    document.querySelector('[name="client_gstin"]').value = d.gstin || '';
                    document.querySelector('[name="client_pan"]').value = d.pan || '';
                    document.querySelector('[name="client_state"]').value = d.state || '';
                    document.querySelector('[name="client_state_code"]').value = d.state_code || '';
                })
                .catch(e => {
                    console.log("Fetch Error:", e);
                    // Clear fields if error occurs
                    clearClientFields();
                });
        } else {
            document.querySelector('[name="client_name"]').value = '';
            document.querySelector('[name="client_email"]').value = '';
            document.querySelector('[name="client_address"]').value = ''; // Works for Textarea too
            document.querySelector('[name="client_gstin"]').value = '';
            document.querySelector('[name="client_pan"]').value = '';
            document.querySelector('[name="client_state"]').value = '';
            document.querySelector('[name="client_state_code"]').value = '';
        }
    });

    function clearClientFields() {
        const fields = ['name', 'email', 'address', 'gstin', 'pan', 'state', 'state_code'];
        fields.forEach(field => {
            document.querySelector(`[name="client_${field}"]`).value = '';
        });
    }
    // Validation
    document.getElementById('invoiceForm').addEventListener('submit', function(e) {
        let valid = true;
        document.querySelectorAll('.input-error').forEach(el => el.classList.remove('input-error'));

        const phone = document.querySelector('[name="client_phone"]');
        const name = document.querySelector('[name="client_name"]');

        if (!name.value.trim()) {
            name.classList.add('input-error');
            valid = false;
        }
        if (!/^\d{10}$/.test(phone.value)) {
            phone.classList.add('input-error');
            valid = false;
        }

        document.querySelectorAll('#items tr').forEach(row => {
            let qty = row.querySelector('.qty');
            let price = row.querySelector('.price');
            if (+qty.value <= 0) {
                qty.classList.add('input-error');
                valid = false;
            }
            if (+price.value < 0) {
                price.classList.add('input-error');
                valid = false;
            }
        });

        if (!valid) {
            e.preventDefault();
            alert("Please check required fields.");
        }
    });
</script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script>
    $(document).ready(function() {
        $('#invoiceType').on('change', function() {
            let type = $(this).val();

            if (!type) {
                $('#bankDetails').addClass('d-none');
                return;
            }

            $.ajax({
                url: "{{ route('admin.bank.getActive') }}",
                method: "GET",
                data: {
                    type: type
                },
                beforeSend: function() {
                    $('#displayBankName').text('Loading...');
                    $('#bankDetails').removeClass('d-none');
                },
                success: function(response) {
                    if (response.success) {
                        $('#displayBankName').text(response.bank.bank_name);
                        $('#displayAccNo').text(response.bank.account_no);
                        $('#displayIfsc').text(response.bank.ifsc_code);
                        $('#displayBranchname').text(response.bank.branch_name);
                        $('#displayBranchnameActype').text(response.bank.account_type);

                        $('#bankDetails').removeClass('d-none').css('background-color', '#eef2ff');
                    } else {
                        $('#bankDetails').addClass('d-none');
                        console.log(response.message);
                    }
                },
                error: function(xhr) {
                    console.log("Error:", xhr.responseText);
                    $('#bankDetails').addClass('d-none');
                }
            });
        });
    });
</script>
@endpush