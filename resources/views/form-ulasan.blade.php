@extends('layouts.app')

@section('title', 'Review - Readify')

@section('content')
<div class="max-w-2xl mx-auto mt-10 mb-12">
    <div class="bg-white p-10 rounded-3xl shadow-xl shadow-pink-100 border border-pink-50">
        
        <div class="mb-8 border-b border-pink-100 pb-4">
            <h2 class="text-3xl font-extrabold text-rose-900">Tulis Pendapatmu Bro</h2>
            <p class="text-pink-400 mt-2 font-medium">Bagaimana buku ini menurutmu? Rating lah</p>
        </div>

        <form action="{{ url('/pengelolaan') }}" method="GET">
            <input type="hidden" name="username" value="{{ $username }}">

            <div class="mb-6">
                <label class="block text-rose-900 font-bold mb-2 ml-1">Judul Buku</label>
                <input type="text" name="buku" value="{{ $buku }}" readonly class="w-full px-5 py-3 bg-slate-50 border border-slate-200 rounded-2xl text-slate-500 font-bold cursor-not-allowed">
            </div>

            <div class="mb-6">
                <label class="block text-rose-900 font-bold mb-2 ml-1">Rating</label>
                <select name="rating" class="w-full px-5 py-3 bg-pink-50 border border-pink-200 rounded-2xl focus:outline-none focus:ring-4 focus:ring-pink-200 text-rose-900 font-medium">
                    <option value="5">Sempurna</option>
                    <option value="4">Bagus Aja</option>
                    <option value="3">So So, Nothing Special</option>
                    <option value="2">Kureng sih</option>
                    <option value="1">Jujur Jelek</option>
                </select>
            </div>

            <div class="mb-8">
                <label class="block text-rose-900 font-bold mb-2 ml-1">Alasan</label>
                <textarea name="ulasan" rows="4" required class="w-full px-5 py-3 bg-pink-50 border border-pink-200 rounded-2xl focus:outline-none focus:ring-4 focus:ring-pink-200 text-rose-900 font-medium">{{ $ulasanLama }}</textarea>
            </div>
            
            <div class="flex gap-4">
                <a href="{{ url('/dashboard?username=' . $username) }}" class="w-1/3 text-center bg-white border-2 border-pink-200 hover:bg-pink-50 text-pink-500 font-bold py-3 px-4 rounded-2xl transition-all">Batal</a>
                <button type="submit" class="w-2/3 bg-pink-400 hover:bg-pink-500 text-white font-bold py-3 px-4 rounded-2xl transition-all shadow-lg shadow-pink-200">Kirim Ulasan</button>
            </div>
        </form>
        
    </div>
</div>
@endsection