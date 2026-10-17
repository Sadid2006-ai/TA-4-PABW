<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'LaporBanjir')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --ink: #12293b;
            --muted: #5d7285;
            --line: #d8e1e9;
            --bg: #f2f5f8;
            --brand: #0a4a73;
            --brand-dark: #072f4a;
        }

        *, *::before, *::after { box-sizing: border-box; }

        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            font-family: 'Plus Jakarta Sans', system-ui, -apple-system, 'Segoe UI', Arial, sans-serif;
            color: var(--ink);
            background: var(--bg);
            line-height: 1.55;
        }

        :focus-visible { outline: 3px solid #6bb3e0; outline-offset: 2px; }

        /* ---------- Header ---------- */
        header {
            background: var(--brand-dark);
        }
        .header-inner {
            max-width: 960px; margin: 0 auto; padding: 0 24px;
            display: flex; align-items: center; justify-content: space-between;
            flex-wrap: wrap; gap: 8px;
        }
        .brand { padding: 14px 0; color: #fff; text-decoration: none; }
        .brand strong { display: block; font-size: 20px; font-weight: 800; letter-spacing: -0.01em; }
        .brand span { display: block; font-size: 12.5px; color: #a9c7dc; }

        nav { display: flex; gap: 4px; }
        nav a {
            color: #cfe1ee; text-decoration: none; font-weight: 600; font-size: 14.5px;
            padding: 20px 14px; border-bottom: 3px solid transparent;
        }
        nav a:hover { color: #fff; }
        nav a.active { color: #fff; border-bottom-color: #6bb3e0; }

        /* ---------- Konten ---------- */
        main { max-width: 960px; width: 100%; margin: 0 auto; padding: 32px 24px 64px; flex: 1; }

        /* ---------- Footer ---------- */
        footer { background: var(--brand-dark); color: #a9c7dc; font-size: 13.5px; }
        .footer-inner {
            max-width: 960px; margin: 0 auto; padding: 20px 24px;
            display: flex; justify-content: space-between; align-items: center;
            flex-wrap: wrap; gap: 8px 24px;
        }
        footer strong { color: #fff; font-weight: 700; }
        footer a { color: #cfe1ee; text-decoration: none; margin-left: 16px; font-weight: 600; }
        footer a:first-child { margin-left: 0; }
        footer a:hover { color: #fff; text-decoration: underline; }

        h1, h2 {
            margin: 0 0 20px;
            font-size: 28px; font-weight: 800; letter-spacing: -0.02em;
        }
        h3 { margin: 0 0 6px; font-size: 18px; font-weight: 800; letter-spacing: -0.01em; }
        p { margin: 0 0 6px; }
        a { color: var(--brand); font-weight: 600; }

        /* ---------- Form ---------- */
        form {
            max-width: 560px;
            background: #fff; border: 1px solid var(--line);
            border-radius: 12px; padding: 28px;
        }
        label { display: block; margin: 18px 0 6px; font-weight: 700; font-size: 14.5px; }
        label:first-of-type { margin-top: 0; }

        input {
            width: 100%; padding: 11px 13px; margin: 0;
            font: inherit; color: var(--ink);
            background: #fff; border: 1px solid #b9c7d3; border-radius: 8px;
        }
        input:hover { border-color: #8ea3b4; }
        input:focus { outline: none; border-color: var(--brand); box-shadow: 0 0 0 3px #bfdcf0; }

        button {
            margin-top: 24px; padding: 12px 24px;
            font: inherit; font-weight: 700; font-size: 15px;
            background: var(--brand); color: #fff;
            border: 0; border-radius: 8px; cursor: pointer;
        }
        button:hover { background: var(--brand-dark); }

        .error { color: #a3211a; font-size: 13px; font-weight: 600; margin-top: 6px; }

        /* ---------- Kartu laporan ---------- */
        .card {
            background: #fff; border: 1px solid var(--line);
            border-left: 6px solid var(--brand);
            border-radius: 10px;
            padding: 18px 20px; margin-bottom: 14px;
        }
        .card p { color: var(--muted); font-size: 14.5px; }
        .card .badge,
        .card span { display: inline-block; margin-top: 6px; font-weight: 700; }

        /* Dipertahankan agar class status lama tetap berfungsi */
        .badge { padding: 3px 11px; border-radius: 999px; color: #fff; font-size: 13px; }
        .Waspada { background: #e0a62b; }
        .Siaga   { background: #ee8420; }
        .Awas    { background: #d92d20; }

        /* ---------- Responsif ---------- */
        @media (max-width: 640px) {
            main { padding: 24px 16px 48px; }
            .header-inner { padding: 0 16px; }
            nav a { padding: 12px 10px; }
            form { padding: 20px; }
            h1, h2 { font-size: 24px; }
            .footer-inner { padding: 18px 16px; }
        }
    </style>
</head>
<body>
    <header>
        <div class="header-inner">
            <a class="brand" href="{{ route('laporan.index') }}">
                <strong>LaporBanjir</strong>
                <span>BPBD Kabupaten Bandung</span>
            </a>
            <nav aria-label="Menu utama">
                <a href="{{ route('laporan.create') }}" class="{{ request()->routeIs('laporan.create', 'laporan.store') ? 'active' : '' }}">Buat laporan</a>
                <a href="{{ route('laporan.index') }}" class="{{ request()->routeIs('laporan.index') ? 'active' : '' }}">Daftar laporan</a>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <div class="footer-inner">
            <p><strong>LaporBanjir</strong> – Sistem pelaporan banjir BPBD Kabupaten Bandung</p>
            <p>
                <a href="{{ route('laporan.create') }}">Buat laporan</a>
                <a href="{{ route('laporan.index') }}">Daftar laporan</a>
            </p>
        </div>
        <div class="footer-inner" style="padding-top:0;">
            <p>&copy; {{ date('Y') }} LaporBanjir. Seluruh hak dilindungi.</p>
        </div>
    </footer>
</body>
</html>
</html>