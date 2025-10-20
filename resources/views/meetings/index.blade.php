<x-app-layout>
  <x-slot name="header">
    <div class="bg-gradient-to-r from-green-600 to-green-800 rounded-lg p-6 text-white">
      <div class="flex items-center justify-between gap-4">
        <div>
          <h2 class="font-bold text-2xl">{{ __('اللقاءات الافتراضية') }}</h2>
          <p class="text-green-100 mt-2">{{ __('متابعة اللقاءات المجدولة وروابط Google Meet') }}</p>
        </div>
        <a href="{{ route('meetings.create') }}"
           class="inline-flex items-center px-4 py-2 rounded-lg bg-white text-green-700 font-semibold hover:bg-green-50 transition">
          {{ __('إنشاء لقاء جديد') }}
        </a>
      </div>
    </div>
  </x-slot>

  <div class="py-8 bg-gray-50">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white rounded-xl shadow-sm border border-green-100 p-6">
        @if(session('success'))
          <div class="mb-6 rounded-lg border border-green-200 bg-green-50 px-4 py-3 text-green-800">
            {{ session('success') }}
          </div>
        @endif

        @if($meetings->isEmpty())
          <div class="py-16 text-center text-gray-500">
            <p class="text-lg font-semibold">{{ __('لا توجد لقاءات مجدولة حالياً.') }}</p>
            <p class="mt-2">{{ __('ابدأ بإنشاء أول لقاء لك عبر الضغط على زر إنشاء لقاء جديد.') }}</p>
          </div>
        @else
          <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
              <thead class="bg-green-50">
                <tr>
                  <th class="px-6 py-3 text-right text-xs font-semibold text-gray-600 uppercase tracking-wider">
                    {{ __('الموضوع') }}
                  </th>
                  <th class="px-6 py-3 text-right text-xs font-semibold text-gray-600 uppercase tracking-wider">
                    {{ __('موعد اللقاء') }}
                  </th>
                  <th class="px-6 py-3 text-right text-xs font-semibold text-gray-600 uppercase tracking-wider">
                    {{ __('وقت إرسال البريد') }}
                  </th>
                  <th class="px-6 py-3 text-right text-xs font-semibold text-gray-600 uppercase tracking-wider">
                    {{ __('المستلمون') }}
                  </th>
                  <th class="px-6 py-3 text-right text-xs font-semibold text-gray-600 uppercase tracking-wider">
                    {{ __('الحالة') }}
                  </th>
                </tr>
              </thead>
              <tbody class="bg-white divide-y divide-gray-100">
                @foreach($meetings as $meeting)
                  <tr class="hover:bg-green-50/60">
                    <td class="px-6 py-4 whitespace-nowrap text-right">
                      <div>
                        <p class="font-semibold text-gray-900">{{ $meeting->subject }}</p>
                        <p class="text-sm text-green-600">
                          <a href="{{ $meeting->meet_url }}" target="_blank" rel="noopener"
                             class="hover:underline">
                            {{ __('رابط اللقاء') }}
                          </a>
                        </p>
                      </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-gray-700">
                      {{ optional($meeting->meet_at)->timezone(config('app.timezone'))->format('d/m/Y H:i') }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-gray-700">
                      {{ optional($meeting->email_at)->timezone(config('app.timezone'))->format('d/m/Y H:i') }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-gray-700">
                      {{ trans_choice('{0}لا يوجد مستلمون|{1}مستلم واحد|[2,*]:count مستلمين', $meeting->participants_count, ['count' => $meeting->participants_count]) }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-right">
                      @if($meeting->email_sent_at)
                        <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-semibold bg-green-100 text-green-700 border border-green-300">
                          {{ __('تم الإرسال') }}
                        </span>
                      @else
                        <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-semibold bg-yellow-100 text-yellow-800 border border-yellow-300">
                          {{ __('في الانتظار') }}
                        </span>
                      @endif
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>

          <div class="mt-6">
            {{ $meetings->links() }}
          </div>
        @endif
      </div>
    </div>
  </div>
</x-app-layout>
