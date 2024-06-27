<select id="{{ $id }}"
    class="bg-white border border-gray-400 text-gray-900 text-sm rounded-sm focus:ring-2 focus:ring-offset-2 focus:ring-sti-blue-light focus:border-sti-blue block w-full p-2.5">
    <option class="italic">bitte wählen</option>
    @foreach ($options as $option)
        <option value="{{ $option['value'] }}" @selected($option['value'] == $value)>
            {{ $option['label'] }}
        </option>
    @endforeach
</select>
