<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Abonnement Réussi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 text-center">
                    <div class="mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-green-500 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    
                    <h1 class="text-3xl font-bold text-green-700 mb-4">Merci pour votre abonnement !</h1>
                    
                    <p class="text-lg mb-6">Votre paiement a été traité avec succès. Vous avez maintenant accès à toutes les vidéos de coaching.</p>
                    
                    <div class="mb-8 p-4 bg-green-50 rounded-lg border border-green-200 max-w-md mx-auto">
                        <h2 class="text-lg font-semibold text-green-800 mb-2">Détails de votre abonnement</h2>
                        <ul class="text-left space-y-2">
                            <li class="flex justify-between">
                                <span>Statut:</span>
                                <span class="font-semibold text-green-600">Actif</span>
                            </li>
                            <li class="flex justify-between">
                                <span>Type:</span>
                                <span>Premium à vie</span>
                            </li>
                            <li class="flex justify-between">
                                <span>Date d'achat:</span>
                                <span>{{ date('d/m/Y') }}</span>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="flex flex-col sm:flex-row justify-center gap-4">
                        <a href="{{ route('dashboard') }}" class="inline-block px-6 py-3 bg-green-600 hover:bg-green-700 text-white font-medium rounded-md shadow-sm transition-colors">
                            Accéder à votre tableau de bord
                        </a>
                        <a href="/videos" class="inline-block px-6 py-3 bg-white border border-green-600 hover:bg-green-50 text-green-600 font-medium rounded-md shadow-sm transition-colors">
                            Voir les vidéos
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
