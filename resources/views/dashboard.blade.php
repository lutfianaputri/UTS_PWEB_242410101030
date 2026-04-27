@extends('layouts.app')
 
@section('title', 'Dashboard - Readify')
 
@section('content')
<div class="mt-6">
    <div class="flex justify-between items-end mb-8">
        <div>
            <h1 class="text-4xl font-extrabold text-rose-900">Hello, {{ $username }}!</h1>
            <p class="text-rose-400 mt-2 font-medium">Cek rekomendasi buku populer hari ini.</p>
        </div>
    </div>
 
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($koleksiBuku as $buku)
        <div class="group bg-white rounded-3xl shadow-sm hover:shadow-xl transition-all duration-300 border border-pink-100 overflow-hidden transform hover:-translate-y-2">
            <div class="relative h-64 overflow-hidden">
                <img src="{{ $buku['cover'] }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute top-4 right-4 bg-white/90 backdrop-blur px-3 py-1 rounded-full text-pink-500 font-bold text-sm shadow-sm">{{ $buku['rate'] }}/5</div>
            </div>
            <div class="p-6">
                <h3 class="text-xl font-bold text-rose-900 mb-1">{{ $buku['judul'] }}</h3>
                <p class="text-rose-400 text-sm mb-4">By {{ $buku['penulis'] }}</p>
                <a href="{{ url('/form-ulasan') }}?username={{ urlencode($username) }}&buku={{ urlencode($buku['judul']) }}" class="block text-center bg-pink-400 hover:bg-pink-500 text-white font-bold py-3 rounded-2xl transition-colors shadow-lg shadow-pink-200">Beri Ulasan</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection