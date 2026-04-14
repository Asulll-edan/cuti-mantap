{{-- resources/views/auth/login.blade.php --}}
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Absent</title>
  <script src="https://cdn.tailwindcss.com"></script>
      <link rel="icon" href="{{ asset('assets/yogyalogo.webp') }}">

  <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@400;500;700&display=swap" rel="stylesheet">
  <style>
    body { font-family: 'Alegreya Sans SC', sans-serif; }
  </style>
</head>
<body class="min-h-screen bg-gray-100 flex items-center justify-center">

  <div class="bg-white/99 rounded-xl shadow-md p-8 w-full max-w-sm">

    {{-- Logo --}}
    <div class="flex justify-center mb-6">
      <img src="{{ asset('assets/Yogya_Group.png') }}" alt="Logo" class="h-16 w-auto">
    </div>

    
    <p class="text-black/20 text-sm font-medium mb-1">Welcome to absent</p>
    <p class="text-black/20 text-xs mb-6">Enter email and password to login</p>

    {{-- Form --}}
    <form method="POST" action="{{ route('login') }}">
      @csrf

    
      <div class="mb-4">
        <label class="block text-black/20 text-xs mb-1">NIP</label>
        <div class="relative">
          <span class="absolute inset-y-0 left-3 flex items-center opacity-25">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
            </svg>
          </span>
          <input
            type="text"
            name="nip"
            value="{{ old('nip') }}"
            placeholder="Masukkan NIP"
            class="w-full border border-black/15 rounded pl-9 pr-3 py-2 text-xs text-black/20 focus:outline-none focus:ring-2 focus:ring-green-400"
          >
        </div>
        @error('nip')
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
      </div>

      
      <div class="mb-2">
        <label class="block text-black/20 text-xs mb-1">Password</label>
        <div class="relative">
          <span class="absolute inset-y-0 left-3 flex items-center opacity-25">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
            </svg>
          </span>
          <input
            type="password"
            name="password"
            placeholder="Masukkan password"
            class="w-full border border-black/15 rounded pl-9 pr-3 py-2 text-xs text-black/20 focus:outline-none focus:ring-2 focus:ring-green-400"
          >
        </div>
        @error('password')
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
      </div>

   
      <div class="flex justify-end mb-5">
        <a href="{{ route('password.request') }}" class="text-black/20 text-xs hover:underline">
          forgot password?
        </a>
      </div>

      
      <button
        type="submit"
        class="w-full bg-[#7AE378] text-white font-bold text-sm rounded-md py-2 hover:bg-green-500 transition-colors"
      >
        Login
      </button>

    </form>

     
    <p class="text-center text-black/20 text-xs mt-4">
      Belum punya akun?
      <a href="{{ route('register') }}" class="text-green-500 hover:underline font-medium">
        Daftar di sini
      </a>
    </p>

  </div>

</body>
</html>