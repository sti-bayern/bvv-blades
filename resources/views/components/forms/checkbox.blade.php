<input id="{{ $id }}" name="{{ $name }}" type="checkbox" value="{{ $value }}"
    @checked($checked)
    {{ $attributes->merge([
        'class' => 'w-4 h-4
                        text-sti-blue-700
                        bg-gray-100
                        border-gray-300 rounded-sm
                        form-hover-ring
                        hover:cursor-pointer
                        transition ease-in-out duration-150',
    ]) }}
     />
