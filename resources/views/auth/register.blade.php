@extends('auth.mainAuth')

@section('title', 'Daftar')

@section('form')

    <form action="#" method="POST" class="space-y-4">
        @csrf

        {{-- ── DATA PRIBADI ── --}}
        <p class="text-[10px] font-semibold text-yogya-green tracking-[1.5px] uppercase
                   border-b border-green-100 pb-1.5">
            Data Pribadi
        </p>

        {{-- NIP --}}
        <div>
            <label for="nip" class="block text-xs font-medium text-gray-500 mb-1.5 tracking-wide">
                NIP
            </label>
            <input
                id="nip"
                type="text"
                name="nip"
                value="{{ old('nip') }}"
                placeholder="Nomor Induk Pegawai"
                required
                class="w-full px-3 py-2.5 rounded-lg border text-sm text-gray-800 bg-gray-50
                       transition focus:outline-none focus:bg-white
                       {{ $errors->has('nip') ? 'border-red-400' : 'border-gray-200 focus:border-yogya-green' }}"
            />
            @error('nip')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Nama Lengkap --}}
        <div>
            <label for="name" class="block text-xs font-medium text-gray-500 mb-1.5 tracking-wide">
                Nama Lengkap
            </label>
            <input
                id="name"
                type="text"
                name="name"
                value="{{ old('name') }}"
                placeholder="Nama sesuai KTP"
                required
                class="w-full px-3 py-2.5 rounded-lg border text-sm text-gray-800 bg-gray-50
                       transition focus:outline-none focus:bg-white
                       {{ $errors->has('name') ? 'border-red-400' : 'border-gray-200 focus:border-yogya-green' }}"
            />
            @error('name')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Jenis Kelamin & Role (berdampingan) --}}
        <div class="flex gap-3">

            {{-- Jenis Kelamin --}}
            <div class="flex-1">
                <label for="gender" class="block text-xs font-medium text-gray-500 mb-1.5 tracking-wide">
                    Jenis Kelamin
                </label>
                <div class="relative">
                    <select
                        id="gender"
                        name="gender"
                        required
                        class="w-full px-3 py-2.5 rounded-lg border text-sm text-gray-800 bg-gray-50
                               appearance-none transition focus:outline-none focus:bg-white pr-8
                               {{ $errors->has('gender') ? 'border-red-400' : 'border-gray-200 focus:border-yogya-green' }}"
                    >
                        <option value="">Pilih</option>
                        <option value="L" {{ old('gender') == 'L' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="P" {{ old('gender') == 'P' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                    <span class="pointer-events-none absolute right-2.5 top-1/2 -translate-y-1/2 text-gray-400 text-xs">▾</span>
                </div>
                @error('gender')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Role --}}
            <div class="flex-1">
                <label for="role" class="block text-xs font-medium text-gray-500 mb-1.5 tracking-wide">
                    Role / Jabatan
                </label>
                <div class="relative">
                    <select
                        id="role"
                        name="role"
                        required
                        class="w-full px-3 py-2.5 rounded-lg border text-sm text-gray-800 bg-gray-50
                               appearance-none transition focus:outline-none focus:bg-white pr-8
                               {{ $errors->has('role') ? 'border-red-400' : 'border-gray-200 focus:border-yogya-green' }}"
                    >
                        <option value="">Pilih role</option>
                        <option value="karyawan"   {{ old('role') == 'karyawan'   ? 'selected' : '' }}>Karyawan</option>
                        <option value="supervisor" {{ old('role') == 'supervisor' ? 'selected' : '' }}>Supervisor</option>
                        <option value="manager"    {{ old('role') == 'manager'    ? 'selected' : '' }}>Manager</option>
                        <option value="hr"         {{ old('role') == 'hr'         ? 'selected' : '' }}>HR</option>
                        <option value="admin"      {{ old('role') == 'admin'      ? 'selected' : '' }}>Admin</option>
                    </select>
                    <span class="pointer-events-none absolute right-2.5 top-1/2 -translate-y-1/2 text-gray-400 text-xs">▾</span>
                </div>
                @error('role')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

        </div>

        {{-- ── INFORMASI AKUN ── --}}
        <hr class="border-gray-100" />
        <p class="text-[10px] font-semibold text-yogya-green tracking-[1.5px] uppercase
                   border-b border-green-100 pb-1.5">
            Informasi Akun
        </p>

        {{-- Email --}}
        <div>
            <label for="email" class="block text-xs font-medium text-gray-500 mb-1.5 tracking-wide">
                Email
            </label>
            <input
                id="email"
                type="email"
                name="email"
                value="{{ old('email') }}"
                placeholder="email@yogyagroup.co.id"
                required
                class="w-full px-3 py-2.5 rounded-lg border text-sm text-gray-800 bg-gray-50
                       transition focus:outline-none focus:bg-white
                       {{ $errors->has('email') ? 'border-red-400' : 'border-gray-200 focus:border-yogya-green' }}"
            />
            @error('email')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Password --}}
        <div>
            <label for="password" class="block text-xs font-medium text-gray-500 mb-1.5 tracking-wide">
                Password
            </label>
            <input
                id="password"
                type="password"
                name="password"
                placeholder="Min. 8 karakter"
                required
                class="w-full px-3 py-2.5 rounded-lg border text-sm text-gray-800 bg-gray-50
                       transition focus:outline-none focus:bg-white
                       {{ $errors->has('password') ? 'border-red-400' : 'border-gray-200 focus:border-yogya-green' }}"
            />
            @error('password')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Konfirmasi Password --}}
        <div>
            <label for="password_confirmation" class="block text-xs font-medium text-gray-500 mb-1.5 tracking-wide">
                Konfirmasi Password
            </label>
            <input
                id="password_confirmation"
                type="password"
                name="password_confirmation"
                placeholder="Ulangi password"
                required
                class="w-full px-3 py-2.5 rounded-lg border border-gray-200 bg-gray-50 text-sm text-gray-800
                       transition focus:outline-none focus:border-yogya-green focus:bg-white"
            />
        </div>

        {{-- ── STATUS KARYAWAN ── --}}
        <hr class="border-gray-100" />
        <p class="text-[10px] font-semibold text-yogya-green tracking-[1.5px] uppercase
                   border-b border-green-100 pb-1.5">
            Status Karyawan
        </p>

        <div>
            <label for="status" class="block text-xs font-medium text-gray-500 mb-1.5 tracking-wide">
                Status
            </label>
            <div class="relative">
                <select
                    id="status"
                    name="status"
                    required
                    class="w-full px-3 py-2.5 rounded-lg border text-sm text-gray-800 bg-gray-50
                           appearance-none transition focus:outline-none focus:bg-white pr-8
                           {{ $errors->has('status') ? 'border-red-400' : 'border-gray-200 focus:border-yogya-green' }}"
                >
                    <option value="">Pilih status</option>
                    <option value="tetap"    {{ old('status') == 'tetap'    ? 'selected' : '' }}>Karyawan Tetap</option>
                    <option value="kontrak"  {{ old('status') == 'kontrak'  ? 'selected' : '' }}>Kontrak</option>
                    <option value="paruh"    {{ old('status') == 'paruh'    ? 'selected' : '' }}>Paruh Waktu</option>
                    <option value="magang"   {{ old('status') == 'magang'   ? 'selected' : '' }}>Magang</option>
                </select>
                <span class="pointer-events-none absolute right-2.5 top-1/2 -translate-y-1/2 text-gray-400 text-xs">▾</span>
            </div>
            @error('status')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Submit --}}
        <div class="pt-1">
            <button type="submit"
                    class="w-full py-2.5 rounded-xl text-white text-sm font-medium tracking-wide
                           transition hover:opacity-90"
                    style="background: linear-gradient(90deg, #e85d2a, #f5a623);">
                Daftar Sekarang
            </button>
        </div>

        <p class="text-center text-xs text-gray-400 pt-1">
            Sudah punya akun?
            <a href="{{ route('login') }}" class="text-yogya-green font-medium hover:underline">
                Masuk di sini
            </a>
        </p>

    </form>

@endsection