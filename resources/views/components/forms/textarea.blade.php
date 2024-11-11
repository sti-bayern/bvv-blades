<textarea
    {{ $attributes->merge([
        'class' => 'bg-white
                    rounded-sm border border-gray-400
                    form-hover-ring
                    text-gray-900 text-sm text-left
                    block w-full min-h-32 p-2.5
                    transition ease-in-out duration-150',
    ]) }}
    name="{{ $name }}" id="{{ $id }}" placeholder="{{ $placeholder }}">{{ trim($slot) }}</textarea>
