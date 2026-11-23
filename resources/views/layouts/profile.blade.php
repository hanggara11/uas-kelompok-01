<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | Biodata</title>
    <style>
        :root {
            color-scheme: light;
            font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            color: #172033;
            background: #f3f6fb;
        }
        * { box-sizing: border-box; }
        body { min-height: 100vh; margin: 0; padding: 32px 18px; }
        .page { width: min(100%, 760px); margin: 0 auto; }
        .topbar { display: flex; justify-content: space-between; align-items: center; gap: 16px; margin-bottom: 28px; }
        .brand { font-size: 14px; font-weight: 800; letter-spacing: .12em; color: #34446a; }
        nav { display: flex; flex-wrap: wrap; gap: 8px; }
        nav a { padding: 9px 13px; border: 1px solid #dce3ef; border-radius: 999px; background: #fff; color: #44516a; font-size: 13px; font-weight: 700; text-decoration: none; }
        nav a:hover, nav a:focus-visible { border-color: #6879de; color: #394bb7; }
        .profile-card { padding: clamp(24px, 6vw, 48px); border: 1px solid #e6eaf2; border-radius: 24px; background: #fff; box-shadow: 0 18px 55px rgba(34, 49, 88, .08); }
        .avatar { display: grid; width: 76px; height: 76px; place-items: center; margin-bottom: 24px; border-radius: 22px; background: linear-gradient(135deg, #6678e8, #8b5dc7); color: #fff; font-size: 30px; font-weight: 800; }
        .eyebrow { margin: 0 0 8px; color: #6678d8; font-size: 12px; font-weight: 800; letter-spacing: .16em; }
        h1 { margin: 0; font-size: clamp(32px, 7vw, 46px); letter-spacing: -.04em; }
        .description { margin: 12px 0 30px; color: #69758b; line-height: 1.7; }
        .details { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 12px; }
        .detail { min-height: 82px; padding: 16px; border: 1px solid #e9edf4; border-radius: 14px; background: #f9faff; }
        .detail span { display: block; margin-bottom: 8px; color: #7a8497; font-size: 12px; font-weight: 700; }
        .detail strong { color: #28334a; font-size: 14px; font-weight: 650; }
        .footer { margin-top: 20px; color: #8992a3; font-size: 12px; text-align: center; }
        @media (max-width: 520px) {
            .topbar { align-items: flex-start; flex-direction: column; }
            .details { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    <div class="page">
        <header class="topbar">
            <div class="brand">BIODATA</div>
            <nav aria-label="Navigasi biodata">
                <a href="{{ route('profiles.hanggara') }}">Hanggara</a>
                <a href="{{ route('profiles.gekya') }}">Gekya</a>
                <a href="{{ route('profiles.anonim') }}">Anonim</a>
            </nav>
        </header>

        @yield('content')

        <footer class="footer">Dibuat dengan Laravel · Data ditampilkan tanpa database</footer>
    </div>
</body>
</html>
