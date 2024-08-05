<div 
    {{ $attributes->class([
        'h-64' => $size == 's',
        'h-96' => $size == 'm',
        'h-128' => $size == 'l'
    ]) }}
>
    <img src="{{ $src }}" class="w-full h-full object-cover" alt="{{ $alt }}">
</div>
