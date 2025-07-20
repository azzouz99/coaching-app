<header class="w-full bg-white shadow-sm py-4" x-data="{ open: false }">
    <div class="container mx-auto px-4 md:px-6 flex justify-between items-center">
        <div class="flex items-center">
            <a href="{{ url('/') }}">
                <img src="{{ asset('images/logo2.png') }}" alt="CongrèsCoaching" class="h-20 w-auto transition-transform duration-300 hover:scale-105">
            </a>
            <div class="flex flex-col leading-tight ml-2">
                <span class="text-2xl font-bold text-black">CERMI</span>
                <span class="text-sm text-gray-700 leading-snug">
                    Centre d'Études et
                    de Recherches en
                     Médecine Islamique
                </span>
            </div>
        </div>

        <!-- Desktop Navigation -->
        <nav class="hidden md:flex items-center space-x-6">
            @auth
            <a href="{{ route('dashboard') }}" class="text-sm font-medium text-black hover:text-green-600 transition-colors">Tableau de bord</a>
            <form method="POST" action="{{ route('logout') }}" class="inline">
                @csrf
                <button type="submit" class="text-sm font-medium text-green-600 hover:text-green-800 transition-colors">
                    Se déconnecter
                </button>
            </form>
            @endauth
            @if (!auth()->check())
            <a href="{{ route('login')  }}" class="text-sm font-medium text-black hover:text-green-600 transition-colors">Se Connecter</a>
            <a href="{{ route('register') }}" class="text-sm font-medium bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition-colors">Inscription</a>
            @endif
        </nav>

        <!-- Hamburger Button -->
        <button @click="open = !open" type="button" class="md:hidden text-gray-600 hover:text-green-600 focus:outline-none">
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div class="md:hidden" x-show="open" x-transition>
        <div class="px-4 pt-2 pb-3 space-y-1">
            @auth
            <a href="{{ route('dashboard') }}" class="block px-3 py-2 text-base font-medium text-black hover:text-green-600">Tableau de bord</a>
            <form method="POST" action="{{ route('logout') }}" class="inline">
                @csrf
                <button type="submit" class="block w-full text-left px-3 py-2 text-base font-medium text-green-600 hover:text-green-800">
                    Se déconnecter
                </button>
            </form>
            @else
            {{-- <a href="{{ route('register') }}" class="block px-3 py-2 text-base font-medium text-black hover:text-green-600">À propos</a> --}}
            <a href="{{ route('login') }}" class="block px-3 py-2 text-base font-medium text-black hover:text-green-600">Se Connecter</a>
            <a href="{{ route('register') }}" class="block px-3 py-2 text-base font-medium text-green-600">Inscription</a>
            @endauth
        </div>
    </div>
</header>
