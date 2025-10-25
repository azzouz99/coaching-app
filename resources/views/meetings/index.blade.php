<x-app-layout>
  <x-slot name="header">
    <div class="bg-gradient-to-r from-green-600 to-green-800 rounded-lg p-6 text-white">
      <div class="flex items-center justify-between gap-4">
        <div>
          <h2 class="font-bold text-2xl">{{ __('Réunions Virtuelles') }}</h2>
          <p class="text-green-100 mt-2">{{ __('Suivi des réunions planifiées et liens Google Meet') }}</p>
        </div>
        @if (auth()->user()?->hasRole('admin'))
          <a href="{{ route('meetings.create') }}"
           class="inline-flex items-center px-4 py-2 rounded-lg bg-white text-green-700 font-semibold hover:bg-green-50 transition">
          {{ __('Créer une nouvelle réunion') }}
        </a>
        @endif

      </div>
    </div>
  </x-slot>

  @php
    $isAdmin = auth()->user()?->hasRole('admin');
  @endphp

  <div class="py-8 bg-gray-50">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white rounded-xl shadow-sm border border-green-100 p-6">
        @if(session('success'))
          <div class="mb-6 rounded-lg border border-green-200 bg-green-50 px-4 py-3 text-green-800">
            {{ session('success') }}
          </div>
        @endif

        @if($meetings->isEmpty())
          @if($isAdmin)
          <div class="py-16 text-center text-gray-500">
            <p class="text-lg font-semibold">{{ __('Aucune réunion planifiée.') }}</p>
            <p class="mt-2">{{ __('Commencez par créer votre première réunion en cliquant sur le bouton créer une nouvelle réunion.') }}</p>
          </div>
          @endif
        @else
          @if($isAdmin)
            <div class="hidden md:block overflow-hidden rounded-2xl border border-green-100 shadow-sm">
              <table class="min-w-full divide-y divide-gray-200 text-sm">
                <thead class="bg-green-600/90 text-white">
                  <tr>
                    <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-widest">
                      {{ __('Sujet') }}
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-widest">
                      {{ __('Date de réunion') }}
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-widest">
                      {{ __('Heure d\'envoi email') }}
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-widest">
                      {{ __('Destinataires') }}
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-widest">
                      {{ __('Statut') }}
                    </th>
                  </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-100">
                  @foreach($meetings as $meeting)
                    <tr class="hover:bg-green-50/60 transition">
                      <td class="px-6 py-4">
                        <p class="font-semibold text-gray-900">{{ $meeting->subject }}</p>
                        @if($meeting->meet_url)
                          <a href="{{ $meeting->meet_url }}" target="_blank" rel="noopener"
                             class="inline-flex text-xs font-semibold text-green-700 hover:text-green-900 hover:underline">
                            {{ __('Lien de réunion') }}
                          </a>
                        @else
                          <span class="text-xs text-gray-500">{{ __('Lien non disponible') }}</span>
                        @endif
                      </td>
                      <td class="px-6 py-4 text-gray-700 whitespace-nowrap">
                        {{ optional($meeting->meet_at)->timezone(config('app.timezone'))->format('d/m/Y H:i') }}
                      </td>
                      <td class="px-6 py-4 text-gray-700 whitespace-nowrap">
                        {{ optional($meeting->email_at)->timezone(config('app.timezone'))->format('d/m/Y H:i') }}
                      </td>
                      <td class="px-6 py-4 text-gray-700 whitespace-nowrap">
                        {{ trans_choice('{0}Aucun destinataire|{1}Un destinataire|[2,*]:count destinataires', $meeting->participants_count, ['count' => $meeting->participants_count]) }}
                      </td>
                      <td class="px-6 py-4">
                        @if($meeting->email_sent_at)
                          <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold bg-green-100 text-green-700 border border-green-200">
                            <span class="h-2 w-2 rounded-full bg-green-500"></span>
                            {{ __('Envoyé') }}
                          </span>
                        @else
                          <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold bg-yellow-100 text-yellow-800 border border-yellow-200">
                            <span class="h-2 w-2 rounded-full bg-yellow-500"></span>
                            {{ __('En attente') }}
                          </span>
                        @endif
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <div class="space-y-4 md:hidden">
              @foreach($meetings as $meeting)
                <div class="rounded-2xl border border-green-100 bg-white p-5 shadow-sm">
                  <div class="flex flex-wrap items-start justify-between gap-3">
                    <div>
                      <p class="text-xs font-semibold uppercase tracking-wider text-green-600">{{ __('Sujet') }}</p>
                      <p class="mt-1 text-base font-semibold text-gray-900">{{ $meeting->subject }}</p>
                      @if($meeting->meet_url)
                        <a href="{{ $meeting->meet_url }}" target="_blank" rel="noopener"
                           class="mt-2 inline-flex text-xs font-semibold text-green-700 hover:text-green-900 hover:underline">
                          {{ __('Lien de réunion') }}
                        </a>
                      @else
                        <p class="mt-2 text-xs text-gray-500">{{ __('Lien non disponible') }}</p>
                      @endif
                    </div>
                    <div>
                      @if($meeting->email_sent_at)
                        <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold bg-green-100 text-green-700 border border-green-200">
                          <span class="h-2 w-2 rounded-full bg-green-500"></span>
                          {{ __('EnvoyAc') }}
                        </span>
                      @else
                        <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold bg-yellow-100 text-yellow-800 border border-yellow-200">
                          <span class="h-2 w-2 rounded-full bg-yellow-500"></span>
                          {{ __('En attente') }}
                        </span>
                      @endif
                    </div>
                  </div>

                  <dl class="mt-4 space-y-3 text-sm text-gray-600">
                    <div class="flex items-center justify-between gap-4">
                      <dt class="font-medium text-gray-500">{{ __('Date de réunion') }}</dt>
                      <dd class="text-right text-gray-900">
                        @if($meeting->meet_at)
                          {{ $meeting->meet_at->timezone(config('app.timezone'))->format('d/m/Y H:i') }}
                        @else
                          <span class="text-gray-500">{{ __('Non planifiAce') }}</span>
                        @endif
                      </dd>
                    </div>
                    <div class="flex items-center justify-between gap-4">
                      <dt class="font-medium text-gray-500">{{ __('Heure d\'envoi email') }}</dt>
                      <dd class="text-right text-gray-900">
                        @if($meeting->email_at)
                          {{ $meeting->email_at->timezone(config('app.timezone'))->format('d/m/Y H:i') }}
                        @else
                          <span class="text-gray-500">{{ __('Non planifiAce') }}</span>
                        @endif
                      </dd>
                    </div>
                    <div class="flex items-center justify-between gap-4">
                      <dt class="font-medium text-gray-500">{{ __('Destinataires') }}</dt>
                      <dd class="text-right text-gray-900">
                        {{ trans_choice('{0}Aucun destinataire|{1}Un destinataire|[2,*]:count destinataires', $meeting->participants_count, ['count' => $meeting->participants_count]) }}
                      </dd>
                    </div>
                  </dl>
                </div>
              @endforeach
            </div>
          @else
            <div class="space-y-4">
              <div class="rounded-2xl border border-green-100 bg-gradient-to-b from-white via-white to-green-50/60 shadow-sm">
                <div class="p-6 border-b border-green-100">
                  <h3 class="text-lg font-semibold text-gray-900">{{ __('Vos réunions à venir') }}</h3>
                  <p class="text-sm text-gray-500 mt-1">
                    {{ __('Un résumé clair du sujet, de la date et du lien Google Meet.') }}
                  </p>
                </div>
                <div class="hidden md:block px-6 pb-6">
                  <div class="overflow-x-auto rounded-xl border border-green-100">
                    <table class="min-w-full text-sm text-gray-700">
                      <thead class="bg-green-600 text-white text-xs uppercase tracking-widest">
                        <tr>
                          <th class="px-6 py-3 text-left font-semibold">{{ __('Sujet') }}</th>
                          <th class="px-6 py-3 text-left font-semibold">{{ __('Date de réunion') }}</th>
                          <th class="px-6 py-3 text-left font-semibold">{{ __('Lien de réunion') }}</th>
                        </tr>
                      </thead>
                      <tbody class="bg-white divide-y divide-green-50">
                        @foreach($meetings as $meeting)
                          <tr class="hover:bg-green-50/80 transition">
                            <td class="px-6 py-4">
                              <p class="font-semibold text-gray-900">{{ $meeting->subject }}</p>
                              <p class="text-xs text-gray-500">{{ __('Organisé par votre accompagnateur') }}</p>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                              @if($meeting->meet_at)
                                {{ $meeting->meet_at->timezone(config('app.timezone'))->format('d/m/Y H:i') }}
                              @else
                                <span class="text-xs text-gray-500">{{ __('Non planifiée') }}</span>
                              @endif
                            </td>
                            <td class="px-6 py-4">
                              @if($meeting->meet_url)
                                <a href="{{ $meeting->meet_url }}" target="_blank" rel="noopener"
                                   class="inline-flex items-center gap-2 rounded-full bg-green-600 px-4 py-2 text-xs font-semibold text-white shadow hover:bg-green-700 transition">
                                  {{ __('Rejoindre la réunion') }}
                                </a>
                                <p class="mt-1 text-[11px] text-gray-400 break-all">
                                  {{ \Illuminate\Support\Str::limit($meeting->meet_url, 50) }}
                                </p>
                              @else
                                <span class="text-xs text-gray-500">{{ __('Lien non disponible') }}</span>
                              @endif
                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>

                <div class="space-y-4 px-6 py-5 md:hidden">
                  @foreach($meetings as $meeting)
                    <div class="rounded-2xl border border-green-100 bg-white p-5 shadow-sm">
                      <div>
                        <p class="text-xs font-semibold uppercase tracking-widest text-green-600">{{ __('Sujet') }}</p>
                        <p class="mt-1 text-base font-semibold text-gray-900">{{ $meeting->subject }}</p>
                        <p class="text-xs text-gray-500">{{ __('Organisé par votre accompagnateur') }}</p>
                      </div>
                      <div class="mt-4 space-y-2 text-sm text-gray-600">
                        <div class="flex items-start justify-between gap-4">
                          <span class="font-medium text-gray-500">{{ __('Date de réunion') }}</span>
                          <span class="text-right text-gray-900">
                            @if($meeting->meet_at)
                              {{ $meeting->meet_at->timezone(config('app.timezone'))->format('d/m/Y H:i') }}
                            @else
                              <span class="text-gray-500">{{ __('Non planifiAce') }}</span>
                            @endif
                          </span>
                        </div>
                        <div class="flex items-start justify-between gap-4">
                          <span class="font-medium text-gray-500">{{ __('Lien de réunion') }}</span>
                          <span class="text-right text-gray-900">
                            @if($meeting->meet_url)
                              <a href="{{ $meeting->meet_url }}" target="_blank" rel="noopener"
                                 class="inline-flex items-center gap-1 text-xs font-semibold text-green-700 hover:text-green-900 hover:underline">
                                {{ __('Ouvrir') }}
                              </a>
                            @else
                              <span class="text-gray-500">{{ __('Lien non disponible') }}</span>
                            @endif
                          </span>
                        </div>
                      </div>
                      <div class="mt-4">
                        @if($meeting->meet_url)
                          <a href="{{ $meeting->meet_url }}" target="_blank" rel="noopener"
                             class="inline-flex w-full items-center justify-center gap-2 rounded-full bg-green-600 px-4 py-2 text-xs font-semibold text-white shadow hover:bg-green-700 transition">
                            {{ __('Rejoindre la réunion') }}
                          </a>
                        @else
                          <span class="text-xs text-gray-500">{{ __('Lien non disponible') }}</span>
                        @endif
                      </div>
                    </div>
                  @endforeach
                </div>
              </div>
            </div>
          @endif

          <div class="mt-6">
            {{ $meetings->links() }}
          </div>
        @endif
      </div>
    </div>
  </div>
</x-app-layout>
