<x-app-layout>
  {{-- Header / Hero --}}
  <x-slot name="header">
    <div class="bg-gradient-to-r from-green-600 to-green-800 rounded-lg p-6 text-white">
      <div class="flex items-center justify-between">
        <div>
          <h2 class="font-bold text-2xl">{{ __($user->name) }}</h2>
          <p class="text-green-100 mt-2">{{ __('Gestion des rôles & permissions') }}</p>
        </div>
        <a href="{{ route('users.index') }}"
           class="bg-white/20 hover:bg-white/30 text-white px-4 py-2 rounded-lg transition-colors">
          {{ __('← Retour à la liste') }}
        </a>
      </div>
    </div>
  </x-slot>

  <div class="py-8 bg-gray-50">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

      {{-- Read-only identity --}}
      <div class="bg-white rounded-xl shadow-sm p-6 mb-8 border border-green-100">
        <h3 class="text-lg font-semibold mb-4">{{ __('Utilisateur') }}</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-sm">
          <div>
            <p class="text-gray-500">{{ __('Nom') }}</p>
            <p class="font-medium text-gray-900">{{ $user->name }}</p>
          </div>
          <div>
            <p class="text-gray-500">{{ __('Email') }}</p>
            <p class="font-medium text-gray-900">{{ $user->email }}</p>
          </div>
          <div>
            <p class="text-gray-500">{{ __('Diplôme') }}</p>
            <p class="font-medium text-gray-900">{{ $user->diploma ?? '—' }}</p>
          </div>
        </div>
      </div>

      {{-- === FORM 1: Roles === --}}
      <form method="POST" action="{{ route('users.update-roles', $user) }}"
            class="bg-white rounded-xl shadow-sm p-6 border border-green-100 space-y-6 mb-8">
        @csrf
        @method('PATCH')

        <div class="flex items-center justify-between">
          <h3 class="text-lg font-semibold">{{ __('Rôles') }}</h3>
          <button type="button" data-toggle-group="roles"
                  class="toggle-all text-sm px-3 py-1.5 rounded border border-gray-300 hover:bg-gray-50">
            {{ __('Tout sélectionner / désélectionner') }}
          </button>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3">
          @foreach($roles as $role)
            @php $roleName = is_object($role) ? $role->name : $role; @endphp
            <label class="flex items-center gap-2 p-3 rounded-lg border border-gray-200 hover:border-green-400">
              <input type="checkbox" name="roles[]"
                     value="{{ $roleName }}"
                     data-group="roles"
                     @checked(in_array($roleName, old('roles', $userRoles ?? [])))>
              <span class="text-sm">{{ $roleName }}</span>
            </label>
          @endforeach
        </div>
        @error('roles') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror

        <div class="flex items-center justify-end gap-3 pt-4 border-t">
          <button class="px-5 py-2.5 rounded-lg bg-green-600 text-white hover:bg-green-700">
            {{ __('Enregistrer les rôles') }}
          </button>
        </div>
      </form>

      {{-- === FORM 2: Permissions === --}}
      <form method="POST" action="{{ route('users.update-permissions', $user) }}"
            class="bg-white rounded-xl shadow-sm p-6 border border-green-100 space-y-6">
        @csrf
        @method('PATCH')

        <div class="flex items-center justify-between">
          <h3 class="text-lg font-semibold">{{ __('Permissions directes') }}</h3>
          <button type="button" data-toggle-group="permissions"
                  class="toggle-all text-sm px-3 py-1.5 rounded border border-gray-300 hover:bg-gray-50">
            {{ __('Tout sélectionner / désélectionner') }}
          </button>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3">
          @foreach($permissions as $perm)
            @php $permName = is_object($perm) ? $perm->name : $perm; @endphp
            <label class="flex items-center gap-2 p-3 rounded-lg border border-gray-200 hover:border-green-400">
              <input type="checkbox" name="permissions[]"
                     value="{{ $permName }}"
                     data-group="permissions"
                     @checked(in_array($permName, old('permissions', $userPermissions ?? [])))>
              <span class="text-sm">{{ $permName }}</span>
            </label>
          @endforeach
        </div>
        @error('permissions') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror

        <div class="flex items-center justify-end gap-3 pt-4 border-t">
          <button class="px-5 py-2.5 rounded-lg bg-green-600 text-white hover:bg-green-700">
            {{ __('Enregistrer les permissions') }}
          </button>
        </div>
      </form>

      @if (session('success'))
        <div class="mt-4 rounded-lg border border-green-200 bg-green-50 text-green-800 px-4 py-3">
          {{ session('success') }}
        </div>
      @endif
    </div>
  </div>

  {{-- Toggle helpers (independent per section) --}}
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      document.querySelectorAll('.toggle-all').forEach(btn => {
        btn.addEventListener('click', () => {
          const group = btn.getAttribute('data-toggle-group');
          const boxes = document.querySelectorAll(`input[data-group="${group}"]`);
          const allChecked = Array.from(boxes).every(b => b.checked);
          boxes.forEach(b => b.checked = !allChecked);
        });
      });
    });
  </script>
</x-app-layout>
