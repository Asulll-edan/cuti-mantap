{{-- <!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>YoLeave | {{ $title }}</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    * { box-sizing: border-box; margin: 0; padding: 0; }
    .page {
      min-height: 100vh;
      background: linear-gradient(160deg, #1a7a3c 0%, #2d9e54 35%, #f5a623 70%, #e85d2a 100%);
      display: flex; flex-direction: column; align-items: center; justify-content: flex-start; padding: 32px 16px 40px;
    }
    .logo-area { display: flex; flex-direction: column; align-items: center; gap: 8px; margin-bottom: 24px; }
    .brand-title { font-size: 22px; font-weight: 500; color: #fff; letter-spacing: 0.5px; font-family: sans-serif; }
    .brand-sub { font-size: 13px; color: rgba(255,255,255,0.8); letter-spacing: 2px; text-transform: uppercase; font-family: sans-serif; }
    .card {
      background: rgba(255,255,255,0.97);
      border-radius: 20px;
      padding: 28px 28px 24px;
      width: 100%; max-width: 460px;
      box-shadow: 0 8px 32px rgba(0,0,0,0.13);
    }
    .tab-bar { display: flex; margin-bottom: 24px; border-radius: 10px; overflow: hidden; border: 1.5px solid #e0e0e0; }
    .tab {
      flex: 1; text-align: center; padding: 10px 0; font-size: 14px; font-weight: 500; cursor: pointer;
      background: #f5f5f5; color: #888; border: none; transition: background 0.2s, color 0.2s; font-family: sans-serif;
    }
    .tab.active { background: #1a7a3c; color: #fff; }
    .section { display: none; }
    .section.visible { display: block; }
    .form-row { display: flex; gap: 12px; }
    .form-row .form-group { flex: 1; }
    .form-group { margin-bottom: 14px; }
    .form-group label { display: block; font-size: 12px; font-weight: 500; color: #555; margin-bottom: 5px; letter-spacing: 0.3px; font-family: sans-serif; }
    .form-group input, .form-group select {
      width: 100%; padding: 9px 12px; border-radius: 8px; border: 1.5px solid #ddd;
      font-size: 14px; color: #222; background: #fafafa; outline: none; transition: border 0.2s; font-family: sans-serif;
    }
    .form-group input:focus, .form-group select:focus { border-color: #1a7a3c; background: #fff; }
    .form-group select {
      appearance: none;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath d='M6 8L1 3h10z' fill='%23888'/%3E%3C/svg%3E");
      background-repeat: no-repeat; background-position: right 10px center;
    }
    .section-label {
      font-size: 11px; font-weight: 500; color: #1a7a3c; letter-spacing: 1px; text-transform: uppercase;
      margin-bottom: 12px; padding-bottom: 6px; border-bottom: 1.5px solid #e8f5ee; font-family: sans-serif;
    }
    .btn-submit {
      width: 100%; padding: 11px; border-radius: 10px; font-size: 15px; font-weight: 500; cursor: pointer;
      background: linear-gradient(90deg, #e85d2a, #f5a623);
      color: #fff; border: none; margin-top: 6px; letter-spacing: 0.3px; transition: opacity 0.2s; font-family: sans-serif;
    }
    .btn-submit:hover { opacity: 0.92; }
    .link-row { text-align: center; margin-top: 14px; font-size: 13px; color: #888; font-family: sans-serif; }
    .link-row span { color: #1a7a3c; cursor: pointer; font-weight: 500; }
    .divider { border: none; border-top: 1px solid #eee; margin: 4px 0 14px; }
  </style>
</head>
<body>
<div class="page">
  <div class="logo-area">
    <img src="assets/Yogya_Group.png" alt="YoLeave" class="mx-auto h-20 w-20" />
    <div class="brand-title">YoLeave</div>
  </div>

    <!-- LOGIN -->
   @yield('formLog')

    <!-- REGISTER -->
</div>

<script>
  function switchTab(tab) {
    document.getElementById('sec-login').classList.toggle('visible', tab === 'login');
    document.getElementById('sec-register').classList.toggle('visible', tab === 'register');
    document.getElementById('tab-login').classList.toggle('active', tab === 'login');
    document.getElementById('tab-register').classList.toggle('active', tab === 'register');
  }
</script>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YoLeave |</title>
        <link rel="icon" href="{{ asset('assets/yogyalogo.webp') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        yogya: {
                            green:  '#1a7a3c',
                            green2: '#2d9e54',
                            orange: '#e85d2a',
                            yellow: '#f5a623',
                        }
                    }
                }
            }
        }
    </script>
    @stack('styles')
</head>
<body class="antialiased font-sans">

<div class="min-h-screen flex flex-col items-center justify-start px-4 py-10"
     style="background: linear-gradient(160deg, #1a7a3c 0%, #2d9e54 35%, #f5a623 70%, #e85d2a 100%);">

    {{-- Logo & Brand --}}
    <div class="flex flex-col items-center gap-2 mb-8">
        <img src="{{ asset('assets/Yogya_Group.png') }}" alt="Yogya Group"
             class="w-16 h-16 object-contain drop-shadow-lg" />
        <p class="text-white text-xl font-medium tracking-wide">YoLeave</p>
    </div>

    {{-- Card --}}
    <div class="bg-white/95 rounded-2xl shadow-2xl w-full max-w-md px-7 py-7">

        {{-- Tab Bar --}}
        <div class="flex rounded-xl overflow-hidden border border-gray-200 mb-6">
            <a href='/login'
               class="flex-1 py-2.5 text-sm font-medium text-center transition-colors duration-200
                      {{ request()->routeIs('login') ? 'bg-yogya-green text-white' : 'bg-gray-100 text-gray-400 hover:bg-gray-200' }}">
                Masuk
            </a>
            <a href='/register'
               class="flex-1 py-2.5 text-sm font-medium text-center transition-colors duration-200
                      {{ request()->routeIs('register') ? 'bg-yogya-green text-white' : 'bg-gray-100 text-gray-400 hover:bg-gray-200' }}">
                Daftar
            </a>
        </div>

        {{-- Konten halaman (login / register) --}}
        @yield('form')

    </div>
</div>

@stack('scripts')
</body>
</html>