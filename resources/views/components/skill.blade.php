@props([
    'logo' => null,
    'label' => '',
])

<div
    class="bg-gray-900/50 backdrop-blur-sm border border-gray-800
           p-4 rounded-md text-center
           flex flex-col items-center gap-2"
>
    @if ($logo)
        <img
            src="{{ asset($logo) }}"
            alt="{{ $label }}"
            class="h-8 w-8 object-contain brightness-0 invert"
        />
    @endif

    <span class="text-xs font-medium text-white">
        {{ __($label) }}
    </span>
</div>
