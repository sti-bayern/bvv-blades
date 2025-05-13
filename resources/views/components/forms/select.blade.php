<select id="{{ $id }}" name="{{ $name }}"
    {{ $attributes->merge([
        'class' => 'bg-white
                rounded-sm border border-gray-400
                form-hover-ring
                text-gray-900 text-sm text-left
                block w-full p-2.5
                transition ease-in-out duration-150',
    ]) }}>
    {{-- class="bg-white border border-gray-400 text-gray-900 text-sm rounded-sm focus:ring-2 focus:ring-offset-2 focus:ring-sti-blue-50 focus:border-sti-blue-700 block w-full p-2.5"> --}} <option class="italic">bitte wählen</option>
    @foreach ($options as $option)
        <option value="{{ $option['value'] }}" @selected($option['value'] == $value)>
            {{ $option['label'] }}
        </option>
    @endforeach
</select>
