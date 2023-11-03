<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center text-gray-200 bg-green-700 font-medium rounded-md text-sm px-5 py-1.5 hover:bg-green-500 hover:text-white hover:shadow-md hover:shadow-green-800 transition ease-in-out duration-150']) }}>
    <span class="sr-only">Action button</span>
    {{ $slot }}
</button>

