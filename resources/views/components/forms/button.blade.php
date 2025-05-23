@empty($link)
    <button
        {{ $attributes->merge([
            'type' => 'button',
            'class' => 'bg-sti-blue-700
                            rounded-sm border-0
                            form-hover-ring
                            text-gray-100
                            p-2
                            transition ease-in-out duration-150',
        ]) }}>

        @if ($slot->isEmpty())
            Abschicken
        @else
            {{ $slot }}
        @endif

    </button>
@else
    <a href="{{ $link }}"
        {{ $attributes->merge([
            'class' =>
                'inline-block bg-sti-blue-700 cursor-pointer hover:ring-4 hover:ring-offset-1 hover:ring-gray-300 p-2 text-white transition ease-in-out duration-150',
        ]) }}>
        @if ($slot->isEmpty())
            Abschicken
        @else
            {{ $slot }}
        @endif
    </a>
@endempty
