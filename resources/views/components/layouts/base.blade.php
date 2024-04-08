<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <x-bvvblades::layouts.head />

    <x-bvvblades::layouts.body>
        {{ $slot }}
    </x-bvvblades::layouts.body>

</html>