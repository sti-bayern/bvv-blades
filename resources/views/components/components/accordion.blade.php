<details class="group">
    <summary class="flex justify-between border cursor-pointer list-none items-center p-4
        bg-white focus:outline-none ring-offset-2 hover:ring hover:ring-sti-blue-light focus:ring focus:ring-sti-blue-light
        group-open:bg-sti-blue-light
        ">
        <h{{ $level }} class=" font-semibold text-lg grow @if($align == 'left') text-left @elseif($align == 'right') text-right @else text-center @endif">
            {{ $title }}
        </h{{ $level }}>
        <svg class="w-5 h-5 transition-transform duration-300 rotate-0 group-open:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" d="M19 9l-7 7-7-7"></path>
        </svg>
    </summary>
    <div class="px-6 py-8 group-open:border-t border overflow-hidden">{{ $slot }}</div>
</details>
