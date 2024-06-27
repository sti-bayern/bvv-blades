
@foreach ($elements as $key => $value)
@if ($value[0] == 'select')
    <x-bvvblades-forms-select-group :name="$key" :id="$key" :options="$options[$key]"
        :value="$item[$key]" :label="$value[1]">
        @if (isset($value[2]))
            <x-slot:helper>
                {!! $value[2] !!}
            </x-slot>
        @endif
        @error($key)
            <x-slot:error>{{ $message }}</x-slot>
        @enderror
    </x-bvvblades-forms-select-group>
@else
    <x-bvvblades-forms-input-group :name="$key" :id="$key" :label="$value[1]"
        value="{{ old($key) ?? $item[$key] }}">
        @if (isset($value[2]))
            <x-slot:helper>
                {!! $value[2] !!}
            </x-slot>
        @endif
        @error($key)
            <x-slot:error>{{ $message }}</x-slot>
        @enderror
    </x-bvvblades-forms-input-group>
@endif
@endforeach