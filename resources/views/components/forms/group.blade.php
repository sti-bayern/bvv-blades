<div>
    @if ($label)
        <label for="{{ $id }}"
            class="block mb-2 text-sm font-bold text-gray-900 dark:text-white">{{ $label }}</label>
    @endif

    @switch($element)
        @case('input')
            <x-bvvblades-forms-input :name="$name" :id="$id" :type="$type" :placeholder="$placeholder" :value="$value"  />
        @break

        @case('select')
            <x-bvvblades-forms-select :name="$name" :id="$id" :options="$options" :value="$value" />
        @break

        @case('textarea')
            <x-bvvblades-forms-textarea :name="$name" :id="$id"
                :placeholder="$placeholder">{{ $value }}</x-bvvblades-forms-textarea>
        @break

        @default
    @endswitch

    @if ($helper)
        <p id="helper-{{ $id }}" class="mt-2 text-sm text-gray-500 dark:text-gray-400">
            {{ $helper }}
        </p>
    @endif
    @if ($error)
        <p id="error-{{ $id }}" class="mt-2 text-sm text-red-800 dark:text-gray-400">
            {{ $error }}
        </p>
    @endif

</div>
