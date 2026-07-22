<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard - Diskominfo</title>
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <style>
        body {
            margin: 0;
            font-family: 'Instrument Sans', ui-sans-serif, system-ui, sans-serif;
            background: #F8FAFC;
            color: #0F172A;
            min-height: 100vh;
        }
        .page {
            max-width: 1080px;
            margin: 0 auto;
            padding: 32px;
        }
        .card {
            background: white;
            border-radius: 24px;
            box-shadow: 0 18px 40px rgba(15, 23, 42, 0.08);
            padding: 32px;
        }
        h1 {
            margin: 0 0 10px;
            font-size: clamp(2rem, 3vw, 2.8rem);
        }
        p {
            margin: 0 0 24px;
            color: #475569;
            line-height: 1.75;
        }
        .actions {
            display: flex;
            justify-content: flex-end;
        }
        .button {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: #F43F5E;
            color: white;
            border: none;
            border-radius: 14px;
            padding: 12px 18px;
            text-decoration: none;
            font-weight: 700;
        }
    </style>
</head>
<body>
    <div class="page">
        <div class="actions">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="button" type="submit">Keluar</button>
            </form>
        </div>
        <div class="card">
            <h1>Dashboard</h1>
            <p>Selamat datang, {{ auth()->user()->name ?? auth()->user()->email }}. Anda telah berhasil masuk ke sistem Diskominfo.</p>
            <p>Gunakan halaman ini untuk mengelola konten dan melihat informasi internal aplikasi.</p>
        </div>
    </div>
</body>
</html>
