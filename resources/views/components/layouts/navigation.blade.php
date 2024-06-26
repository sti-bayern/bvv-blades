<div>
    <section class="flex max-w-5xl mx-auto justify-between items-start ">

        @auth
            <div class="pt-2 flex items-center space-x-6">
                <div data-tooltip-target="tooltip-auth-info">
                    <!-- <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-5.jpg" alt="Rounded avatar"> -->
                    <div class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600 grow">
                        <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </div>

                <div id="tooltip-auth-info" role="tooltip"
                    class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                    <span class="block text-sm text-white">
                        Username
                    </span>
                    <span class="block text-sm  text-gray-400 truncate">
                        E-Mail
                    </span>
                </div>
                <x-bvvblades-forms-form method='post' :action="route('logout')" no_grid>
                    <button class="block uppercase text-sti-blue font-bold border-b-2 border-white hover:border-sti-blue"
                        data-te-dropdown-item-ref type="submit">Abmelden</button>
                </x-bvvblades-forms-form>

            </div>
        @endauth

        @guest
            <div class="pt-2 flex items-center space-x-6">
                <a class="block uppercase text-sti-blue font-bold border-b-2 border-white hover:border-sti-blue"
                    href="{{ route('login') }}">Anmelden</a>
            </div>
        @endguest

        <a href="/" class="flex items-end">
            <div class="mb-2 mr-4 font-bold text-2xl text-sti-blue">{{ config('app.name', 'Laravel') }}</div>
            <svg width="133" height="80" xmlns="http://www.w3.org/2000/svg" version="1.1">
                <title>Rautenflagge von Bayern</title>
                <desc>Die Rautenflagge des Bundeslands Bayern</desc>
                <g>
                    <title>Layer 1</title>
                    <rect x="-0.25" y="0" id="svg_1" fill="white" height="80" width="133" />
                    <path id="svg_2" fill="#0098d4"
                        d="m128.21386,-0.0625l-29.43172,0l34.28018,76.1424l0,4.00749l-27.62706,0l-36.08484,-80.1499l-29.43172,0l36.08484,80.1499l-29.43172,0l-26.61246,-59.11055l-19.95935,-5.10956l0,26.1489l17.14009,38.0712l29.43172,0l-46.57181,-11.9223l0,-26.1489l133.06232,34.06371l0,-26.1489l-113.10297,-28.95415l-9.47237,-21.03935l29.43172,0l93.14363,23.84459l0,-13.07445l-4.84846,-10.77014z" />
                </g>
            </svg>
        </a>
    </section>
</div>
<div class="bg-sti-blue text-white">

    <nav class="max-w-5xl mx-auto text-white">
        <div class="flex flex-wrap items-center justify-between max-w-screen-xl mx-auto">
            <div class="flex items-center md:order-2 p-4">
                <button data-collapse-toggle="mega-menu" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="mega-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div id="mega-menu" class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1">
                <ul class="flex flex-col mt-4 text-xl md:flex-row md:mt-0">
                    @foreach (Config::get('bvvblades.navigation') as $key => $item)
                        <li>
                            @if (isset($item['sub']))
                                <div>
                                    <button id="nav-dropdown-button-{{ $key }}"
                                        data-dropdown-toggle="nav-dropdown-{{ $key }}"
                                        class="flex items-center justify-between w-full p-4 border-b-4 border-sti-blue hover:border-white">
                                        {{ $item['label'] }}
                                        <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 4 4 4-4" />
                                        </svg>
                                    </button>
                                    <div id="nav-dropdown-{{ $key }}"
                                        class="relative z-10 hidden w-auto grid-cols-2 
                                bg-sti-blue text-white">
                                        <ul class="flex flex-wrap py-4 px-8 max-w-2xl"
                                            aria-labelledby="nav-dropdown-button-{{ $key }}">
                                            @foreach ($item['sub'] as $sub)
                                                <li class="">
                                                    <a @if (isset($sub['link'])) href="{{ $sub['link'] }}"
                                                        @elseif (isset($sub['route']))
                                                            href="{{ route($sub['route']) }}" @endif
                                                        class="block p-4 hover:underline">{{ $sub['label'] }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            @elseif (isset($item['route']))
                                <a class="block p-4 border-b-4 hover:border-white border-sti-blue"
                                    href="{{ route($item['route']) }}">
                                    {{ $item['label'] }}
                                </a>
                            @elseif (isset($item['link']))
                                <a class="block p-4 border-b-4 hover:border-white border-sti-blue"
                                    href="{{ $item['link'] }}">
                                    {{ $item['label'] }}
                                </a>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </nav>

</div>
