<input
    {{ $attributes->merge([
        'value' => '',
        'class' => 'bg-white
                        rounded-sm border border-gray-400
                        form-hover-ring
                        text-gray-900 text-sm text-left
                        block w-full p-2.5
                        transition ease-in-out duration-150',
    ]) }}
    name="{{ $name }}" id="{{ $id }}" type="{{ $type }}" placeholder="{{ $placeholder }}" />
