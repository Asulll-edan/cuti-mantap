{{-- resources/views/auth/register.blade.php --}}
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register - Absent</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@400;500;700&display=swap" rel="stylesheet">
  <style>
    body { font-family: 'Alegreya Sans SC', sans-serif; }
  </style>
</head>
<body class="min-h-screen bg-gray-100 flex items-center justify-center py-8">

  <div class="bg-white/99 rounded-xl shadow-md p-8 w-full max-w-sm">

    {{-- Logo --}}
    <div class="flex justify-center mb-6">
      <img src="{{ asset('assets/Yogya_Group.png') }}" alt="Logo" class="h-16 w-auto">
    </div>

    {{-- Heading --}}
    <p class="text-black/20 text-sm font-medium mb-5">Create an account</p>

    {{-- Form --}}
    <form method="POST" action="{{ route('register') }}">
      @csrf

      {{-- Nama --}}
      <div class="mb-3">
        <label class="block text-black/20 text-xs mb-1">Nama</label>
        <input
          type="text"
          name="name"
          value="{{ old('name') }}"
          placeholder="Masukkan nama lengkap"
          class="w-full border border-black/15 rounded px-3 py-2 text-xs text-black/40 focus:outline-none focus:ring-2 focus:ring-green-400"
        >
        @error('name')
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
      </div>

      {{-- E-Mail --}}
      <div class="mb-3">
        <label class="block text-black/20 text-xs mb-1">E-Mail</label>
        <input
          type="email"
          name="email"
          value="{{ old('email') }}"
          placeholder="Masukkan email"
          class="w-full border border-black/15 rounded px-3 py-2 text-xs text-black/40 focus:outline-none focus:ring-2 focus:ring-green-400"
        >
        @error('email')
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
      </div>

      {{-- NIP --}}
      <div class="mb-3">
        <label class="block text-black/20 text-xs mb-1">NIP</label>
        <input
          type="text"
          name="nip"
          value="{{ old('nip') }}"
          placeholder="Masukkan NIP"
          class="w-full border border-black/15 rounded px-3 py-2 text-xs text-black/40 focus:outline-none focus:ring-2 focus:ring-green-400"
        >
        @error('nip')
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
      </div>

      {{-- Status Karyawan --}}
      <div class="mb-3">
        <label class="block text-black/20 text-xs mb-1">Status Karyawan</label>
        <div class="relative">
          <select
            name="status_karyawan"
            class="w-full appearance-none border border-black/15 rounded px-3 py-2 text-xs text-black/40 focus:outline-none focus:ring-2 focus:ring-green-400 bg-white"
          >
            <option value="" disabled {{ old('status_karyawan') ? '' : 'selected' }}>Pilih status</option>
            <option value="Tetap" {{ old('status_karyawan') == 'Tetap' ? 'selected' : '' }}>Karyawan Tetap</option>
            <option value="Kontrak" {{ old('status_karyawan') == 'Kontrak' ? 'selected' : '' }}>Karyawan Kontrak</option>
            <option value="Probation" {{ old('status_karyawan') == 'Probation' ? 'selected' : '' }}>Magang</option>
          </select>
          <div class="pointer-events-none absolute inset-y-0 right-3 flex items-center opacity-80">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-800" viewBox="0 0 24 24" fill="currentColor">
              <path d="M7 10l5 5 5-5H7z"/>
            </svg>
          </div>
        </div>
        @error('status_karyawan')
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
      </div>

      {{-- Role --}}
      <div class="mb-3">
        <label class="block text-black/20 text-xs mb-1">Role</label>
        <div class="relative">
          <select
            name="role"
            class="w-full appearance-none border border-black/15 rounded px-3 py-2 text-xs text-black/40 focus:outline-none focus:ring-2 focus:ring-green-400 bg-white"
          >
            <option value="" disabled {{ old('role') ? '' : 'selected' }}>Pilih role</option>
            <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
            <option value="karyawan" {{ old('role') == 'karyawan' ? 'selected' : '' }}>Karyawan</option>
          </select>
          <div class="pointer-events-none absolute inset-y-0 right-3 flex items-center opacity-80">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-800" viewBox="0 0 24 24" fill="currentColor">
              <path d="M7 10l5 5 5-5H7z"/>
            </svg>
          </div>
        </div>
        @error('role')
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
      </div>

      {{-- Jenis Kelamin --}}
      <div class="mb-3">
        <label class="block text-black/20 text-xs mb-1">Jenis Kelamin</label>
        <div class="relative">
          <select
            name="jenis_kelamin"
            class="w-full appearance-none border border-black/15 rounded px-3 py-2 text-xs text-black/40 focus:outline-none focus:ring-2 focus:ring-green-400 bg-white"
          >
            <option value="" disabled {{ old('jenis_kelamin') ? '' : 'selected' }}>Pilih jenis kelamin</option>
            <option value="Laki-laki" {{ old('jenis_kelamin') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
            <option value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
          </select>
          <div class="pointer-events-none absolute inset-y-0 right-3 flex items-center opacity-80">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-800" viewBox="0 0 24 24" fill="currentColor">
              <path d="M7 10l5 5 5-5H7z"/>
            </svg>
          </div>
        </div>
        @error('jenis_kelamin')
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
      </div>

     {{-- Password --}}
<div class="mb-3">
  <label class="block text-black/20 text-xs mb-1">Password</label>
  <input
    type="password"
    name="password"
    placeholder="Masukkan password"
    class="w-full border border-black/15 rounded px-3 py-2 text-xs text-black/40 focus:outline-none focus:ring-2 focus:ring-green-400"
  >
  @error('password')
    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
  @enderror
</div>

{{-- Konfirmasi Password --}}
<div class="mb-5">
  <label class="block text-black/20 text-xs mb-1">Konfirmasi Password</label>
  <input
    type="password"
    name="password_confirmation"
    placeholder="Konfirmasi password"
    class="w-full border border-black/15 rounded px-3 py-2 text-xs text-black/40 focus:outline-none focus:ring-2 focus:ring-green-400"
  >
</div>

      {{-- Submit --}}
      <button
        type="submit"
        class="w-full bg-[#7AE378] text-white font-bold text-sm rounded-md py-2 hover:bg-green-500 transition-colors"
      >
        Register
      </button>

    </form>

    {{-- Already have account --}}
    <p class="text-center text-black/20 text-xs mt-4">
      Already have an account?
      <a href="{{ route('login') }}" class="text-green-500 hover:underline font-medium">Login</a>
    </p>

  </div>

</body>
</html>