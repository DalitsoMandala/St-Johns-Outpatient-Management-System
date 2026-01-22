<select {{ $attributes->merge(['class' => 'block w-full px-3 py-2.5 bg-white border border-gray-300 rounded-lg text-heading text-sm rounded-base focus:ring-blue-100 focus:border-blue-100 shadow-xs placeholder:text-body']) }} >

    {{ $slot }}
</select>
