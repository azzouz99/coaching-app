<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Abonnement Premium') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-2xl font-bold text-green-700 mb-6">Finaliser votre abonnement</h1>
                    
                    <div class="mb-8 p-4 bg-green-50 rounded-lg border border-green-200">
                        <h2 class="text-lg font-semibold text-green-800 mb-2">Résumé de votre achat</h2>
                        <div class="flex justify-between items-center mb-2">
                            <span>Abonnement Premium à vie</span>
                            <span class="font-semibold">49,99 €</span>
                        </div>
                        <div class="border-t border-green-200 pt-2 flex justify-between">
                            <span class="font-semibold">Total</span>
                            <span class="font-semibold">49,99 €</span>
                        </div>
                    </div>

                    <form action="{{ route('subscription.process') }}" method="POST" class="space-y-6">
                        @csrf
                        
                        <div class="bg-gray-50 p-4 rounded-lg border border-gray-200">
                            <h3 class="text-lg font-medium mb-4">Informations de paiement</h3>
                            
                            <!-- Simulation de formulaire de paiement -->
                            <div class="space-y-4">
                                <div>
                                    <label for="card_number" class="block text-sm font-medium text-gray-700 mb-1">Numéro de carte</label>
                                    <input type="text" id="card_number" name="card_number" placeholder="1234 5678 9012 3456" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500">
                                </div>
                                
                                <div class="grid grid-cols-2 gap-4">
                                    <div>
                                        <label for="expiry" class="block text-sm font-medium text-gray-700 mb-1">Date d'expiration</label>
                                        <input type="text" id="expiry" name="expiry" placeholder="MM/AA" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500">
                                    </div>
                                    <div>
                                        <label for="cvc" class="block text-sm font-medium text-gray-700 mb-1">CVC</label>
                                        <input type="text" id="cvc" name="cvc" placeholder="123" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500">
                                    </div>
                                </div>
                                
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nom sur la carte</label>
                                    <input type="text" id="name" name="name" placeholder="John Doe" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500">
                                </div>
                            </div>
                        </div>
                        
                        <div class="text-center">
                            <button type="submit" class="px-6 py-3 bg-green-600 hover:bg-green-700 text-white font-medium rounded-md shadow-sm transition-colors">
                                Payer 49,99 € et s'abonner
                            </button>
                            <p class="mt-2 text-sm text-gray-500">Votre paiement est sécurisé et chiffré</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
