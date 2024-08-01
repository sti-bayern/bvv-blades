<div x-data="{ open: false }" class="border-b last:border-b-0">
    <button @click="open = !open" 
            :aria-expanded="open.toString()" 
            class="flex justify-between items-center w-full px-4 py-2 text-left text-lg font-medium text-gray-700 focus:outline-none hover:bg-blue-100 focus:bg-blue-100 ">
        <h3>{{ $title }}</h3>
        <svg :class="{'transform rotate-180': open, 'transform rotate-0': !open}" class="w-5 h-5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
        </svg>
    </button>
    <div x-show="open" x-collapse class="px-4 py-2">
        {{ $slot }}
    </div>
</div>
