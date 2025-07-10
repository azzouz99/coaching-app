<div class="bg-white rounded-xl shadow-sm p-6 mb-6">
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-6 gap-4">
        <h3 class="text-2xl font-bold text-gray-900">Nos Coachs Experts</h3>
        
        <!-- Search Input -->
        <div class="relative">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                </svg>
            </div>
            <input 
                wire:model.live.debounce.300ms="search" 
                type="text" 
                class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-lg leading-5 bg-white placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:ring-1 focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                placeholder="Rechercher un coach..."
            >
        </div>
    </div>
    
    <div class="flex items-center justify-between mb-6">
        <div class="flex items-center space-x-2">
            <span class="text-sm text-gray-500">{{ $coaches->total() }} coachs disponibles</span>
        </div>
        
        <!-- Results per page -->
        <div class="flex items-center space-x-2">
            <label class="text-sm text-gray-500">Afficher:</label>
            <select wire:model.live="perPage" class="border border-gray-300 rounded-md px-3 py-1 text-sm focus:outline-none focus:ring-1 focus:ring-blue-500">
                <option value="6">6</option>
                <option value="9">9</option>
                <option value="12">12</option>
                <option value="18">18</option>
            </select>
        </div>
    </div>
    
    @if($coaches->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
            @foreach($coaches as $coach)
                <div class="group bg-gradient-to-br from-white to-gray-50 rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100 hover:border-blue-200 h-96 flex flex-col">
                    <!-- Coach Photo -->
                    <div class="relative h-48 overflow-hidden bg-gradient-to-br from-gray-50 to-gray-100 flex items-center justify-center">
                        @if($coach->photo)
                            <img src="{{ Storage::disk('s3')->temporaryUrl($coach->photo, now()->addMinutes(60)) }}" 
                                 alt="{{ $coach->name }}" 
                                 class="w-24 h-24 object-contain rounded-full shadow-lg group-hover:scale-110 transition-transform duration-300">
                        @else
                            <div class="w-24 h-24 flex items-center justify-center bg-gradient-to-br from-blue-400 via-purple-500 to-pink-500 rounded-full shadow-lg group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-12 h-12 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        @endif
                        <div class="absolute top-3 right-3">
                            <span class="bg-white/90 backdrop-blur-sm text-gray-700 px-3 py-1.5 rounded-full text-sm font-medium">
                                Coach
                            </span>
                        </div>
                    </div>
                    
                    <!-- Coach Info -->
                    <div class="p-6 flex-1 flex flex-col">
                        <div class="flex-1">
                            <div class="flex items-center justify-between mb-3">
                                <h4 class="text-lg font-bold text-gray-900 group-hover:text-blue-600 transition-colors">{{ $coach->name }}</h4>
                                <div class="flex items-center">
                                    <div class="w-2 h-2 bg-green-400 rounded-full mr-1"></div>
                                    <span class="text-xs text-gray-500">Actif</span>
                                </div>
                            </div>
                            
                            @if($coach->description)
                                <p class="text-gray-600 text-sm leading-relaxed mb-4 line-clamp-3">
                                    {{ Str::limit($coach->description, 120) }}
                                </p>
                            @else
                                <p class="text-gray-400 text-sm italic mb-4">
                                    Aucune description disponible
                                </p>
                            @endif
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex space-x-2 mt-auto">                                        
                            @if($coach->video)
                                <a href="{{ route('coach.show', $coach) }}" class="flex-1 bg-gradient-to-r from-green-600 to-green-700 hover:from-green-700 hover:to-green-800 text-white font-medium py-3 px-4 rounded-lg transition-all duration-200 text-sm text-center">
                                    Voir les Vidéos
                                </a>
                            @else
                                <button class="flex-1 bg-gray-100 text-gray-400 font-medium py-3 px-4 rounded-lg text-sm cursor-not-allowed">
                                    Pas de vidéo
                                </button>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        
        <!-- Pagination -->
        <div class="mt-6">
            {{ $coaches->links() }}
        </div>
    @else
        <!-- No Coaches Message -->
        <div class="text-center py-12">
            <div class="mx-auto w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mb-4">
                <svg class="w-12 h-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                </svg>
            </div>
            <h3 class="text-xl font-medium text-gray-900 mb-2">
                @if($search)
                    Aucun coach trouvé pour "{{ $search }}"
                @else
                    Aucun coach disponible
                @endif
            </h3>
            <p class="text-gray-600 mb-6">
                @if($search)
                    Essayez de modifier votre recherche ou parcourez tous les coachs.
                @else
                    Les coachs seront bientôt disponibles. Revenez plus tard !
                @endif
            </p>
            @if($search)
                <button wire:click="$set('search', '')" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-medium transition-colors">
                    Voir tous les coachs
                </button>
            @else
                <button onclick="window.location.reload()" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-medium transition-colors">
                    Actualiser la page
                </button>
            @endif
        </div>
    @endif
</div>
