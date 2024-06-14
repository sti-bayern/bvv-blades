<div>
    @if ($label)
        <label for="helper-text"
            class="block mb-2 text-sm font-bold text-gray-900 dark:text-white">{{ $label }}</label>
    @endif
    {{-- <input type="email" id="helper-text" aria-describedby="helper-text-explanation"
    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
    placeholder="name@flowbite.com"> --}}

    <x-bvvblades-forms-input :name="$name" :type="$type" :placeholder="$placeholder"
        {{ $attributes->merge([
            'value' => '',
        ]) }} />

    {{-- ::{{ $type }}:: --}}
    @if ($helper)
        <p id="helper-text-explanation" class="mt-2 text-sm text-gray-500 dark:text-gray-400">
            {{ $helper }}
        </p>
    @endif
    @if ($error)
        <p id="helper-text-explanation" class="mt-2 text-sm text-red-800 dark:text-gray-400">
            {{ $error }}
        </p>
    @endif

</div>
