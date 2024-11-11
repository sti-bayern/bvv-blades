<input
    {{ $attributes->merge([
        'class' =>
            'relative m-0 block w-full min-w-0 flex-auto
                cursor-pointer
                rounded-sm border border-solid border-gray-300
                bg-transparent bg-clip-padding
                p-2
                form-hover-ring
                text-base font-normal text-surface
                transition duration-300 ease-in-out
                file:-mx-3 file:-my-[0.32rem] file:me-3 file:cursor-pointer file:overflow-hidden file:rounded-none
                    file:border-0 file:border-e file:border-solid file:border-inherit file:bg-transparent file:px-3  file:py-[0.32rem] file:text-surface
                focus:border-primary focus:text-gray-700 focus:shadow-inset focus:outline-none',
    ]) }}
    type="file" name="{{ $name }}" id="{{ $id }}" />
