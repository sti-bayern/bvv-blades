<input
    {{ $attributes->merge([
        'class' =>
            'block w-full text-sm text-gray-900 border border-gray-300 rounded-sm cursor-pointer bg-gray-50 focus:outline-none',
    ]) }}
    name="{{ $name }}" id="{{ $id }}" type="file">
