@foreach ($elements as $key => $value)
    <x-bvvblades-forms-group 
        :element="$value[0]" 
        :name="$key" 
        :id="$key" 
        :options="(isset($options[$key]) ? $options[$key] : [])" 
        value="{{ old($key) ?? $item[$key] }}"
        :label="$value[1]">
        @if (isset($value[2]))
            <x-slot:helper>
                {!! $value[2] !!}
            </x-slot>
        @endif
        @error($key)
            <x-slot:error>{{ $message }}</x-slot>
        @enderror
    </x-bvvblades-forms-group>
@endforeach
