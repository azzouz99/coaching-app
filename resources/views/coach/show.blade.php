<x-app-layout>
    <x-slot name="header">
        <div class="bg-gradient-to-r from-green-600 to-green-800 rounded-lg p-6 text-white">
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="font-bold text-2xl">
                        {{ __($coach->name) }}
                    </h2>
                    <p class="text-green-100 mt-2">{{ __('Intervenant Expert') }}</p>
                </div>
                <a href="{{ route('dashboard') }}" class="bg-white/20 hover:bg-white/30 text-white px-4 py-2 rounded-lg transition-colors">
                    {{ __('← Retour au tableau de bord') }}
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-8 bg-gray-50">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Coach Profile Section -->
            <div class="bg-white rounded-xl shadow-sm p-6 mb-8 border border-green-100">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- Coach Photo and Info -->
                    <div class="lg:col-span-1">
                        <div class="text-center">
                            <div class="w-48 h-48 mx-auto mb-4 rounded-full overflow-hidden shadow-lg">
                                @if($coach->photo)
                                    <img src="{{ Storage::disk('s3')->temporaryUrl($coach->photo, now()->addMinutes(60)) }}" 
                                         alt="{{ $coach->name }}" 
                                         class="w-full h-full object-cover">
                                @else
                                    <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-green-500 to-green-700">
                                        <svg class="w-20 h-20 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                @endif
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-2">{{ __($coach->name) }}</h3>
                            {{-- <div class="flex items-center justify-center mb-4">
                                <div class="w-2 h-2 bg-green-400 rounded-full mr-2"></div>
                                <span class="text-sm text-gray-600">{{ __('Intervenant Actif') }}</span>
                            </div> --}}
                            <div class="flex justify-center space-x-4">
                                <div class="text-center">
                                    <div class="text-2xl font-bold text-green-600">{{ $coach->courses->count() }}</div>
                                    <div class="text-sm text-gray-600">{{ __('Cours') }}</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-2xl font-bold text-green-600">{{$coach->courses->whereNotNull('video_url')->count();}}</div>
                                    <div class="text-sm text-gray-600">{{ __('Vidéo') }}</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="lg:col-span-2">
                        <h4 class="text-xl font-bold text-gray-900 mb-4">{{ __('À propos de cet intervenant') }}</h4>
                        @if($coach->description)
                            <p class="text-gray-600 leading-relaxed mb-6">@nl2br($coach->description)</p>
                        @else
                            <p class="text-gray-500 italic mb-6">{{ __('Aucune description disponible pour ce coach.') }}</p>
                        @endif

                        <!-- Specialties -->
                        <div class="mb-6">
                            <h5 class="font-semibold text-gray-900 mb-3">{{ __('Spécialités') }}</h5>
                            <div class="flex flex-wrap gap-2">
                                @if($coach->specialties && count($coach->specialties) > 0)
                                    @foreach($coach->specialties as $index => $specialty)
                                        @php
                                            $colors = [
                                                'bg-green-100 text-green-800',
                                                'bg-green-200 text-green-800',
                                                'bg-white border border-green-300 text-green-800',
                                                'bg-green-50 text-green-700',
                                                'bg-green-600 text-white',
                                                'bg-emerald-100 text-emerald-800',
                                                'bg-teal-100 text-teal-800',
                                                'bg-lime-100 text-lime-800'
                                            ];
                                            $colorClass = $colors[$index % count($colors)];
                                        @endphp
                                        <span class="{{ $colorClass }} px-3 py-1 rounded-full text-sm">{{ $specialty }}</span>
                                    @endforeach
                                @else
                                    <span class="bg-gray-100 text-gray-600 px-3 py-1 rounded-full text-sm italic">{{ __('Aucune spécialité définie') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Courses Section -->
            <div class="bg-white rounded-xl shadow-sm p-6 border border-green-100">
                <h4 class="text-2xl font-bold text-gray-900 mb-6">{{ __('Cours disponibles') }}</h4>
                
                @if($coach->courses->count() > 0)
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach($coach->courses as $course)
                            <div class="bg-white border border-gray-200 hover:border-green-300 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 group">
                                <!-- Course Header -->
                                <div class="bg-gradient-to-r from-green-600 to-green-700 p-4 text-white">
                                    <h5 class="font-bold truncate">{{ __($course->title) }}</h5>
                                </div>
                                
                                <!-- Course Body -->
                                <div class="p-6">
                                    <!-- Course Content -->
                                    <div class="mb-4">
                                        @if($course->description)
                                            <p class="text-gray-600 text-sm line-clamp-3 mb-4">{{ $course->description }}</p>
                                        @else
                                            <p class="text-gray-400 text-sm italic mb-4">{{ __('Pas de description') }}</p>
                                        @endif
                                    </div>
                                    
                                    <!-- Course Type Indicator -->
                                    <div class="flex items-center mb-4">
                                        @if($course->course_url)
                                            @php
                                                $fileExtension = pathinfo($course->course_url, PATHINFO_EXTENSION);
                                                $fileType = 'Document';
                                                $bgColor = 'bg-green-100';
                                                $textColor = 'text-green-800';
                                                $icon = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>';
                                                
                                                if (strtolower($fileExtension) === 'pdf') {
                                                    $fileType = 'PDF';
                                                } elseif (in_array(strtolower($fileExtension), ['docx', 'doc'])) {
                                                    $fileType = 'Word';
                                                    $bgColor = 'bg-blue-100';
                                                    $textColor = 'text-blue-800';
                                                } elseif (in_array(strtolower($fileExtension), ['pptx', 'ppt'])) {
                                                    $fileType = 'PowerPoint';
                                                    $bgColor = 'bg-orange-100';
                                                    $textColor = 'text-orange-800';
                                                } elseif (in_array(strtolower($fileExtension), ['xlsx', 'xls'])) {
                                                    $fileType = 'Excel';
                                                    $bgColor = 'bg-emerald-100';
                                                    $textColor = 'text-emerald-800';
                                                }
                                            @endphp
                                            <span class="{{ $bgColor }} {{ $textColor }} text-xs px-2 py-1 rounded-full flex items-center">
                                                <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    {!! $icon !!}
                                                </svg>
                                                {{ $fileType }}
                                            </span>
                                        @endif
                                        
                                        @if($course->video_url)
                                            <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full flex items-center ml-2">
                                                <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                                </svg>
                                                Vidéo
                                            </span>
                                        @endif
                                    </div>
                                    
                                    <!-- Action Button -->
                                    <a href="{{ route('course.show', $course) }}" class="w-full bg-green-600 hover:bg-green-700 text-white py-2 px-4 rounded-lg transition-colors flex items-center justify-center font-medium">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                        </svg>
                                        {{ __('Voir le cours') }}
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <!-- No Courses Available -->
                    <div class="text-center py-12 bg-gray-50 rounded-lg">
                        <div class="mx-auto w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-4">
                            <svg class="w-8 h-8 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-medium text-gray-900 mb-2">{{ __('Aucun cours disponible') }}</h3>
                        <p class="text-gray-600">{{ __('Cet intervenant n\'a pas encore de cours disponibles.') }}</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
