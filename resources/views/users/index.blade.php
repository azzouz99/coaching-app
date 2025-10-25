<x-app-layout>
  @push('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">
    <style>
      .dataTables_wrapper .dataTables_filter {
        width: 100%;
        margin-bottom: 1rem;
      }
      .dataTables_wrapper .dataTables_filter input {
        width: 100%;
        border-radius: 0.5rem;
        border-color: #d1d5db;
        padding: 0.75rem 1rem;
        margin-left: 0 !important;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
      }
      .dataTables_wrapper .dataTables_filter input:focus {
        border-color: #059669;
        box-shadow: 0 0 0 2px rgba(5, 150, 105, 0.2);
        outline: none;
      }
      .dataTables_wrapper .dataTables_length select {
        border-radius: 0.5rem;
        border-color: #d1d5db;
        padding: 0.5rem 2rem 0.5rem 1rem;
        background-position: right 0.5rem center;
      }
      .dataTables_wrapper .dataTables_paginate .paginate_button {
        border-radius: 0.5rem;
        padding: 0.5rem 1rem;
        margin: 0 0.25rem;
        border: 1px solid #d1d5db;
        background: white;
        transition: all 0.3s ease;
      }
      .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
        background: #f3f4f6 !important;
        border-color: #9ca3af !important;
      }
      .dataTables_wrapper .dataTables_paginate .paginate_button.current {
        background: #059669 !important;
        border-color: #059669 !important;
        color: white !important;
      }
      .dataTables_wrapper .dataTables_processing {
        background: rgba(255, 255, 255, 0.9);
        border-radius: 0.5rem;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      }
      @media (max-width: 640px) {
        .dataTables_wrapper .dataTables_length {
          text-align: left;
          margin-top: 0.5rem;
        }
        .dataTables_wrapper .dataTables_filter {
          text-align: left;
        }
      }
    </style>
  @endpush

  {{-- Header / Hero --}}
  <x-slot name="header">
    <div class="bg-gradient-to-r from-green-600 to-green-800 rounded-lg p-6 text-white">
      <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
        <div>
          <h2 class="font-bold text-2xl text-center sm:text-left">{{ __('Utilisateurs') }}</h2>
          <p class="text-green-100 mt-2 text-center sm:text-left">{{ __('Gestion des comptes • rôles • permissions') }}</p>
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

        @if(session('success'))
          <div class="mb-4 rounded-lg border border-green-200 bg-green-50 px-4 py-3 text-green-800">
            {{ session('success') }}
          </div>
        @endif

        @if(session('error'))
          <div class="mb-4 rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-red-700">
            {{ session('error') }}
          </div>
        @endif

        {{-- Table --}}
        <div class="overflow-x-auto">
          <table id="usersTable" class="min-w-full divide-y divide-gray-200">
            <thead class="bg-green-50">
              <tr>
                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                  {{ __('Nom') }}
                </th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                  {{ __('Email') }}
                </th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                  {{ __('Email vérifié') }}
                </th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                  {{ __('Diplôme') }}
                </th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                  {{ __('Créé le') }}
                </th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                  {{ __('Rôles') }}
                </th>
                <th class="px-6 py-3 text-right text-xs font-semibold text-gray-700 uppercase tracking-wider no-sort">
                  {{ __('Actions') }}
                </th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-100">
              @forelse($users as $user)
                <tr class="hover:bg-green-50/60">
                  <td class="px-6 py-4 whitespace-nowrap font-medium text-gray-900">{{ $user->name }}</td>
                  <td class="px-6 py-4 whitespace-nowrap text-gray-700">{{ $user->email }}</td>
                  <td class="px-6 py-4 whitespace-nowrap text-gray-700">
                    {{ $user->hasVerifiedEmail() ? __('Vérifié') : __('Non vérifié') }}
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-gray-700">{{ $user->diploma ?? '—' }}</td>
                  <td class="px-6 py-4 whitespace-nowrap text-gray-700">
                    {{ $user->created_at->format('d/m/Y') }}  
                  </td>
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
                    <div class="flex items-center justify-end gap-2">
                      @canany(['users.manage','roles.manage'])
                        <a href="{{ route('users.edit', $user) }}"
                           class="inline-flex items-center px-3 py-2 rounded-lg bg-white border border-gray-300 hover:border-green-600 hover:text-green-700 shadow-sm">
                          {{ __('Modifier') }}
                        </a>
                      @endcanany
                      @can('users.manage')
                        <form method="POST" action="{{ route('users.destroy', $user) }}"
                              onsubmit="return confirm('{{ __('Confirmer la suppression de cet utilisateur ?') }}');">
                          @csrf
                          @method('DELETE')
                          <button type="submit"
                                  class="inline-flex items-center px-3 py-2 rounded-lg bg-red-50 text-red-600 border border-red-200 hover:bg-red-100 hover:border-red-300">
                            {{ __('Supprimer') }}
                          </button>
                        </form>
                      @endcan
                    </div>
                  </td>
                </tr>
              @empty
                <tr>
                  <td colspan="6" class="px-6 py-10 text-center text-gray-500">
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

  @push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script>
      $(document).ready(function() {
        let searchTimeout;
        const usersTable = $('#usersTable').DataTable({
          responsive: true,
          processing: true,
          language: {
            url: 'https://cdn.datatables.net/plug-ins/1.11.5/i18n/fr-FR.json',
            searchPlaceholder: "Rechercher un utilisateur...",
            search: "",
            processing: '<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Chargement...</span>'
          },
          columnDefs: [
            { targets: 'no-sort', orderable: false },
            { responsivePriority: 1, targets: 0 },
            { responsivePriority: 2, targets: -1 }
          ],
          order: [[0, 'asc']],
          pageLength: 25,
          dom: '<"flex flex-col sm:flex-row justify-between items-center mb-4"<"flex-1"f><"flex-shrink-0 mt-2 sm:mt-0"l>>rtip',
          drawCallback: function(settings) {
            $('.paginate_button.current').addClass('bg-green-600 text-white');
          },
          initComplete: function() {
            // Style the search input
            $('.dataTables_filter input')
              .addClass('w-full sm:w-64 rounded-lg border-gray-300 focus:border-green-600 focus:ring-green-600 shadow-sm')
              .attr('placeholder', 'Rechercher un utilisateur...');
            
            // Add instant search functionality
            const $searchInput = $('.dataTables_filter input');
            $searchInput.off().on('input', function() {
              clearTimeout(searchTimeout);
              const value = this.value;
              searchTimeout = setTimeout(function() {
                usersTable.search(value).draw();
              }, 300); // 300ms delay for better performance
            });
          }
        });

        // Add responsive search box for mobile
        $('<div class="mb-4 sm:hidden">')
          .prependTo('.dataTables_wrapper')
          .append($('.dataTables_filter'));
      });
    </script>
  @endpush
</x-app-layout>
