<header class="w-full bg-white shadow-sm py-4">
    <div class="container mx-auto px-4 md:px-6 flex justify-between items-center">
        <div class="flex items-center">
            <a href="{{ url('/inscription') }}">
            <img src="{{ asset('images/logo2.png') }}" alt="CongrèsCoaching" class="h-20 w-auto transition-transform duration-300 hover:scale-105">
            </a>
            <div class="flex flex-col leading-tight">
                <span class="text-2xl font-bold text-black">CERMI</span>
                <span class="text-sm text-gray-700">
                    {{ __('Centre d\'Études et de Recherches en Médecine Islamique') }}
                </span>
            </div>
        </div>
        <nav class="hidden md:flex items-center space-x-6">
            <a href="{{ url('/inscription') }}#about" class="text-sm font-medium text-black hover:text-green-600 transition-colors">{{ __('À propos') }}</a>
            <a href="{{ url('/inscription') }}#programme" class="text-sm font-medium text-black hover:text-green-600 transition-colors">{{ __('Programme') }}</a>
            <a href="{{ url('/inscription') }}#intervenants" class="text-sm font-medium text-black hover:text-green-600 transition-colors">{{ __('Intervenants') }}</a>
            <a href="{{ url('/inscription') }}#lieu" class="text-sm font-medium text-black hover:text-green-600 transition-colors">{{ __('Lieu') }}</a>
            <a href="{{ url('/inscription/coach') }}#soumission" class="text-sm font-medium text-black hover:text-green-600 transition-colors">{{ __('Soumission') }}</a>
            <a href="{{ url('/inscription/etudiant') }}" class="text-sm font-medium bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition-colors">{{ __('Inscription Étudiant') }}</a>
        </nav>
        <button type="button" class="md:hidden text-gray-600 hover:text-green-600 focus:outline-none">
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    </div>
    <!-- Mobile menu (hidden by default) -->
    <div class="md:hidden hidden">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="{{ url('/inscription') }}#about" class="block px-3 py-2 text-base font-medium text-black hover:text-green-600">{{ __('À propos') }}</a>
            <a href="{{ url('/inscription') }}#programme" class="block px-3 py-2 text-base font-medium text-black hover:text-green-600">{{ __('Programme') }}</a>
            <a href="{{ url('/inscription') }}#intervenants" class="block px-3 py-2 text-base font-medium text-black hover:text-green-600">{{ __('Intervenants') }}</a>
            <a href="{{ url('/inscription') }}#lieu" class="block px-3 py-2 text-base font-medium text-black hover:text-green-600">{{ __('Lieu') }}</a>
            <a href="{{ url('/inscription/coach') }}#soumission" class="block px-3 py-2 text-base font-medium text-black hover:text-green-600">{{ __('Soumission') }}</a>
            <a href="{{ url('/inscription/coach') }}" class="block px-3 py-2 text-base font-medium text-black hover:text-green-600">{{ __('Inscription Coach') }}</a>
            <a href="{{ url('/inscription/etudiant') }}" class="block px-3 py-2 text-base font-medium text-green-600">{{ __('Inscription Étudiant') }}</a>
        </div>
    </div>
</header>