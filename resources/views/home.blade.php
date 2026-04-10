{{-- resources/views/dashboard/home.blade.php --}}
@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home - YoLeave</title>
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
          {{ Auth::user()->name ?? 'Name User' }}
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

      {{-- Menu cards --}}
      <div class="flex gap-4">

        {{-- Leave Request --}}
        <a href="{{ route('leave.request') }}" class="flex flex-col items-center gap-2 group">
          <div class="w-20 h-20 border border-black/15 rounded-xl flex items-center justify-center bg-white shadow-sm group-hover:border-green-400 group-hover:shadow-md transition-all">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-black/20 group-hover:text-green-500 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
            </svg>
          </div>
          <span class="text-black/40 text-xs uppercase tracking-wide">Leave Request</span>
        </a>

        {{-- Leave Balance --}}
        <a href="{{ route('leave.balance') }}" class="flex flex-col items-center gap-2 group">
          <div class="w-20 h-20 border border-black/15 rounded-xl flex items-center justify-center bg-white shadow-sm group-hover:border-green-400 group-hover:shadow-md transition-all">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-black/20 group-hover:text-green-500 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"/>
            </svg>
          </div>
          <span class="text-black/40 text-xs uppercase tracking-wide">Leave Balance</span>
        </a>

      </div>

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

      {{-- Attendance --}}
      <a href="{{ route('attendance') }}" class="flex flex-col items-center gap-1 group">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-black/25 group-hover:text-green-400 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
        </svg>
        <span class="text-black/30 text-xs font-medium uppercase tracking-wide group-hover:text-green-400 transition-colors">Attendance</span>
      </a>

      {{-- Profile --}}
      <a href="{{ route('profile') }}" class="flex flex-col items-center gap-1 group">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-black/25 group-hover:text-green-400 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
        </svg>
        <span class="text-black/30 text-xs font-medium uppercase tracking-wide group-hover:text-green-400 transition-colors">Profile</span>
      </a>

    </div>

  </div>

</body>
</html>

@endsection