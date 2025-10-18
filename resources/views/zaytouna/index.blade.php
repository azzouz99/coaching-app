<x-app-layout>
    <div class="bg-gradient-to-b from-green-100 via-white to-white py-20 relative overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute top-0 ltr:right-0 rtl:left-0 w-40 h-40 bg-green-200 rounded-full blur-3xl opacity-30 translate-x-12 -translate-y-12"></div>
            <div class="absolute bottom-0 ltr:left-0 rtl:right-0 w-48 h-48 bg-emerald-200 rounded-full blur-3xl opacity-20 -translate-x-16 translate-y-16"></div>
        </div>

        <div class="relative max-w-6xl mx-auto px-6 text-center">
            @if(session('status'))
                <div class="mb-6 inline-flex items-center px-4 py-2 rounded-xl border border-green-300 bg-white/80 text-green-700 shadow">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>{{ session('status') }}</span>
                </div>
            @endif
            <span class="inline-flex items-center px-4 py-1.5 rounded-full bg-white/70 text-green-600 font-semibold border border-green-200 uppercase text-xs tracking-widest">
                {{ __('Programme Zaytouna') }}
            </span>
            <h1 class="mt-6 text-4xl md:text-6xl font-bold text-gray-900 drop-shadow-xl">
                {{ __('Enseignement Zaytouna') }}
            </h1>
            <p class="mt-4 text-lg md:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                {{ __("Un parcours immersif inspire de la tradition Zaytounienne, melant savoir, spiritualite et excellence academique.") }}
            </p>

            <div class="mt-10 flex flex-col sm:flex-row items-center justify-center gap-4">
                @if(auth()->user()?->hasRole('admin'))
                    <a href="{{ route('zaytouna.create') }}"
                       class="inline-flex items-center px-6 py-3 bg-white text-green-700 font-semibold rounded-xl border border-green-200 shadow hover:bg-green-50 hover:border-green-300 transition-colors">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                        {{ __('Ajouter une lecon') }}
                    </a>
                @endif
                <div class="bg-white rounded-2xl shadow-xl border border-green-100 px-6 py-4 flex items-center space-x-4">
                    <div class="w-12 h-12 rounded-xl bg-green-600 flex items-center justify-center text-white text-xl font-semibold">
                        {{ $lessonsCount }}
                    </div>
                    <div class="text-left">
                        <p class="text-sm text-gray-500 uppercase tracking-wide">{{ __('Lecons disponibles') }}</p>
                        <p class="text-lg font-semibold text-gray-900">{{ __('Programme complet') }}</p>
                    </div>
                </div>
                @if($courses->isNotEmpty())
                    <a href="{{ route('zaytouna.show', $courses->first()) }}"
                       class="inline-flex items-center px-8 py-4 bg-green-600 text-white font-semibold rounded-xl shadow-lg hover:bg-green-700 transition-all duration-300 hover:shadow-2xl">
                        {{ __('Commencer la formation') }}
                        <svg class="w-5 h-5 ms-2 rtl:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </a>
                @endif
            </div>
        </div>
    </div>

    <div class="bg-gray-50 py-16">
        <div class="max-w-6xl mx-auto px-6">
            @if($courses->isEmpty())
                <div class="text-center bg-white rounded-2xl border border-dashed border-green-200 py-16 px-6 shadow-sm">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">{{ __("Aucune lecon disponible pour le moment") }}</h2>
                    <p class="text-gray-600 max-w-2xl mx-auto">{{ __("Revenez bientot pour decouvrir les nouvelles sessions de l'enseignement Zaytouna.") }}</p>
                </div>
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($courses as $course)
                        <div class="group bg-white rounded-2xl shadow-sm border border-green-100 hover:border-green-200 hover:shadow-xl transition-all duration-300 relative overflow-hidden">
                            <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300 bg-gradient-to-br from-green-600/10 to-emerald-400/10"></div>
                            <div class="relative p-6 space-y-4">
                                <div class="flex items-center justify-between">
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-green-50 text-green-700 border border-green-200 uppercase tracking-widest">
                                        {{ __('Lecon') }} {{ $loop->iteration }}
                                    </span>
                                    <svg class="w-5 h-5 text-green-500 group-hover:text-green-600 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M12 20a8 8 0 110-16 8 8 0 010 16z" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-900 group-hover:text-green-700 transition-colors">
                                    {{ __($course->title) }}
                                </h3>
                                @if($course->description)
                                    <p class="text-sm text-gray-600 leading-relaxed">
                                        {{ \Illuminate\Support\Str::limit(strip_tags($course->description), 130) }}
                                    </p>
                                @endif
                                <div class="flex items-center justify-between pt-4">
                                    <div class="text-sm text-gray-500">
                                        {{ __('Acceder a la video') }}
                                    </div>
                                    <a href="{{ route('zaytouna.show', $course) }}"
                                       class="inline-flex items-center px-4 py-2 rounded-lg bg-green-600 text-white text-sm font-semibold shadow-sm hover:bg-green-700 transition-colors">
                                        {{ __('Voir la lecon') }}
                                        <svg class="w-4 h-4 ms-2 rtl:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
