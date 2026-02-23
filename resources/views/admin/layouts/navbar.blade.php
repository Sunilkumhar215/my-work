<div class="dashboard-header mb-4">
    <div class="container-fluid px-4 d-flex justify-content-between align-items-center">
        <div>
            <h4 class="fw-bold mb-0">@yield('page-title','Dashboard')</h4>
            <p class="text-muted small mb-0">@yield('page-subtitle')</p>
        </div>

        <div class="dropdown">
            <button class="btn btn-white border shadow-sm dropdown-toggle d-flex align-items-center gap-2 py-1 px-2"
                type="button"
                id="profileDropdown"
                data-bs-toggle="dropdown"
                aria-expanded="false"
                style="border-radius: 50px;">

                <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                    style="width: 32px; height: 32px;">
                    <i class="bi bi-person-fill"></i>
                </div>

                <span class="d-none d-md-inline-block fw-medium small me-1">
                    {{ Auth::user()->name ?? 'My Account' }}
                </span>
            </button>

            <ul class="dropdown-menu dropdown-menu-end shadow border-0 mt-2" aria-labelledby="profileDropdown" style="min-width: 200px;">
                <li class="px-3 py-2 border-bottom mb-2">
                    <p class="mb-0 small fw-bold text-uppercase text-muted">User Settings</p>
                </li>
                <li>
                    <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="{{ route('admin.profile') }}">
                        <i class="bi bi-person text-secondary"></i> My Profile
                    </a>
                </li>
                <li>
                    <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="#">
                        <i class="bi bi-gear text-secondary"></i> Account Settings
                    </a>
                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>

                <li>
                    <a class="dropdown-item d-flex align-items-center gap-2 py-2 text-danger" href="javascript:void(0);"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="bi bi-box-arrow-right"></i> Logout
                    </a>

                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>