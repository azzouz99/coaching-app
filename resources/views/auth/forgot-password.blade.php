<x-guest-layout>
    <h2 class="text-2xl font-bold text-green-600 mb-6 text-center">Réinitialiser le mot de passe</h2>
    
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Mot de passe oublié ? Aucun problème. Indiquez-nous simplement votre adresse e-mail et nous vous enverrons un lien de réinitialisation de mot de passe qui vous permettra d\'en choisir un nouveau.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Adresse Email')" class="text-gray-700 font-medium" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-between mt-6">
            <a href="{{ route('login') }}" class="text-sm text-green-600 hover:text-green-800">
                {{ __('Retour à la connexion') }}
            </a>
            
            <x-primary-button>
                {{ __('Envoyer le Lien') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
