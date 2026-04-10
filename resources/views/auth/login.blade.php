@extends('auth.mainAuth')

@section('title', 'Masuk')

@section('form')

    <form action="#" method="POST" class="space-y-4">
        @csrf

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
                placeholder="Masukkan NIP karyawan"
                required
                class="w-full px-3 py-2.5 rounded-lg border text-sm text-gray-800 bg-gray-50
                       transition focus:outline-none focus:bg-white
                       {{ $errors->has('nip') ? 'border-red-400' : 'border-gray-200 focus:border-yogya-green' }}"
            />
            @error('nip')
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
                placeholder="Masukkan password"
                required
                class="w-full px-3 py-2.5 rounded-lg border text-sm text-gray-800 bg-gray-50
                       transition focus:outline-none focus:bg-white
                       {{ $errors->has('password') ? 'border-red-400' : 'border-gray-200 focus:border-yogya-green' }}"
            />
            @error('password')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Submit --}}
        <div class="pt-1">
            <button type="submit"
                    class="w-full py-2.5 rounded-xl text-white text-sm font-medium tracking-wide
                           transition hover:opacity-90"
                    style="background: linear-gradient(90deg, #e85d2a, #f5a623);">
                Masuk
            </button>
        </div>

        {{-- Lupa password --}}
        <p class="text-center text-xs text-gray-400 pt-1">
            Lupa password?
            <a href="#"
               class="text-yogya-green font-medium hover:underline">
                Reset password
            </a>
        </p>

    </form>

@endsection