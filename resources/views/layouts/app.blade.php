
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#102b46">
    <title>@yield('titulo', 'Inicio') | Posta Salud San Jerónimo</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --navy: #102b46;
            --navy-light: #183d5e;
            --teal: #12a99a;
            --teal-dark: #078779;
            --text: #23364a;
            --muted: #718196;
            --background: #f3f7fa;
            --white: #ffffff;
            --border: #e5edf2;
        }

        * { box-sizing: border-box; }

        html { scroll-behavior: smooth; }

        body {
            margin: 0;
            background: var(--background);
            color: var(--text);
            font-family: 'DM Sans', sans-serif;
            font-size: 15px;
        }

        a { text-decoration: none; }

        .topbar {
            background: var(--navy);
            color: white;
            border-bottom: 1px solid rgba(255,255,255,.08);
        }

        .topbar-inner {
            width: min(1180px, 92%);
            min-height: 76px;
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 25px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            color: white;
        }

        .brand-symbol {
            width: 43px;
            height: 43px;
            display: grid;
            place-items: center;
            border-radius: 13px;
            background: var(--teal);
            color: white;
            font-size: 25px;
            font-weight: 800;
        }

        .brand-name {
            display: block;
            font-family: 'Manrope', sans-serif;
            font-size: 17px;
            font-weight: 800;
            letter-spacing: -.4px;
        }

        .brand-subtitle {
            display: block;
            margin-top: 2px;
            color: #b7c9d8;
            font-size: 11px;
            letter-spacing: .6px;
        }

        .nav {
            display: flex;
            align-items: center;
            gap: 7px;
            flex-wrap: wrap;
        }

        .nav a {
            padding: 10px 13px;
            border-radius: 8px;
            color: #dce7ef;
            font-size: 13px;
            font-weight: 600;
            transition: .2s;
        }

        .nav a:hover, .nav a.active {
            background: rgba(255,255,255,.12);
            color: white;
        }

        .page {
            width: min(1180px, 92%);
            margin: 34px auto 55px;
        }

        .hero {
            position: relative;
            overflow: hidden;
            min-height: 330px;
            padding: 48px 52px;
            display: flex;
            align-items: center;
            border-radius: 22px;
            background: linear-gradient(115deg, #102b46 0%, #174967 65%, #087f80 100%);
            box-shadow: 0 18px 45px rgba(16,43,70,.16);
            color: white;
        }

        .hero::before, .hero::after {
            content: "";
            position: absolute;
            border: 1px solid rgba(255,255,255,.10);
            border-radius: 50%;
            pointer-events: none;
        }

        .hero::before {
            width: 390px;
            height: 390px;
            right: -70px;
            top: -160px;
        }

        .hero::after {
            width: 290px;
            height: 290px;
            right: 15px;
            bottom: -205px;
        }

        .hero-content {
            position: relative;
            z-index: 1;
            max-width: 660px;
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            margin-bottom: 17px;
            color: #83e4d7;
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 1.7px;
            text-transform: uppercase;
        }

        .eyebrow::before {
            content: "";
            width: 23px;
            height: 2px;
            background: #42d5c2;
        }

        .hero h1 {
            margin: 0 0 15px;
            color: white;
            font-family: 'Manrope', sans-serif;
            font-size: clamp(30px, 4vw, 43px);
            line-height: 1.15;
            letter-spacing: -1.5px;
        }

        .hero p {
            max-width: 590px;
            margin: 0;
            color: #d4e3ed;
            font-size: 15px;
            line-height: 1.8;
        }

        .hero-actions {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-top: 27px;
            flex-wrap: wrap;
        }

        .button-primary {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 13px 20px;
            border-radius: 9px;
            background: var(--teal);
            color: white;
            font-size: 13px;
            font-weight: 800;
            transition: .2s;
        }

        .button-primary:hover {
            background: #0cc0ad;
            transform: translateY(-2px);
        }

        .hero-note {
            color: #c6d9e4;
            font-size: 12px;
        }

        .section {
            margin-top: 39px;
        }

        .section-heading {
            display: flex;
            align-items: end;
            justify-content: space-between;
            gap: 15px;
            margin-bottom: 19px;
        }

        .section-kicker {
            margin: 0 0 6px;
            color: var(--teal-dark);
            font-size: 10px;
            font-weight: 800;
            letter-spacing: 1.5px;
            text-transform: uppercase;
        }

        .section-heading h2 {
            margin: 0;
            color: var(--navy);
            font-family: 'Manrope', sans-serif;
            font-size: 24px;
            letter-spacing: -.7px;
        }

        .section-description {
            margin: 7px 0 0;
            color: var(--muted);
            font-size: 13px;
            line-height: 1.6;
        }

        .module-grid {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 17px;
        }

        .module-card {
            min-height: 205px;
            padding: 23px 21px;
            border: 1px solid var(--border);
            border-radius: 15px;
            background: white;
            box-shadow: 0 5px 18px rgba(26,54,78,.035);
            transition: .22s;
        }

        .module-card:hover {
            transform: translateY(-5px);
            border-color: #b8e7e0;
            box-shadow: 0 15px 28px rgba(26,54,78,.09);
        }

        .module-icon {
            width: 44px;
            height: 44px;
            display: grid;
            place-items: center;
            margin-bottom: 19px;
            border-radius: 12px;
            background: #e8f7f5;
            color: var(--teal-dark);
            font-family: 'Manrope', sans-serif;
            font-size: 16px;
            font-weight: 800;
        }

        .module-card h3 {
            margin: 0 0 9px;
            color: var(--navy);
            font-family: 'Manrope', sans-serif;
            font-size: 16px;
            font-weight: 800;
        }

        .module-card p {
            margin: 0;
            color: var(--muted);
            font-size: 13px;
            line-height: 1.7;
        }

        .info-panel {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            overflow: hidden;
            border: 1px solid var(--border);
            border-radius: 15px;
            background: white;
            box-shadow: 0 5px 18px rgba(26,54,78,.035);
        }

        .info-item {
            padding: 22px;
            border-right: 1px solid var(--border);
        }

        .info-item:last-child { border-right: 0; }

        .info-label {
            display: block;
            margin-bottom: 8px;
            color: var(--muted);
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .7px;
        }

        .info-value {
            color: var(--navy);
            font-family: 'Manrope', sans-serif;
            font-size: 14px;
            font-weight: 800;
            overflow-wrap: anywhere;
        }

        .footer {
            margin-top: 42px;
            padding: 22px 0;
            border-top: 1px solid var(--border);
            color: var(--muted);
            font-size: 12px;
            text-align: center;
        }

        .footer strong { color: var(--navy); }

        @media (max-width: 850px) {
            .topbar-inner {
                padding: 15px 0;
                align-items: flex-start;
                flex-direction: column;
                gap: 12px;
            }
            .module-grid { grid-template-columns: repeat(2, 1fr); }
            .info-panel { grid-template-columns: repeat(2, 1fr); }
            .info-item:nth-child(2) { border-right: 0; }
            .info-item:nth-child(-n+2) { border-bottom: 1px solid var(--border); }
        }

        @media (max-width: 540px) {
            .page { margin-top: 20px; }
            .hero { min-height: 0; padding: 34px 25px; }
            .hero h1 { font-size: 30px; }
            .nav { gap: 3px; }
            .nav a { padding: 8px 9px; font-size: 12px; }
            .module-grid { grid-template-columns: 1fr; }
            .module-card { min-height: 0; }
            .section-heading h2 { font-size: 21px; }
            .info-panel { grid-template-columns: 1fr; }
            .info-item {
                border-right: 0;
                border-bottom: 1px solid var(--border);
            }
            .info-item:last-child { border-bottom: 0; }
        }
    </style>
</head>
<body>

<header class="topbar">
    <div class="topbar-inner">
        <a href="{{ route('inicio') }}" class="brand">
            <span class="brand-symbol">+</span>
            <span>
                <span class="brand-name">POSTA SALUD</span>
                <span class="brand-subtitle">SAN JERÓNIMO · CUSCO</span>
            </span>
        </a>

        <nav class="nav">
            <a href="{{ route('inicio') }}" class="active">Inicio</a>
            <a href="{{ route('inicio') }}#pacientes">Pacientes</a>
            <a href="{{ route('inicio') }}#personal">Personal médico</a>
            <a href="{{ route('inicio') }}#citas">Citas</a>
            <a href="{{ route('inicio') }}#atenciones">Atenciones</a>
        </nav>
    </div>
</header>

<main class="page">
    @yield('contenido')

    <footer class="footer">
        <strong>Posta Salud San Jerónimo</strong> · Sistema de gestión institucional
        <br>
        Proyecto académico · DSI406 Tecnología Backend · 2026
    </footer>
</main>

</body>
</html>
