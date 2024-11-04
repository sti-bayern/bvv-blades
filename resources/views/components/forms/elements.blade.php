@foreach ($elements as $key => $value)
    <x-bvvblades-forms-group
        :element="$value['element']"
        :name="$key"
        :id="$key"
        :options="$value['options']"
        :value="$value['value']"
        :checked="$value['checked']"
        :label="$value['label']">
        @if ($value['helper'])
            <x-slot:helper>{!! $value['helper'] !!}</x-slot>
        @endif
        @error($key)
            <x-slot:error>{{ $message }}</x-slot>
        @enderror
    </x-bvvblades-forms-group>
@endforeach
