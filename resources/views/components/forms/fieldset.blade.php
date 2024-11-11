<fieldset
    {{ $attributes->class([
        'flex',
        'col-span-2' => $span == 2
    ]) }}>
    @if ($legend)
        <legend
            class="rounded-t-sm block bg-gray-200 border-x border-t px-2 py-2 font-bold border-gray-200 w-full -py-6 ">
            {{ $legend }}
        </legend>
    @endif
    <div
        {{ $attributes->class([
            'space-y-8 py-6 rounded-b-sm w-full',
            'px-6 border border-gray-200 bg-gray-50' => $type != 'blank',
            'rounded-t-sm' => $legend == '',
        ]) }}>
        {{ $slot }}
    </div>
</fieldset>
