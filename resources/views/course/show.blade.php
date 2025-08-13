<x-app-layout>
    <x-slot name="header">
        <div class="bg-gradient-to-r from-green-600 to-green-800 rounded-lg p-6 text-white">
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="font-bold text-2xl">
                        {{ $course->title }}
                    </h2>
                    <p class="text-green-100 mt-2">{{ __('Cours de') }} {{ $course->coach->name }}</p>
                </div>
                <a href="{{ route('coach.show', $course->coach) }}" class="bg-white/20 hover:bg-white/30 text-white px-4 py-2 rounded-lg transition-colors">
                    {{ __('← Retour au profil de l\'intervenant') }}
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-8 bg-gray-50">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Course Details Section -->
            <div class="bg-white rounded-xl shadow-sm p-6 mb-8 border border-green-100">
                <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
                    <!-- Course Info -->
                    <div class="lg:col-span-1">
                        <div class="bg-gray-50 p-4 rounded-xl border border-gray-200">
                            <h3 class="text-xl font-bold text-gray-900 mb-4">{{ __('Informations') }}</h3>
                            
                            <div class="space-y-4">
                                <div>
                                    <h4 class="text-sm font-medium text-gray-500">{{ __('Intervenant') }}</h4>
                                    <p class="text-gray-900 font-medium">{{ $course->coach->name }}</p>
                                </div>
                                
                                <div>
                                    <h4 class="text-sm font-medium text-gray-500">{{ __('Type de contenu') }}</h4>
                                    <div class="flex flex-wrap gap-2 mt-1">
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
                                            <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full flex items-center">
                                                <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                                </svg>
                                                Vidéo
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                
                                <div>
                                    <h4 class="text-sm font-medium text-gray-500">{{ __('Date d\'ajout') }}</h4>
                                    <p class="text-gray-900">{{ $course->created_at->format('d/m/Y') }}</p>
                                </div>
                            </div>
                            
                            <!-- Share Button 
                            <button class="w-full mt-6 bg-gray-100 hover:bg-gray-200 text-gray-800 py-2 px-4 rounded-lg transition-colors flex items-center justify-center font-medium">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path>
                                </svg>
                                {{ __('Partager') }}
                            </button> -->
                        </div>
                    </div>

                    <!-- Course Content -->
                    <div class="lg:col-span-3">
                        <!-- Description -->
                        @if($course->description)
                            <div class="mb-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-4">{{ __('Description') }}</h3>
                                <div class="bg-gray-50 p-4 rounded-xl border border-gray-200">
                                    <p class="text-gray-700 leading-relaxed">{{ $course->description }}</p>
                                </div>
                            </div>
                        @endif

                        <!-- Document Viewer -->
                        @if($course->course_url)
                            <div>
                                @php
                                    $fileExtension = pathinfo($course->course_url, PATHINFO_EXTENSION);
                                    $fileType = 'Document';
                                    
                                    if (strtolower($fileExtension) === 'pdf') {
                                        $fileType = 'PDF';
                                    } elseif (in_array(strtolower($fileExtension), ['docx', 'doc'])) {
                                        $fileType = 'Word';
                                    } elseif (in_array(strtolower($fileExtension), ['pptx', 'ppt'])) {
                                        $fileType = 'PowerPoint';
                                    } elseif (in_array(strtolower($fileExtension), ['xlsx', 'xls'])) {
                                        $fileType = 'Excel';
                                    }
                                    
                                    $documentUrl = Storage::disk('s3')->temporaryUrl($course->course_url, now()->addMinutes(60));
                                    
                                    // Google Docs Viewer URL
                                    $googleDocsUrl = "https://docs.google.com/viewer?url=" . urlencode($documentUrl) . "&embedded=true";
                                @endphp
                                
                                <h3 class="text-xl font-bold text-gray-900 mb-4">{{ $fileType }}</h3>
                                <div class="bg-white border border-gray-200 rounded-xl overflow-hidden shadow-sm">
                                    <!-- Document Viewer -->
                                    <div class="aspect-[16/9] w-full h-auto">
                                        @if(strtolower($fileExtension) === 'pdf')
                                            <!-- Native PDF Viewer -->
                                            <iframe 
                                                src="{{ $documentUrl }}#toolbar=0" 
                                                class="w-full h-full"
                                                frameborder="0"
                                            ></iframe>
                                        @else
                                            <!-- Google Docs Viewer for other document types -->
                                            <iframe 
                                                src="{{ $googleDocsUrl }}" 
                                                class="w-full h-full"
                                                frameborder="0"
                                                allowfullscreen
                                            ></iframe>
                                        @endif
                                    </div>
                                    
                                    <!-- Document Info -->
                                    <div class="bg-gray-50 p-4">
                                        <div>
                                            <h4 class="font-semibold text-gray-900">{{ $course->title }}</h4>
                                            <p class="text-sm text-gray-600">{{ $fileType }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <!-- Video Player -->
                        @if($course->video_url)
                            <div class="mt-8">
                                <h3 class="text-xl font-bold text-gray-900 mb-4">{{ __('Vidéo') }}</h3>
                                <div class="bg-gray-900 rounded-lg overflow-hidden aspect-video">
                                    <!-- Video Player -->
                                    <video 
                                        class="w-full h-full" 
                                        controls
                                        poster="{{ asset('images/video-poster.jpg') }}"
                                    >
                                        <source src="{{ Storage::disk('s3')->temporaryUrl($course->video_url, now()->addMinutes(60)) }}" type="video/mp4">
                                        {{ __('Votre navigateur ne supporte pas la lecture de vidéos.') }}
                                    </video>
                                </div>
                                
                                <!-- Video Info -->
                                <div class="mt-4 p-4 bg-gray-50 rounded-lg">
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <h4 class="font-semibold text-gray-900">{{ $course->title }}</h4>
                                            <p class="text-sm text-gray-600">{{ __('Vidéo de formation') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            
            <!-- Related Courses -->
            @if($course->coach->courses->where('id', '!=', $course->id)->count() > 0)
                <div class="bg-white rounded-xl shadow-sm p-6 border border-green-100">
                    <h4 class="text-2xl font-bold text-gray-900 mb-6">{{ __('Autres cours de cet intervenant') }}</h4>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach($course->coach->courses->where('id', '!=', $course->id)->take(3) as $relatedCourse)
                            <div class="bg-white border border-gray-200 hover:border-green-300 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 group">
                                <!-- Course Header -->
                                <div class="bg-gradient-to-r from-green-600 to-green-700 p-4 text-white">
                                    <h5 class="font-bold truncate">{{ $relatedCourse->title }}</h5>
                                </div>
                                
                                <!-- Course Body -->
                                <div class="p-6">
                                    <!-- Course Content -->
                                    <div class="mb-4">
                                        @if($relatedCourse->description)
                                            <p class="text-gray-600 text-sm line-clamp-3 mb-4">{{ $relatedCourse->description }}</p>
                                        @else
                                            <p class="text-gray-400 text-sm italic mb-4">{{ __('Pas de description') }}</p>
                                        @endif
                                    </div>
                                    
                                    <!-- Course Type Indicator -->
                                    <div class="flex items-center mb-4">
                                        @if($relatedCourse->course_url)
                                            @php
                                                $fileExtension = pathinfo($relatedCourse->course_url, PATHINFO_EXTENSION);
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
                                        
                                        @if($relatedCourse->video_url)
                                            <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full flex items-center ml-2">
                                                <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                                </svg>
                                                Vidéo
                                            </span>
                                        @endif
                                    </div>
                                    
                                    <!-- Action Button -->
                                    <a href="{{ route('course.show', $relatedCourse) }}" class="w-full bg-green-600 hover:bg-green-700 text-white py-2 px-4 rounded-lg transition-colors flex items-center justify-center font-medium">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                        </svg>
                                        Voir le cours
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
