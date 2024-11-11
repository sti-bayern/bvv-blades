<div class="space-y-2">
    @foreach ($options as $key => $option)
        <div class="flex items-center">
            <input id="{{ $id . '_' . $key }}" type="radio" value="{{ $option['value'] }}" name="{{ $name }}"
                @checked($option['value'] == $value) {{-- class="w-4 h-4 text-sti-blue-700 bg-gray-100 border-gray-300 focus:ring-sti-blue-500 focus:ring-2 " --}}
                {{ $attributes->merge([
                    'class' => 'w-4 h-4
                                    text-sti-blue-700
                                    bg-gray-100
                                    border-gray-300
                                    form-hover-ring
                                    hover:cursor-pointer
                                    transition ease-in-out duration-150',
                ]) }} />
            <label for="{{ $id . '_' . $key }}"
                class="ms-2 text-sm font-medium text-gray-900 ">{{ $option['label'] }}</label>
        </div>
    @endforeach
</div>
