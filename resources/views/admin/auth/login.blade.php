<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gkon Admin | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        body {
            background: #f4f7f6;
            height: 100vh;
            display: flex;
            align-items: center;
        }

        .login-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .login-side-img {
            background: #0d6efd;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 40px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="card login-card">
                    <div class="row g-0">
                        <div class="col-md-5 login-side-img d-none d-md-flex">
                            <h2 class="fw-bold">Gkon Admin</h2>
                            <p class="opacity-75">Secure Access to Billing & Inventory Management System.</p>
                            <div class="mt-4"><i class="bi bi-shield-check" style="font-size: 4rem;"></i></div>
                        </div>
                        <div class="col-md-7 p-5 bg-white">
                            <h3 class="fw-bold mb-4 text-dark">Welcome Back!</h3>
                            <form action="{{ route('admin.login.submit') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label small fw-bold">Email or Phone Number</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light border-0"><i class="bi bi-person text-muted"></i></span>
                                        <input type="text" name="login" class="form-control bg-light border-0" placeholder="Enter Email or Phone" required autofocus>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label class="form-label small fw-bold">Password</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light border-0"><i class="bi bi-lock text-muted"></i></span>
                                        <input type="password" name="password" class="form-control bg-light border-0" placeholder="••••••••" required>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary w-100 py-2 shadow-sm fw-bold">
                                    Login to Dashboard <i class="bi bi-arrow-right ms-2"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>