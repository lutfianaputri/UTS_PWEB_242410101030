@extends('layouts.app')

@section('title', 'Profil - Readify')

@section('content')
<div class="max-w-5xl mx-auto bg-white rounded-3xl shadow-sm border border-pink-100 overflow-hidden md:flex mt-8 mb-12 transform hover:shadow-lg transition duration-300">

    <div class="md:shrink-0 bg-pink-50 flex items-center justify-center p-10 border-b md:border-b-0 md:border-r border-pink-100">
        <img class="h-40 w-40 object-cover rounded-full shadow-inner border-4 border-white" src="{{ asset('resource/Foto profile.jpg') }}" alt="Foto {{ $username }}">
    </div>

    <div class="p-10 w-full">
        <div class="flex justify-between items-center mb-6">
            <div>
                <h2 class="block text-3xl leading-tight font-extrabold text-rose-900">{{ $username }}</h2>
            </div>
            <span class="text-xs font-bold px-4 py-2 bg-pink-100 text-pink-600 rounded-full shadow-inner">Member Sejak 2026</span>
        </div>

        <div class="border-t border-pink-100 pt-6">
            <dl class="space-y-4">
                <div class="bg-white px-5 py-3 sm:grid sm:grid-cols-3 sm:gap-4">
                    <dt class="text-sm font-semibold text-rose-400">Email</dt>
                    <dd class="mt-1 text-sm text-rose-900 sm:mt-0 sm:col-span-2">{{ $email }}</dd>
                </div>

                <div class="bg-white px-5 py-3 sm:grid sm:grid-cols-3 sm:gap-4">
                    <dt class="text-sm font-semibold text-rose-400">Bio</dt>
                    <dd class="mt-1 text-sm text-rose-900 sm:mt-0 sm:col-span-2 italic leading-relaxed">Membaca untuk menikmati dunia. Menulis untuk berbagi cerita.
                    </dd>
                </div>

                <div class="bg-white px-5 py-3 sm:grid sm:grid-cols-3 sm:gap-4">
                    <dt class="text-sm font-semibold text-rose-400">Level</dt>
                    <dd class="mt-1 text-sm text-rose-900 sm:mt-0 sm:col-span-2">
                        <span class="font-bold text-pink-500">Advance</span>
                    </dd>
                </div>
            </dl>
        </div>
    </div>
</div>
@endsection
