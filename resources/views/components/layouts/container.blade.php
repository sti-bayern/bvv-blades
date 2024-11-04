<section class="pb-8 pt-16 px-4 md:px-0">
    <div {{ $attributes->merge([
        'class' => 'max-w-5xl mx-auto',
    ]) }}>
        {{ $slot }}
    </div>
</section>
