<!-- Stats Cards -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 ">
    <div class="bg-white rounded-2xl shadow-sm p-6 border border-gray-200 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
        <div class="flex items-center">
            <div class="p-4 rounded-2xl bg-gradient-to-br from-blue-500 to-blue-600 ltr:mr-4 rtl:ml-4 shadow-lg">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                </svg>
            </div>
            <div>
                <p class="text-gray-600 text-sm font-medium">{{ __('Total Intervenants') }}</p>
                <p class="text-3xl font-bold text-gray-900">{{ $totalCoaches }}</p>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-2xl shadow-sm p-6 border border-gray-200 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
        <div class="flex items-center">
            <div class="p-4 rounded-2xl bg-gradient-to-br from-green-500 to-green-600 ltr:mr-4 rtl:ml-4 shadow-lg">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                </svg>
            </div>
            <div>
                <p class="text-gray-600 text-sm font-medium">{{ __('Vidéos Disponibles') }}</p>
                <p class="text-3xl font-bold text-gray-900">{{ $videosAvailable }}</p>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-2xl shadow-sm p-6 border border-gray-200 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
        <div class="flex items-center">
            <div class="p-4 rounded-2xl bg-gradient-to-br from-purple-500 to-purple-600 ltr:mr-4 rtl:ml-4 shadow-lg">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                </svg>
            </div>
            <div>
                <p class="text-gray-600 text-sm font-medium">{{ __('Programmes Actifs') }}</p>
                <p class="text-3xl font-bold text-gray-900">{{ $activePrograms }}</p>
            </div>
        </div>
    </div>
</div>
