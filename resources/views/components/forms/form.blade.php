<form method="{{ $form_method }}" action="{{ $action }}" enctype="multipart/form-data"
    {{ $attributes->class([
        '',
        'grid grid-cols-2 gap-4 space-y-4' => !$attributes->has('no_grid'),
    ]) }} >
    @csrf
    @method($method)
    {{ $slot }}
</form>
