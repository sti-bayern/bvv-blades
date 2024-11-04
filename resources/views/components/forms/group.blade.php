@if (in_array($element, ['input', 'select', 'textarea', 'radio', 'upload']))
    <div>
        @if ($label)
            <label for="{{ $id }}"
                class="block mb-2 text-sm font-bold text-gray-900 dark:text-white">{{ $label }}</label>
        @endif
        @switch($element)
            @case('input')
                <x-bvvblades-forms-input :name="$name" :id="$id" :type="$type" :placeholder="$placeholder"
                    :value="$value" />
            @break

            @case('select')
                <x-bvvblades-forms-select :name="$name" :id="$id" :options="$options" :value="$value" />
            @break

            @case('radio')
                <x-bvvblades-forms-radio :name="$name" :id="$id" :options="$options" :value="$value" />
            @break

            @case('textarea')
                <x-bvvblades-forms-textarea :name="$name" :id="$id"
                    :placeholder="$placeholder">{{ $value ?? $slot }}</x-bvvblades-forms-textarea>
            @break

            @case('upload')
                <x-bvvblades-forms-upload :name="$name" :id="$id" />
            @break
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
@elseif (in_array($element, ['checkbox']))
    <div class="flex items-center">
        <div class="flex items-center h-5">
            <x-bvvblades-forms-input :name="$name" type="hidden" value="0" />
            <x-bvvblades-forms-checkbox :name="$name" :id="$id" value="1" :checked="$checked" />
        </div>
        <div class="ms-2">
            <label for="{{ $id }}" class="text-gray-800 hover:cursor-pointer">{{ $label == '' ? $name : $label }}</label>
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
    </div>

@endif
