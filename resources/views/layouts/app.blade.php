<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>@yield('title', 'Diskominfo')</title>
        <link rel="preconnect" href="https://fonts.bunny.net" />
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        <style>
            :root{
                --bg: #ffffff;
                --page-bg: #F8FAFC;
                --text: #0F172A;
                --muted: #64748B;
                --primary: #2563EB;
                --accent: #F43F5E;
                --surface: #ffffff;
                --border: #E6EEF8;
                --success: #10B981;
                --danger: #EF4444;
            }
            html,body { height:100%; }
            body { margin:0; font-family: 'Instrument Sans', system-ui, sans-serif; background:var(--page-bg); color:var(--text); -webkit-font-smoothing:antialiased }
            .container { max-width:1120px; margin:0 auto; padding:24px }
            header.site-header { padding:20px 0 }
            a { color:var(--primary) }
            .section { background: var(--surface); border-radius: 12px; box-shadow: 0 8px 24px rgba(15,23,42,0.06); padding:20px; margin-bottom:18px }
            .btn-primary { background:var(--primary); color:white; padding:8px 12px; border-radius:8px; text-decoration:none; display:inline-block }

            /* Alerts */
            .alert { padding:12px 16px; border-radius:8px; margin-bottom:16px; border:1px solid transparent }
            .alert-success { background: #ECFDF5; color:var(--success); border-color: rgba(16,185,129,0.12) }
            .alert-error { background: #FEF2F2; color:var(--danger); border-color: rgba(239,68,68,0.12) }

            /* Forms */
            label { display:block; font-weight:600; margin-bottom:6px; color:var(--text) }
            .form-input { width:100%; padding:10px 12px; border:1px solid var(--border); border-radius:8px; background:transparent; color:var(--text) }
            .form-input:focus { outline:none; box-shadow:0 0 0 4px rgba(37,99,235,0.06); border-color:var(--primary) }
            .form-row { display:flex; gap:12px; flex-wrap:wrap }
            .form-help { font-size:0.9rem; color:var(--muted) }
            .small { font-size:0.9rem }
        </style>
        @stack('head')
    </head>
    <body>
        <div class="container">
            <header class="site-header">
                <p style="margin:0; font-weight:600">Diskominfo</p>
            </header>

            <main>
                {{-- Global messages (success / validation errors) --}}
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                @if(isset($errors) && $errors->any())
                    <div class="alert alert-error">
                        <strong>Terdapat kesalahan:</strong>
                        <ul style="margin:8px 0 0; padding-left:20px">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @yield('content')
            </main>

            <footer style="text-align:center; color:#64748B; padding:18px 0">© {{ date('Y') }} Diskominfo. Semua hak dilindungi.</footer>
        </div>
    </body>
</html>
