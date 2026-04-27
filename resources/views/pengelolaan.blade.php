@extends('layouts.app')

@section('title', 'Pengelolaan - Readify')

@section('content')
<div class="flex flex-col lg:flex-row gap-8 mt-6 mb-12">

    <aside class="lg:w-1/4">
        <div class="bg-pink-400 text-white rounded-3xl p-8 sticky top-8 shadow-xl">
            <div class="text-center">
                <img src="{{ asset('resource/Foto profile.jpg') }}" class="h-40 w-40 object-cover rounded-full mx-auto border-4 border-pink-300 shadow-sm">
                <h2 class="text-xl font-bold">{{ $username }}</h2>
                <p class="text-pink-100 text-sm mt-1">Reader Enthusiast</p>
            </div>
            <div class="mt-8 space-y-4 border-t border-pink-300 pt-6">
                <div class="flex justify-between text-sm">
                    <span class="text-pink-100">Total Review</span>
                    <span class="font-bold">{{ count($ulasanPribadi) }} Buku</span>
                </div>
                <div class="flex justify-between text-sm">
                    <span class="text-pink-100">Status Akun</span>
                    <span class="font-bold text-white bg-pink-500 px-2 py-0.5 rounded">Aktif</span>
                </div>
            </div>
        </div>
    </aside>

    <main class="lg:w-3/4">
        <div class="bg-white rounded-3xl shadow-sm border border-pink-100 p-8">
            <h2 class="text-2xl font-bold text-rose-900 border-b-4 border-pink-400 pb-2 inline-block mb-6">Daftar Ulasan Saya</h2>

            <div class="space-y-6">
                @foreach($ulasanPribadi as $review)
                <div class="p-6 bg-pink-50 rounded-2xl border border-pink-100 hover:shadow-md hover:border-pink-300 transition-all">
                    <div class="flex justify-between items-start mb-3">
                        <h4 class="font-bold text-rose-900 text-xl">{{ $review['buku'] }}</h4>
                        <span class="text-xs font-bold text-pink-600 bg-pink-100 px-3 py-1 rounded-full">{{ $review['tgl'] }}</span>
                    </div>

                    <div class="text-amber-500 text-sm mb-3 tracking-widest">Rating: {{ $review['rating'] }}/5</div>
                    <p class="text-slate-600 leading-relaxed italic mb-4">"{{ $review['isi'] }}"</p>
                    
                    <div class="flex items-center justify-between border-t border-pink-200 pt-4">
                        <span class="text-xs font-bold px-3 py-1 bg-rose-100 text-rose-600 rounded-lg">Dipublikasikan</span>
                        <a href="{{ url('/form-ulasan') }}?username={{ urlencode($username) }}&buku={{ urlencode($review['buku']) }}&ulasan={{ urlencode($review['isi']) }}" class="text-sm text-pink-500 font-bold hover:underline">Edit Ulasan</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </main>
</div>
@endsection