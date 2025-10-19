<x-app-layout>
  <x-slot name="header">
    <div class="bg-gradient-to-r from-green-600 to-green-800 rounded-lg p-6 text-white">
      <div class="flex items-center justify-between gap-4">
        <div>
          <h2 class="font-bold text-2xl">{{ __('إنشاء لقاء جديد') }}</h2>
          <p class="text-green-100 mt-2">{{ __('أرسل رابط Google Meet للمشتركين في الوقت المناسب') }}</p>
        </div>
        <a href="{{ route('meetings.index') }}"
           class="inline-flex items-center px-4 py-2 rounded-lg bg-white text-green-700 font-semibold hover:bg-green-50 transition">
          {{ __('العودة إلى قائمة اللقاءات') }}
        </a>
      </div>
    </div>
  </x-slot>

  <div class="py-8 bg-gray-50">
    <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white rounded-xl shadow-sm border border-green-100 p-6">
        <form method="POST" action="{{ route('meetings.store') }}" class="space-y-8">
          @csrf

          <div>
            <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">
              {{ __('موضوع اللقاء') }}
            </label>
            <input id="subject" name="subject" type="text"
                   value="{{ old('subject') }}"
                   class="w-full rounded-lg border-gray-300 focus:border-green-600 focus:ring-green-600"
                   placeholder="{{ __('مثال: جلسة المتابعة الأسبوعية') }}">
            @error('subject')
              <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
          </div>

          <div>
            <label for="meet_url" class="block text-sm font-medium text-gray-700 mb-2">
              {{ __('رابط Google Meet') }}
            </label>
            <input id="meet_url" name="meet_url" type="url"
                   value="{{ old('meet_url') }}"
                   class="w-full rounded-lg border-gray-300 focus:border-green-600 focus:ring-green-600"
                   placeholder="https://meet.google.com/...">
            @error('meet_url')
              <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
          </div>

          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
              <label for="email_at" class="block text-sm font-medium text-gray-700 mb-2">
                {{ __('وقت إرسال البريد') }}
              </label>
              <input id="email_at" name="email_at" type="datetime-local"
                     value="{{ old('email_at') }}"
                     class="w-full rounded-lg border-gray-300 focus:border-green-600 focus:ring-green-600">
              <p class="mt-2 text-sm text-gray-500">
                {{ __('سيتم إرسال البريد الإلكتروني تلقائياً في هذا الوقت.') }}
              </p>
              @error('email_at')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
              @enderror
            </div>

            <div>
              <label for="meet_at" class="block text-sm font-medium text-gray-700 mb-2">
                {{ __('موعد اللقاء') }}
              </label>
              <input id="meet_at" name="meet_at" type="datetime-local"
                     value="{{ old('meet_at') }}"
                     class="w-full rounded-lg border-gray-300 focus:border-green-600 focus:ring-green-600">
              <p class="mt-2 text-sm text-gray-500">
                {{ __('يظهر للمشاركين داخل البريد كموعد اللقاء.') }}
              </p>
              @error('meet_at')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
              @enderror
            </div>
          </div>

          <div>
            <label for="user_ids" class="block text-sm font-medium text-gray-700 mb-2">
              {{ __('اختر المستلمين') }}
            </label>
            <select id="user_ids" name="user_ids[]" multiple
                    class="w-full rounded-lg border-gray-300 focus:border-green-600 focus:ring-green-600 h-48">
              @foreach($users as $user)
                <option value="{{ $user->id }}"
                  @selected(collect(old('user_ids', []))->contains($user->id))>
                  {{ $user->name }} — {{ $user->email }}
                </option>
              @endforeach
            </select>
            <p class="mt-2 text-sm text-gray-500">
              {{ __('قم باختيار مستخدم أو أكثر لإرسال الدعوة.') }}
            </p>
            @error('user_ids')
              <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
            @error('user_ids.*')
              <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
          </div>

          <div class="flex items-center justify-end gap-3">
            <a href="{{ route('meetings.index') }}"
               class="px-4 py-2 rounded-lg border border-gray-300 text-gray-700 hover:bg-gray-100">
              {{ __('إلغاء') }}
            </a>
            <button type="submit"
                    class="px-5 py-2.5 rounded-lg bg-green-600 text-white font-semibold hover:bg-green-700">
              {{ __('حفظ اللقاء') }}
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</x-app-layout>

