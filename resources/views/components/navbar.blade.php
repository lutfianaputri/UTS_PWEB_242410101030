<nav class="bg-pink-400 text-white shadow-md">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
        <a href="#" class="text-xl font-bold">Readify</a>
        <div class="flex space-x-4 items-center">
            <a href="{{ url('/dashboard?username=' . request('username')) }}" class="hover:text-pink-100 font-medium transition">Dashboard</a>
            <a href="{{ url('/pengelolaan?username=' . request('username')) }}" class="hover:text-pink-100 font-medium transition">Review</a>
            <a href="{{ url('/profile?username=' . request('username')) }}" class="hover:text-pink-100 font-medium transition">Profil</a>
            <a href="{{ url('/') }}" class="bg-rose-500 hover:bg-rose-600 px-4 py-1.5 rounded-full text-sm font-bold shadow-sm transition">Logout</a>
        </div>
    </div>
</nav>