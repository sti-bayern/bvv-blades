<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.9.1/dist/cdn.min.js" defer></script>
<div x-data="{ open: false }" class="overflow-hidden border border-gray-300">
    <button @click="open = !open" :aria-expanded="open.toString()"
        class="flex items-center justify-between w-full px-4 py-4 text-base font-medium text-gray-700 focus:outline-none hover:bg-blue-100 focus:bg-blue-100">

        <div class="flex items-center justify-center w-full">
            <h3 class="text-center">{{ $title }}</h3>
        </div>
        <svg :class="{ 'transform rotate-180': open, 'transform rotate-0': !open }"
            class="w-5 h-5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" d="M19 9l-7 7-7-7"></path>
        </svg>
    </button>
    <div x-show="open" x-collapse :class="{ 'border-t border-gray-200': open }" class="px-4 py-3 text-sm">
        {{ $slot }}
    </div>
</div>
