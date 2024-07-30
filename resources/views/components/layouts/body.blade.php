<body class="font-sans antialiased">

    <x-bvvblades::layouts.navigation />

    <header class="bg-sti-blue-light">
        <section class="max-w-5xl mx-auto py-2">
            <nav class="w-full rounded-md flex justify-start text-gray-800 space-x-4">
                <span>Sie befinden sich hier: </span>
                <ol class="list-reset flex space-x-2">
                    @if (isset($breadcrumbs['links']) || isset($breadcrumbs['active']))
                        <li>
                            <a href="{{ route('home') }}" class="text-sti-blue hover:underline">Startseite</a>
                        </li>
                    @else
                        <li>
                            <span class="text-sti-blue font-bold">
                                Startseite
                            </span>
                        </li>
                    @endif
                    @isset($breadcrumbs['links'])
                        @foreach ($breadcrumbs['links'] as $label => $link)
                            <li>
                                <div class="flex items-center flex-nowrap space-x-2">
                                    <svg class="w-3 h-3 text-sti-blue" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 9 4-4-4-4" />
                                    </svg>
                                    <a href="{{ $link }}" class="text-sti-blue hover:underline">
                                        {{ $label }}
                                    </a>
                                </div>
                            </li>
                        @endforeach
                    @endisset
                    @isset($breadcrumbs['active'])
                        <li class="">
                            <div class="flex items-center flex-nowrap space-x-2">
                                <svg class="w-3 h-3 text-sti-blue" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <span class="text-sti-blue font-bold">
                                    {{ $breadcrumbs['active'] }}
                                </span>
                            </div>
                        </li>
                    @endisset
                    {{-- 
                    <li class="" v-if="active">
                        <div class="flex items-center flex-nowrap space-x-2">
                            <svg class="w-3 h-3 text-sti-blue" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="text-sti-blue font-bold">
                                {{ active }}
                            </span>
                        </div>
                    </li> --}}
                </ol>
            </nav>
        </section>

        <div class="max-w-5xl mx-auto pt-12 pb-8">
            <h1 class="font-semibold text-4xl text-sti-blue leading-tight">
                @isset($title)
                    {{ $title }}
                @endisset
                @empty($title)
                    {{ config('app.name', 'Laravel') }}
                @endempty
            </h1>
        </div>

    </header>

    <main>
        {{ $slot }}
    </main>


</body>
