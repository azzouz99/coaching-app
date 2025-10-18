<x-app-layout>
    <div class="bg-gradient-to-br from-green-100 via-white to-white py-20 relative overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute top-0 ltr:right-10 rtl:left-10 w-44 h-44 bg-green-200 rounded-full blur-3xl opacity-30 -translate-y-10"></div>
            <div class="absolute bottom-0 ltr:left-10 rtl:right-10 w-56 h-56 bg-emerald-200 rounded-full blur-3xl opacity-20 translate-y-16"></div>
        </div>

        <div class="relative max-w-5xl mx-auto px-6 text-center">
            <div class="inline-flex items-center px-4 py-1.5 rounded-full bg-white/70 border border-green-200 text-green-700 font-semibold uppercase tracking-widest text-xs">
                {{ __('Lecon :position sur :total', ['position' => $currentLessonIndex, 'total' => $lessonsCount]) }}
            </div>
            <h1 class="mt-6 text-4xl md:text-6xl font-bold text-gray-900 drop-shadow-xl">
                {{ __($course->title) }}
            </h1>
            @if($course->coach)
                <p class="mt-2 text-lg text-green-600 font-medium">
                    {{ __('Enseignant :name', ['name' => __($course->coach->name)]) }}
                </p>
            @endif
            @if($course->description)
                <p class="mt-6 text-lg md:text-xl text-gray-600 leading-relaxed">
                    {{ \Illuminate\Support\Str::limit(strip_tags($course->description), 220) }}
                </p>
            @endif
        </div>
    </div>

    <div class="bg-gray-50 py-16">
        <div class="max-w-6xl mx-auto px-6 space-y-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white border border-green-100 rounded-2xl shadow-sm p-6 text-center">
                    <span class="text-sm text-gray-500 uppercase tracking-widest">{{ __('Lecons totales') }}</span>
                    <p class="mt-2 text-3xl font-extrabold text-green-600">{{ $lessonsCount }}</p>
                </div>
                <div class="bg-white border border-green-100 rounded-2xl shadow-sm p-6 text-center">
                    <span class="text-sm text-gray-500 uppercase tracking-widest">{{ __('Progression') }}</span>
                    <p class="mt-2 text-3xl font-extrabold text-green-600">
                        {{ number_format(($lessonsCount > 0 ? ($currentLessonIndex / $lessonsCount) * 100 : 0), 0) }}%
                    </p>
                </div>
                <div class="bg-white border border-green-100 rounded-2xl shadow-sm p-6 text-center">
                    <span class="text-sm text-gray-500 uppercase tracking-widest">{{ __('Type de contenu') }}</span>
                    <p class="mt-2 text-lg font-semibold text-gray-900">{{ __('Video Bunny Stream') }}</p>
                </div>
            </div>

            <section id="video" class="bg-white rounded-3xl shadow-lg border border-green-100 overflow-hidden">
                <div class="bg-gradient-to-r from-green-50 to-emerald-50 px-8 py-6 border-b border-green-100">
                    <h2 class="text-2xl font-semibold text-gray-900 flex items-center justify-between">
                        <span>{{ __('Seance video') }}</span>
                        <span class="text-sm font-medium text-green-600 bg-white px-3 py-1 rounded-full border border-green-200">
                            {{ __('Lecture securisee Bunny') }}
                        </span>
                    </h2>
                    <p class="mt-2 text-gray-600">{{ __('Visionnez votre lecon directement depuis notre bibliotheque securisee Bunny Stream.') }}</p>
                </div>
                <div class="aspect-video bg-black">
                    @if($videoSrc)
                        <iframe
                            src="{{ $videoSrc }}"
                            title="{{ __($course->title) }}"
                            loading="lazy"
                            allowfullscreen
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            class="w-full h-full border-0"
                        ></iframe>
                    @else
                        <div class="flex items-center justify-center h-full bg-gradient-to-br from-gray-100 to-gray-200">
                            <div class="text-center max-w-md px-6">
                                <svg class="w-16 h-16 mx-auto text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14m-2-4H5a2 2 0 00-2 2v4a2 2 0 002 2h8a2 2 0 002-2v-4a2 2 0 00-2-2z" />
                                </svg>
                                <h3 class="text-lg font-semibold text-gray-700 mb-2">{{ __('Video indisponible') }}</h3>
                                <p class="text-gray-500">
                                    {{ __("La video de cette lecon n'est pas encore publiee. Veuillez reessayer ulterieurement.") }}
                                </p>
                            </div>
                        </div>
                    @endif
                </div>
            </section>

            @if($course->description)
                <section class="bg-white rounded-3xl shadow-sm border border-green-100 p-8">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-6">{{ __('A propos de cette lecon') }}</h2>
                    <div class="prose prose-green max-w-none text-gray-700 leading-relaxed rtl:text-right">
                        {!! nl2br(e($course->description)) !!}
                    </div>
                </section>
            @endif

            <section class="bg-white rounded-3xl shadow-sm border border-green-100 p-8">
                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6">
                    <div>
                        <h2 class="text-2xl font-semibold text-gray-900">{{ __('Programme complet') }}</h2>
                        <p class="text-gray-600">{{ __("Consultez l'ensemble des lecons du cursus Zaytouna.") }}</p>
                    </div>
                </div>
                <div class="space-y-4">
                    @foreach($lessons as $index => $lesson)
                        <a href="{{ route('zaytouna.show', $lesson) }}"
                           class="group flex items-center justify-between px-5 py-4 rounded-2xl border transition-all duration-300 {{ $lesson->id === $course->id ? 'border-green-400 bg-green-50 shadow-inner' : 'border-green-100 bg-white hover:border-green-300 hover:bg-green-50 hover:shadow-sm' }}">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 rounded-full flex items-center justify-center text-sm font-semibold {{ $lesson->id === $course->id ? 'bg-green-600 text-white' : 'bg-green-100 text-green-700 group-hover:bg-green-600 group-hover:text-white transition-colors' }}">
                                    {{ $index + 1 }}
                                </div>
                                <div>
                                    <p class="text-lg font-semibold text-gray-900 group-hover:text-green-700 transition-colors">
                                        {{ __($lesson->title) }}
                                    </p>
                                    @if($lesson->description)
                                        <p class="text-sm text-gray-500 mt-1">
                                            {{ \Illuminate\Support\Str::limit(strip_tags($lesson->description), 90) }}
                                        </p>
                                    @endif
                                </div>
                            </div>
                            <svg class="w-5 h-5 text-green-500 rtl:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg>
                        </a>
                    @endforeach
                </div>
            </section>
        </div>
    </div>
</x-app-layout>
