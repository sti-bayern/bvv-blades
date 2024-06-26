@empty($link)
    <button
        {{ $attributes->merge([
            'type' => 'button',
            'class' =>
                'bg-sti-blue hover:ring-4 hover:ring-offset-1 hover:ring-gray-400 p-2 text-white transition ease-in-out duration-150',
        ]) }}>

        @if ($slot->isEmpty())
            Abschicken
        @else
            {{ $slot }}
        @endif

    </button>
@else
    <a href="{{ $link }}"
        class="inline-block bg-sti-blue cursor-pointer hover:ring-4 hover:ring-offset-1 hover:ring-gray-400 p-2 text-white transition ease-in-out duration-150">
        @if ($slot->isEmpty())
            Abschicken
        @else
            {{ $slot }}
        @endif
    </a>
@endempty