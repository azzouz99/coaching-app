<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Période d\'essai gratuit activée') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          @if(session('status'))
            <div class="mb-6 p-4 bg-green-50 border border-green-200 text-green-700 rounded-lg">
              {{ session('status') }}
            </div>
          @endif

          <div class="bg-green-50 border-l-4 border-green-400 p-4 mb-6 rounded-r-lg">
            <div class="flex">
              <div class="flex-shrink-0">
                <svg class="h-5 w-5 text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
              </div>
              <div class="ml-3">
                <h3 class="text-lg font-medium text-green-800">Félicitations!</h3>
                <div class="mt-2 text-green-700">
                  <p>Votre période d'essai gratuit de 3 mois est maintenant active.</p>
                </div>
              </div>
            </div>
          </div>

          <h3 class="text-lg font-semibold mb-4">Détails de votre abonnement</h3>
          <div class="mb-6 space-y-3">
            <div class="flex justify-between border-b pb-2">
              <span class="text-gray-600">Type d'abonnement:</span>
              <span class="font-medium">Période d'essai gratuit</span>
            </div>
            <div class="flex justify-between border-b pb-2">
              <span class="text-gray-600">Durée:</span>
              <span class="font-medium">3 mois</span>
            </div>
            <div class="flex justify-between border-b pb-2">
              <span class="text-gray-600">Début de la période:</span>
              <span class="font-medium">{{ now()->format('d/m/Y') }}</span>
            </div>
            <div class="flex justify-between">
              <span class="text-gray-600">Fin de la période d'essai:</span>
              <span class="font-medium">{{ now()->addMonths(3)->format('d/m/Y') }}</span>
            </div>
          </div>

          <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 mb-6 rounded-r-lg">
            <div class="flex">
              <div class="flex-shrink-0">
                <svg class="h-5 w-5 text-yellow-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                </svg>
              </div>
              <div class="ml-3">
                <h3 class="text-lg font-medium text-yellow-800">Information importante</h3>
                <div class="mt-2 text-yellow-700">
                  <p>À la fin de votre période d'essai, votre abonnement sera automatiquement converti en abonnement payant, sauf si vous l'annulez avant la date d'échéance.</p>
                </div>
              </div>
            </div>
          </div>

          <h3 class="text-lg font-semibold mb-4">Que pouvez-vous faire maintenant?</h3>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
            <a href="{{ route('dashboard') }}" class="flex items-center p-4 bg-gray-50 hover:bg-gray-100 rounded-lg transition">
              <div class="p-2 rounded-full bg-green-100 mr-3">
                <svg class="h-6 w-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
              </div>
              <div>
                <h4 class="font-medium">Accéder au tableau de bord</h4>
                <p class="text-sm text-gray-600">Explorez toutes les fonctionnalités de la plateforme</p>
              </div>
            </a>
            <a href="#" class="flex items-center p-4 bg-gray-50 hover:bg-gray-100 rounded-lg transition">
              <div class="p-2 rounded-full bg-blue-100 mr-3">
                <svg class="h-6 w-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                </svg>
              </div>
              <div>
                <h4 class="font-medium">Découvrir les cours</h4>
                <p class="text-sm text-gray-600">Parcourez notre bibliothèque de contenu</p>
              </div>
            </a>
          </div>

          <div class="text-center mt-8">
            <p class="text-gray-600 mb-4">Des questions sur votre abonnement?</p>
            <a href="#" class="inline-flex items-center px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-800 rounded-lg transition">
              <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              Contactez-nous
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
