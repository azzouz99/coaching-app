<header class="w-full bg-white shadow-sm py-4">
    <div class="container mx-auto px-4 md:px-6 flex justify-between items-center">
        <div class="flex items-center">
            <a href="{{ url('/inscription') }}" class="text-2xl font-bold text-green-600">Congrès<span class="text-black">Coaching</span></a>
        </div>
        <nav class="hidden md:flex items-center space-x-6">
            <a href="{{ url('/inscription') }}#about" class="text-sm font-medium text-black hover:text-green-600 transition-colors">À propos</a>
            <a href="{{ url('/inscription') }}#programme" class="text-sm font-medium text-black hover:text-green-600 transition-colors">Programme</a>
            <a href="{{ url('/inscription') }}#intervenants" class="text-sm font-medium text-black hover:text-green-600 transition-colors">Intervenants</a>
            <a href="{{ url('/inscription') }}#lieu" class="text-sm font-medium text-black hover:text-green-600 transition-colors">Lieu</a>
            <a href="{{ url('/inscription/coach') }}" class="text-sm font-medium text-black hover:text-green-600 transition-colors">Inscription Coach</a>
            <a href="{{ url('/inscription/etudiant') }}" class="text-sm font-medium bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition-colors">Inscription Étudiant</a>
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
            <a href="{{ url('/inscription') }}#about" class="block px-3 py-2 text-base font-medium text-black hover:text-green-600">À propos</a>
            <a href="{{ url('/inscription') }}#programme" class="block px-3 py-2 text-base font-medium text-black hover:text-green-600">Programme</a>
            <a href="{{ url('/inscription') }}#intervenants" class="block px-3 py-2 text-base font-medium text-black hover:text-green-600">Intervenants</a>
            <a href="{{ url('/inscription') }}#lieu" class="block px-3 py-2 text-base font-medium text-black hover:text-green-600">Lieu</a>
            <a href="{{ url('/inscription/coach') }}" class="block px-3 py-2 text-base font-medium text-black hover:text-green-600">Inscription Coach</a>
            <a href="{{ url('/inscription/etudiant') }}" class="block px-3 py-2 text-base font-medium text-green-600">Inscription Étudiant</a>
        </div>
    </div>
</header>