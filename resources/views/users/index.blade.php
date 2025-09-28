<x-app-layout>
  {{-- Header / Hero --}}
  <x-slot name="header">
    <div class="bg-gradient-to-r from-green-600 to-green-800 rounded-lg p-6 text-white">
      <div class="flex items-center justify-between">
        <div>
          <h2 class="font-bold text-2xl">{{ __('Utilisateurs') }}</h2>
          <p class="text-green-100 mt-2">{{ __('Gestion des comptes • rôles • permissions') }}</p>
        </div>
        <div class="flex items-center gap-3">
          <a href="{{ route('dashboard') }}"
             class="bg-white/20 hover:bg-white/30 text-white px-4 py-2 rounded-lg transition-colors">
            {{ __('← Retour au tableau de bord') }}
          </a>
        </div>
      </div>
    </div>
  </x-slot>

  <div class="py-8 bg-gray-50">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white rounded-xl shadow-sm p-6 mb-8 border border-green-100">
        {{-- Search --}}
        <form method="GET" action="{{ route('users.index') }}" class="flex items-center gap-2 mb-6">
          <input name="q" value="{{ request('q') }}"
                 placeholder="{{ __('Rechercher par nom/email…') }}"
                 class="w-64 rounded-lg border-gray-300 focus:border-green-600 focus:ring-green-600">
          <button class="px-4 py-2 rounded-lg bg-green-600 text-white hover:bg-green-700">
            {{ __('Rechercher') }}
          </button>
        </form>

        {{-- Table --}}
        <div class="overflow-x-auto">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-green-50">
              <tr>
                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                  {{ __('Nom') }}
                </th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                  {{ __('Email') }}
                </th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                  {{ __('Diplôme') }}
                </th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                  {{ __('Rôles') }}
                </th>
                <th class="px-6 py-3 text-right text-xs font-semibold text-gray-700 uppercase tracking-wider">
                  {{ __('Actions') }}
                </th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-100">
              @forelse($users as $user)
                <tr class="hover:bg-green-50/60">
                  <td class="px-6 py-4 whitespace-nowrap font-medium text-gray-900">{{ $user->name }}</td>
                  <td class="px-6 py-4 whitespace-nowrap text-gray-700">{{ $user->email }}</td>
                  <td class="px-6 py-4 whitespace-nowrap text-gray-700">{{ $user->diplome ?? '—' }}</td>
                  <td class="px-6 py-4 whitespace-nowrap text-gray-700">
                    @php $roles = method_exists($user, 'getRoleNames') ? $user->getRoleNames()->toArray() : []; @endphp
                    @if(!empty($roles))
                      <div class="flex flex-wrap gap-2">
                        @foreach($roles as $r)
                          <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800 border border-green-300">
                            {{ $r }}
                          </span>
                        @endforeach
                      </div>
                    @else
                      <span class="text-gray-400">{{ __('Aucun rôle') }}</span>
                    @endif
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-right">
                    @canany(['users.manage','roles.manage'])
                      <a href="{{ route('users.edit', $user) }}"
                         class="inline-flex items-center px-3 py-2 rounded-lg bg-white border border-gray-300 hover:border-green-600 hover:text-green-700 shadow-sm">
                        {{ __('Gérer rôles & permissions') }}
                      </a>
                    @endcanany
                  </td>
                </tr>
              @empty
                <tr>
                  <td colspan="5" class="px-6 py-10 text-center text-gray-500">
                    {{ __('Aucun utilisateur trouvé') }}
                  </td>
                </tr>
              @endforelse
            </tbody>
          </table>
        </div>

        @if(method_exists($users, 'links'))
          <div class="pt-4 border-t mt-6">
            {{ $users->withQueryString()->links() }}
          </div>
        @endif
      </div>
    </div>
  </div>
</x-app-layout>
