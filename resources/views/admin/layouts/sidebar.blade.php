<style>
    .sidebar-nav {
        width: 280px;
        background: #0f172a;
        min-height: 100vh;
        position: fixed;
        left: 0;
        top: 0;
        padding: 30px 20px;
        color: white;
        z-index: 1100;
        border-right: 1px solid rgba(255, 255, 255, 0.05);
    }

    .nav-link {
        transition: all 0.3s ease;
        border-radius: 12px !important;
        margin-bottom: 8px;
        padding: 12px 18px !important;
        font-weight: 500;
        display: flex;
        align-items: center;
        color: rgba(255, 255, 255, 0.6) !important;
    }

    /* Active State Glow */
    .nav-link.active {
        background: linear-gradient(135deg, #6366f1 0%, #a855f7 100%) !important;
        color: white !important;
        box-shadow: 0 4px 15px rgba(99, 102, 241, 0.3);
    }

    .nav-link:hover:not(.active) {
        background: rgba(255, 255, 255, 0.05);
        color: white !important;
        transform: translateX(5px);
    }

    .sidebar-brand {
        font-size: 1.5rem;
        font-weight: 800;
        letter-spacing: -1px;
        margin-bottom: 40px;
        padding-left: 10px;
    }
</style>

<div class="sidebar-nav shadow-lg">
    <div class="sidebar-brand">
        CRM <span class="text-primary">Pro</span>
    </div>

    <div class="nav flex-column">
        <a href="{{ route('admin.dashboard') }}"
            class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
            <i class="bi bi-grid-1x2-fill me-3"></i> Dashboard
        </a>

        <a href="{{ route('admin.inquiries.index') }}"
            class="nav-link {{ request()->routeIs('admin.inquiries.*') ? 'active' : '' }}">
            <i class="bi bi-chat-left-dots-fill me-3"></i> Inquiries
        </a>

        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('admin.invoices.*') ? '' : 'collapsed' }}"
                data-bs-toggle="collapse"
                href="#billingMenu"
                role="button"
                aria-expanded="{{ request()->routeIs('admin.invoices.*') ? 'true' : 'false' }}"
                aria-controls="billingMenu">
                <i class="bi bi-receipt-cutoff me-3"></i>
                <span>Billing</span>
                <i class="bi bi-chevron-down ms-auto small"></i>
            </a>

            <div class="collapse {{ request()->routeIs('admin.invoices.*') ? 'show' : '' }}" id="billingMenu">
                <ul class="nav flex-column ms-4 small">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('admin.invoices.create') ? 'active text-primary' : 'text-muted' }}"
                            href="{{ route('admin.invoices.create') }}">
                            <i class="bi bi-plus-circle me-2"></i> Create Invoice
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('admin.invoices.index') ? 'active text-primary' : 'text-muted' }}"
                            href="{{ route('admin.invoices.index') }}">
                            <i class="bi bi-list-ul me-2"></i> View Invoices
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('admin.bank.*') ? '' : 'collapsed' }}"
                data-bs-toggle="collapse"
                href="#bankMenu"
                role="button"
                aria-expanded="{{ request()->routeIs('admin.bank.*') ? 'true' : 'false' }}"
                aria-controls="bankMenu">
                <i class="bi bi-shield-lock-fill me-3"></i>
                <span>Bank Details</span>
                <i class="bi bi-chevron-down ms-auto small"></i>
            </a>

            <div class="collapse {{ request()->routeIs('admin.bank.*') ? 'show' : '' }}" id="bankMenu">
                <ul class="nav flex-column ms-4 small">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('admin.bank.create') ? 'active text-primary' : 'text-muted' }}"
                            href="{{ route('admin.bank.create') }}">
                            <i class="bi bi-plus-square-fill me-2"></i> Add Bank
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('admin.bank.index') ? 'active text-primary' : 'text-muted' }}"
                            href="{{ route('admin.bank.index') }}">
                            <i class="bi bi-piggy-bank-fill me-2"></i> Bank List
                        </a>
                    </li>
                </ul>
            </div>
        </li>
    </div>
</div>