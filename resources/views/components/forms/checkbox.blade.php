<input id="{{ $id }}" name="{{ $name }}" type="checkbox" value="1"
    @checked(old($name, $value) == 1 || $checked)
    class="w-4 h-4 text-sti-blue bg-gray-100 border-gray-300 rounded-sm focus:ring-sti-blue focus:ring-2 hover:cursor-pointer" />
