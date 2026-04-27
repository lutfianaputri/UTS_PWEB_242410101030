@extends('layouts.app')

@section('title', 'Login - Readify')

@section('content')
<div class="flex items-center justify-center min-h-[70vh]">
    <div class="bg-white p-10 rounded-3xl shadow-xl shadow-pink-100 border border-pink-50 w-full max-w-md transform hover:-translate-y-1 transition-transform duration-300">

        <div class="text-center mb-8">
            <div class="bg-pink-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4 shadow-inner">
                <img src="{{ asset('resource/Logo.png') }}" alt="Logo Readify" class="w-full h-full object-contain">
            </div>
            <h2 class="text-3xl font-extrabold text-rose-900">Readify</h2>
            <p class="text-pink-400 mt-2 font-medium">Level Up Your Reading</p>
        </div>

        <form action="{{ url('/dashboard') }}" method="GET">

            <div class="mb-6">
                <label for="username" class="block text-rose-900 font-bold mb-2 ml-1">Username</label>
                <input type="text" name="username" id="username" class="w-full px-5 py-3 bg-pink-50 border border-pink-200 rounded-2xl focus:outline-none focus:ring-4 focus:ring-pink-200 focus:border-pink-400 transition-all text-rose-900 placeholder-pink-300 font-medium" placeholder="who are you?" required>
            </div>

            <div class="mb-8">
                <label for="password" class="block text-rose-900 font-bold mb-2 ml-1">Password</label>
                <input type="password" name="password" id="password" class="w-full px-5 py-3 bg-pink-50 border border-pink-200 rounded-2xl focus:outline-none focus:ring-4 focus:ring-pink-200 focus:border-pink-400 transition-all text-rose-900 placeholder-pink-300 font-medium" placeholder="give me your passkey" required>
            </div>

            <button type="submit"
                    class="w-full bg-pink-400 hover:bg-pink-500 text-white font-bold py-3 px-4 rounded-2xl transition-all duration-300 shadow-lg shadow-pink-200 hover:shadow-pink-300">Masuk
            </button>
        </form>

    </div>
</div>
@endsection
