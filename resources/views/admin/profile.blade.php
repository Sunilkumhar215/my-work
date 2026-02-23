@extends('admin.layouts.app')

@section('title', 'Add New Bank')

@include('admin.layouts.styles')
@push('style')

@endpush
@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-white py-3">
                    <h5 class="mb-0 fw-bold"><i class="bi bi-building me-2 text-primary"></i>Business Profile</h5>
                </div>
                <div class="card-body p-4">
                    @if(session('success'))
                    <div class="alert alert-success border-0 shadow-sm">{{ session('success') }}</div>
                    @endif

                    <form action="{{ route('admin.profile.store') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-12">
                                <label class="form-label small fw-bold text-uppercase">Company Name</label>
                                <input type="text" name="company_name" class="form-control" value="{{ $profile->company_name ?? '' }}" required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label small fw-bold text-uppercase">Email Address</label>
                                <input type="email" name="company_email" class="form-control" value="{{ $profile->company_email ?? '' }}" required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label small fw-bold text-uppercase">Phone Number</label>
                                <input type="text" name="company_phone" class="form-control" value="{{ $profile->company_phone ?? '' }}" required>
                            </div>

                            <div class="col-md-12">
                                <label class="form-label small fw-bold text-uppercase">GSTIN Number</label>
                                <input type="text" name="gstin" class="form-control text-uppercase" value="{{ $profile->gstin ?? '' }}" required>
                            </div>

                            <div class="col-md-12">
                                <label class="form-label small fw-bold text-uppercase">Office Address</label>
                                <textarea name="address" class="form-control" rows="3" required>{{ $profile->address ?? '' }}</textarea>
                            </div>

                            <div class="col-12 mt-4 d-flex justify-content-between align-items-center">
                                <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-secondary px-4 shadow-sm">
                                    <i class="bi bi-arrow-left me-2"></i>Back to Dashboard
                                </a>

                                <button type="submit" class="btn btn-primary px-4 shadow-sm">
                                    <i class="bi bi-save me-2"></i>Update Profile
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection