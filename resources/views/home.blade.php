{{-- resources/views/dashboard/home.blade.php --}}
@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home - YoLeave</title>
      <link rel="icon" href="{{ asset('assets/yogyalogo.webp') }}">

  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@400;500;700&display=swap" rel="stylesheet">
  <style>
    body { font-family: 'Alegreya Sans SC', sans-serif; }
  </style>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

  {{-- Mobile frame wrapper --}}
  <div class="bg-white w-full max-w-sm min-h-screen flex flex-col rounded-2xl overflow-hidden shadow-xl relative">

    {{-- Header hijau --}}
    <div class="bg-gradient-to-br from-green-500 to-green-600 px-5 py-5 flex items-center justify-between">
      <div>
        <p class="text-white text-xs font-bold uppercase tracking-wide">
          {{ Auth::user()->cabang ?? 'PT. Akur Pratama Yogya Center' }}
        </p>
        <p class="text-white text-xs font-medium mt-0.5">
          {{ Auth::user()->nama ?? 'Name User' }}
        </p>
        <p class="text-white/80 text-xs mt-0.5">
          {{ Auth::user()->divisi ?? 'Divisi' }}
        </p>
      </div>

      {{-- Avatar --}}
      <div class="bg-white/20 rounded-full p-1">
        <div class="bg-white rounded-full w-12 h-12 flex items-center justify-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-green-600" viewBox="0 0 24 24" fill="currentColor">
            <path d="M12 12c2.7 0 4.8-2.1 4.8-4.8S14.7 2.4 12 2.4 7.2 4.5 7.2 7.2 9.3 12 12 12zm0 2.4c-3.2 0-9.6 1.6-9.6 4.8v2.4h19.2v-2.4c0-3.2-6.4-4.8-9.6-4.8z"/>
          </svg>
        </div>
      </div>
    </div>

    {{-- Content --}}
    <div class="flex-1 px-5 py-6">

      {{-- Session status --}}
      @if (session('status'))
        <div class="mb-4 bg-green-100 border border-green-400 text-green-700 text-xs px-4 py-3 rounded">
          {{ session('status') }}
        </div>
      @endif

      
    </div>

    {{-- Bottom Navigation --}}
    <div class="border-t border-black/10 bg-white px-4 py-3 flex items-center justify-around">

      {{-- Home --}}
      <a href="{{ route('home') }}" class="flex flex-col items-center gap-1 group">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-500" viewBox="0 0 24 24" fill="currentColor">
          <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/>
        </svg>
        <span class="text-green-500 text-xs font-bold uppercase tracking-wide">Home</span>
      </a>

    </div>

  </div>

</body>
</html>

@endsection