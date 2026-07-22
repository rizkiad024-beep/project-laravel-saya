<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login - Diskominfo</title>
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <style>
        body {
            margin: 0;
            font-family: 'Instrument Sans', ui-sans-serif, system-ui, sans-serif;
            background: #F8FAFC;
            color: #0F172A;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 24px;
        }
        .card {
            width: min(100%, 420px);
            background: white;
            border-radius: 24px;
            box-shadow: 0 24px 60px rgba(15, 23, 42, 0.12);
            padding: 32px;
        }
        h1 {
            margin: 0 0 8px;
            font-size: clamp(1.75rem, 3vw, 2.5rem);
        }
        p {
            margin: 0 0 24px;
            color: #475569;
            line-height: 1.75;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #0F172A;
        }
        input {
            width: 100%;
            border-radius: 14px;
            border: 1px solid #CBD5E1;
            padding: 14px 16px;
            font-size: 1rem;
            color: #0F172A;
            margin-bottom: 18px;
            background: #F8FAFC;
        }
        input:focus {
            outline: 2px solid #F43F5E;
            outline-offset: 2px;
            border-color: transparent;
        }
        button {
            width: 100%;
            border: none;
            border-radius: 14px;
            padding: 14px 16px;
            background: #F43F5E;
            color: white;
            font-weight: 700;
            font-size: 1rem;
            cursor: pointer;
        }
        .error {
            margin-bottom: 16px;
            padding: 12px 16px;
            border-radius: 14px;
            background: #fde2e8;
            color: #b91c1c;
            border: 1px solid #fecdd3;
        }
        .footer {
            margin-top: 20px;
            font-size: 0.95rem;
            color: #64748B;
            text-align: center;
        }
        .link {
            color: #0F172A;
            text-decoration: none;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <main class="card">
        <h1>Masuk</h1>
        <p>Silakan masuk dengan email dan password Anda untuk mengakses dashboard.</p>

        @if ($errors->any())
            <div class="error">
                <strong>Terjadi kesalahan:</strong>
                <ul style="margin: 8px 0 0 16px; padding: 0; list-style: disc;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <label for="email">Email</label>
            <input id="email" name="email" type="email" value="{{ old('email') }}" required autofocus />

            <label for="password">Password</label>
            <input id="password" name="password" type="password" required autocomplete="current-password" />

            <div style="display:flex; align-items:center; justify-content:space-between; margin-bottom:20px; gap:12px; font-size:0.95rem; color:#475569;">
                <label style="display:flex; align-items:center; gap:8px; font-weight:400;">
                    <input type="checkbox" name="remember" />
                    Ingat saya
                </label>
                <a href="/" class="link">Kembali</a>
            </div>

            <button type="submit">Masuk</button>
        </form>

        <p class="footer">Belum punya akun? Hubungi administrator untuk pembuatan user.</p>
    </main>
</body>
</html>
