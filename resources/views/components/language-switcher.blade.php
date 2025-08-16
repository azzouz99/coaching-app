
@php
  $current = app()->getLocale();
  $locales = [ 'fr' => 'Français', 'ar' => 'العربية'];
@endphp

<div x-data="{ open: false }" class="relative">
    <button
        @click="open = !open"
        class="flex items-center px-3 py-2 rounded-lg border border-gray-200 bg-white text-sm font-medium text-gray-700 hover:bg-green-50 hover:text-green-700 transition"
        aria-label="Change language"
    >
        <svg class="w-4 h-4 mr-2 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 3v2m0 14v2m9-9h-2M5 12H3m15.364-6.364l-1.414 1.414M6.05 17.95l-1.414 1.414M17.95 17.95l-1.414-1.414M6.05 6.05L4.636 4.636M12 7a5 5 0 100 10 5 5 0 000-10z" />
        </svg>
        {{ strtoupper($current) }}
        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
        </svg>
    </button>
    <div
        x-show="open"
        @click.outside="open = false"
        x-transition
        class="absolute right-0 mt-2 w-36 bg-white border border-gray-200 shadow-lg rounded-lg z-50"
    >
        @foreach($locales as $code => $label)
            <a href="{{ route('locale.switch', $code) }}"
               class="block px-4 py-2 text-sm text-gray-700 hover:bg-green-50 hover:text-green-700 transition {{ $current === $code ? 'font-semibold text-green-600' : '' }}">
                {{ $label }}
            </a>
        @endforeach
    </div>
</div>