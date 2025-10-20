<x-app-layout>
    <div class="bg-gradient-to-b from-green-100 via-white to-white py-16 relative overflow-hidden">
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute top-0 ltr:right-0 rtl:left-0 w-40 h-40 bg-green-200 rounded-full blur-3xl opacity-30 translate-x-12 -translate-y-16"></div>
            <div class="absolute bottom-0 ltr:left-0 rtl:right-0 w-56 h-56 bg-emerald-200 rounded-full blur-3xl opacity-20 -translate-x-20 translate-y-20"></div>
        </div>

        <div class="relative max-w-4xl mx-auto px-6">
            <a href="{{ route('zaytouna.index') }}" class="inline-flex items-center text-green-700 hover:text-green-800 mb-8 font-semibold">
                <svg class="w-5 h-5 mr-2 rtl:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
                {{ __('Retour aux lecons') }}
            </a>

            <div class="bg-white rounded-3xl shadow-xl border border-green-100 overflow-hidden">
                <div class="bg-gradient-to-r from-green-50 to-emerald-50 px-8 py-6 border-b border-green-100">
                    <span class="inline-flex items-center px-4 py-1 rounded-full bg-white text-green-700 font-semibold border border-green-200 uppercase tracking-widest text-xs">
                        {{ __('Creation Zaytouna') }}
                    </span>
                    <h1 class="mt-6 text-3xl md:text-4xl font-bold text-gray-900">
                        {{ __('Ajouter une nouvelle lecon') }}
                    </h1>
                    <p class="mt-3 text-gray-600">
                        {{ __('Renseignez les informations de la lecon et ajoutez le lien de la video Bunny Stream.') }}
                    </p>
                </div>

                <form action="{{ route('zaytouna.store') }}" method="POST" class="px-8 py-10 space-y-8">
                    @csrf
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                        <div class="lg:col-span-2">
                            <label for="title" class="block text-sm font-semibold text-gray-700 uppercase tracking-wide">{{ __('Titre de la lecon') }}</label>
                            <input type="text" name="title" id="title" value="{{ old('title') }}" required
                                   class="mt-2 block w-full rounded-xl border border-green-200 bg-white px-4 py-3 text-gray-900 focus:border-green-400 focus:ring-2 focus:ring-green-300">
                            @error('title')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="coach_id" class="block text-sm font-semibold text-gray-700 uppercase tracking-wide">{{ __('Intervenant') }}</label>
                            <select id="coach_id" name="coach_id" required
                                    class="mt-2 block w-full rounded-xl border border-green-200 bg-white px-4 py-3 text-gray-900 focus:border-green-400 focus:ring-2 focus:ring-green-300">
                                <option value="">{{ __('Choisir un intervenant') }}</option>
                                @foreach($coaches as $coach)
                                    <option value="{{ $coach->id }}" @selected(old('coach_id') == $coach->id)>
                                        {{ __($coach->name) }}
                                    </option>
                                @endforeach
                            </select>
                            @error('coach_id')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="video_url" class="block text-sm font-semibold text-gray-700 uppercase tracking-wide">{{ __('Video Bunny (URL ou ID)') }}</label>
                            <input type="text" name="video_url" id="video_url" value="{{ old('video_url') }}"
                                   class="mt-2 block w-full rounded-xl border border-green-200 bg-white px-4 py-3 text-gray-900 focus:border-green-400 focus:ring-2 focus:ring-green-300" placeholder="ex: https://video.bunnycdn.com/... ou resource id">
                            @error('video_url')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                            <p class="mt-2 text-xs text-gray-500">{{ __("Nous signerons automatiquement l'URL pour l'integration.") }}</p>
                        </div>

                        <div>
                            <label for="course_url" class="block text-sm font-semibold text-gray-700 uppercase tracking-wide">{{ __('Document ou ressource') }}</label>
                            <input type="text" name="course_url" id="course_url" value="{{ old('course_url') }}"
                                   class="mt-2 block w-full rounded-xl border border-green-200 bg-white px-4 py-3 text-gray-900 focus:border-green-400 focus:ring-2 focus:ring-green-300" placeholder="https://...">
                            @error('course_url')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="lg:col-span-2">
                            <label for="description" class="block text-sm font-semibold text-gray-700 uppercase tracking-wide">{{ __('Description') }}</label>
                            <textarea name="description" id="description" rows="6"
                                      class="mt-2 block w-full rounded-xl border border-green-200 bg-white px-4 py-3 text-gray-900 focus:border-green-400 focus:ring-2 focus:ring-green-300">{{ old('description') }}</textarea>
                            @error('description')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                        <p class="text-sm text-gray-500">
                            {{ __('La lecon sera automatiquement marquee comme contenu Zaytouna.') }}
                        </p>
                        <button type="submit"
                                class="inline-flex items-center justify-center px-6 py-3 bg-green-600 text-white font-semibold rounded-xl shadow-lg hover:bg-green-700 transition-colors">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                            </svg>
                            {{ __('Enregistrer la lecon') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
