<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YoLeave</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="{{ asset('assets/yogyalogo.webp') }}">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'DM Sans', sans-serif;
            background: linear-gradient(to bottom, #16a34a, #ffffff);
            color: #fff;
            height: 100vh;
            overflow: hidden;
            position: relative;
        }

        /* Content */
        .content {
            position: relative;
            z-index: 5;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            padding-top: 80px;
            height: 100vh;
            text-align: center;
        }

        .logo-area {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 40px;
            opacity: 0;
            animation: fadeDown 0.8s ease forwards 0.2s;
        }

        .logo-area img {
            height: 32px;
            width: auto;
            filter: brightness(0) invert(1);
        }

        .logo-text {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 1.4rem;
            letter-spacing: 0.2em;
            color: rgba(255,255,255,0.7);
        }

        .main-title {
            font-family: 'Bebas Neue', sans-serif;
            font-size: clamp(2.8rem, 7vw, 5.5rem);
            letter-spacing: 0.05em;
            line-height: 1;
            color: #fff;
            text-shadow: 0 2px 20px rgba(0,0,0,0.15);
            opacity: 0;
            animation: fadeDown 0.8s ease forwards 0.5s;
        }

        .subtitle {
            font-size: 0.85rem;
            letter-spacing: 0.3em;
            color: rgba(255,255,255,0.75);
            margin-top: 12px;
            text-transform: uppercase;
            opacity: 0;
            animation: fadeDown 0.8s ease forwards 0.7s;
        }

        .btn-group {
            display: flex;
            gap: 12px;
            margin-top: 36px;
            opacity: 0;
            animation: fadeDown 0.8s ease forwards 0.9s;
        }

        .btn-primary {
            padding: 10px 28px;
            border: 1.5px solid rgba(255,255,255,0.8);
            color: #fff;
            font-family: 'DM Sans', sans-serif;
            font-size: 0.7rem;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            text-decoration: none;
            background: transparent;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        .btn-primary::before {
            content: '';
            position: absolute;
            inset: 0;
            background: rgba(255,255,255,0.08);
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.3s ease;
        }
        .btn-primary:hover::before { transform: scaleX(1); }
        .btn-primary:hover {
            border-color: #fff;
            box-shadow: 0 0 20px rgba(255,255,255,0.15);
        }

        .btn-secondary {
            padding: 10px 28px;
            background: rgba(255,255,255,0.15);
            border: 1.5px solid rgba(255,255,255,0.5);
            color: rgba(255,255,255,0.9);
            font-family: 'DM Sans', sans-serif;
            font-size: 0.7rem;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            text-decoration: none;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .btn-secondary:hover {
            border-color: rgba(255,255,255,0.9);
            color: #fff;
            background: rgba(255,255,255,0.25);
        }

        @keyframes fadeDown {
            from { opacity: 0; transform: translateY(-20px); }
            to   { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>

    {{-- Main content --}}
    <div class="content">

        {{-- Logo --}}
        <div class="logo-area">
            <img src="{{ asset('assets/Yogya_Group.png') }}" alt="Yogya Group">
            <span class="logo-text">YOLEAVE</span>
        </div>

        {{-- Headline --}}
        <h1 class="main-title">Selamat Datang</h1>
        <p class="subtitle">Platform Manajemen Cuti Karyawan</p>

        {{-- CTA --}}
        <div class="btn-group">
            <a href="{{ route('login') }}" class="btn-primary">Masuk</a>
            <a href="{{ route('register') }}" class="btn-secondary">Daftar</a>
        </div>

    </div>


</body>
</html>