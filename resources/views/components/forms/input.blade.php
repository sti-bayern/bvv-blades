<input
    class="bg-white border border-gray-400 text-gray-900 text-sm rounded-sm focus:ring-2 focus:ring-offset-2 focus:ring-sti-blue-light focus:border-sti-blue block w-full p-2.5"
    name="{{ $name }}" id="{{ $id }}" type="{{ $type }}" placeholder="{{ $placeholder }}" 
    {{ $attributes->merge([
        'value' => '',
    ]) }} />
