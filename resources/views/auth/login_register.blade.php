<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login & Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Style -->
    <style>
        body {
            background: linear-gradient(135deg, #3A0519, #5b0a2d);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Segoe UI', sans-serif;
        }

        .card {
            border: none;
            border-radius: 20px;
            padding: 2rem;
            background-color: #fff;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            animation: fadeIn 0.8s ease;
        }

        .nav-pills .nav-link {
            border-radius: 30px;
            padding: 10px 20px;
            transition: all 0.3s ease;
        }

        .nav-pills .nav-link.active {
            background-color: #3A0519;
        }

        .btn-primary {
            background-color: #3A0519;
            border: none;
        }

        .btn-success {
            background-color: #5b0a2d;
            border: none;
        }

        .btn:hover {
            opacity: 0.9;
        }

        @keyframes fadeIn {
            from {opacity: 0; transform: translateY(20px);}
            to {opacity: 1; transform: translateY(0);}
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card mx-auto" style="max-width: 420px;">
        <!-- Tabs -->
        <ul class="nav nav-pills mb-4 justify-content-center" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="login-tab" data-bs-toggle="pill" data-bs-target="#login" type="button"
                    role="tab" aria-controls="login" aria-selected="true">Masuk</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="register-tab" data-bs-toggle="pill" data-bs-target="#register" type="button"
                    role="tab" aria-controls="register" aria-selected="false">Daftar</button>
            </li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content" id="pills-tabContent">
            <!-- Login Form -->
            <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="emailLogin" class="form-label">Email</label>
                        <input type="email" name="email" id="emailLogin" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="passwordLogin" class="form-label">Password</label>
                        <input type="password" name="password" id="passwordLogin" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Masuk</button>
                </form>
            </div>

            <!-- Register Form -->
            <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nameRegister" class="form-label">Nama</label>
                        <input type="text" name="name" id="nameRegister" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="emailRegister" class="form-label">Email</label>
                        <input type="email" name="email" id="emailRegister" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="passwordRegister" class="form-label">Password</label>
                        <input type="password" name="password" id="passwordRegister" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-success w-100">Daftar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS (wajib diletakkan di bawah) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
