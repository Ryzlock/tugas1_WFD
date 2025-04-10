<nav class="fixed top-0 w-full z-50 bg-gradient-to-r from-gray-300 via-yellow-400  to-gray-600 text-black p-4 shadow-md">
    <div class="container mx-auto flex flex-row justify-between items-center content-between">
        <!-- TODO buat Logo -->
        <div class="text-lg font-bold">
            <a href="#">Metal-Cube.Com</a>
        </div>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="{{ route('/') }}" class="{{ request()->routeIs('/') ? 'bg-gradient-to-r from-red-900 via-red-600 to-orange-500 rounded-md px-3 py-2' : 'rounded-md px-3 py-2 hover:bg-blue-600' }}">Main</a>
            <a href="{{ route('catalogue.index') }}" class="{{ request()->routeIs('catalogue.index') ? 'bg-gradient-to-r from-red-900 via-red-600 to-orange-500 rounded-md px-3 py-2' : 'rounded-md px-3 py-2 hover:bg-blue-600' }}">Catalogue</a>
            <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'bg-gradient-to-r from-red-900 via-red-600 to-orange-500 rounded-md px-3 py-2' : 'rounded-md px-3 py-2 hover:bg-blue-600' }}">About</a>
            <a href="{{ route('login') }}" class="{{ request()->routeIs('login') ? 'bg-gradient-to-r from-red-900 via-red-600 to-orange-500 rounded-md px-3 py-2' : 'rounded-md px-3 py-2 hover:bg-blue-600' }}">Login</a>
            <a href="{{ route('register') }}" class="{{ request()->routeIs('register') ? 'bg-gradient-to-r from-red-900 via-red-600 to-orange-500 rounded-md px-3 py-2' : 'rounded-md px-3 py-2 hover:bg-blue-600' }}">Register</a>
        </div>
    </div>
</nav>