<body class="font-sans antialiased">

    <x-bvvblades::layouts.navigation />

    <header class="bg-sti-blue-light">
        <section class="max-w-5xl mx-auto py-2" v-if="$slots.breadcrumb">
            Brotkrumen
        </section>
        
        <div class="max-w-5xl mx-auto pt-12 pb-8">
            <h1 class="font-semibold text-4xl text-sti-blue leading-tight">
                <slot name="header">Titel</slot>
            </h1>
        </div>

    </header>
    
    <section class="pb-8 pt-16">
        <div class="max-w-5xl mx-auto">
            {{ $slot }}
        </div>
    </section>


</body>
