<div class="space-y-2">
    @foreach ($options as $key => $option)
        <div class="flex items-center">
            <input id="{{ $id . '_' . $key }}" type="radio" value="{{ $option['value'] }}" name="{{ $name }}" @checked($option['value'] == $value)
                class="w-4 h-4 text-sti-blue bg-gray-100 border-gray-300 focus:ring-sti-blue focus:ring-2 ">
            <label for="{{ $id . '_' . $key }}"
                class="ms-2 text-sm font-medium text-gray-900 ">{{ $option['label'] }}</label>
        </div>
    @endforeach
</div>
