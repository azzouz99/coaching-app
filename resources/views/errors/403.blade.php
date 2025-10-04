{{-- resources/views/errors/403.blade.php --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Information') }}
        </h2>
    </x-slot>

    <div class="py-16">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg border border-gray-200">
                <div class="p-8 text-center space-y-6">
                    <div class="flex justify-center">
                        <div class="h-20 w-20 rounded-full bg-green-100 flex items-center justify-center">
                            <svg class="h-10 w-10 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M12 18h.01M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z" />
                            </svg>
                        </div>
                    </div>

                    <h1 class="text-2xl font-bold text-gray-800">
                        {{ __('Merci pour votre intérêt !') }}
                    </h1>
                    <p class="text-lg text-gray-600">
                        {{ __("Vous serez contacté très prochainement pour les cours que vous avez choisis.") }}
                    </p>

                    <div class="flex justify-center">
                        <a href="{{ url('/') }}"
                           class="inline-flex items-center px-5 py-2.5 rounded-lg bg-green-600 text-white hover:bg-green-700">
                            <i class="fas fa-home mr-2"></i> {{ __('Retour à l\'accueil') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
