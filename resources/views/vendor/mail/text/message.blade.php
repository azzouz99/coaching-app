@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        {{ config('app.name') }}
    @endslot

    {{-- Body --}}
    {{ $slot }}

    {{-- Subcopy --}}
    @isset($subcopy)
    @slot('subcopy')
        {{ $subcopy }}
    @endslot
    @endisset

    {{-- Footer --}}
    @slot('footer')
        © {{ date('Y') }} {{ config('app.name') }}. @lang('Tous droits réservés.')
    @endslot
@endcomponent
