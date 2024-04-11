<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <x-bvvblades::layouts.head />

    <x-bvvblades::layouts.body :title="$title" :breadcrumbs="$breadcrumbs">
        {{ $slot }}
    </x-bvvblades::layouts.body>

</html>