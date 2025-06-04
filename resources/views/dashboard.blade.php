<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f5f5f5;
        }

        .dashboard-card {
            border-radius: 20px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

<div class="container py-5">
    <div class="text-end">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="btn btn-outline-danger">Logout</button>
        </form>
    </div>

    <div class="card dashboard-card mt-4 p-5 text-center">
        <h1>Selamat datang, {{ Auth::user()->name }}!</h1>
        <p class="lead">Ini adalah halaman dashboard setelah login berhasil.</p>
    </div>
</div>

</body>
</html>
