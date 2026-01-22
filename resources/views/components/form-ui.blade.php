@props([
    'size' => '4xl'
])

<div class="block max-w-{{ $size }} p-6 bg-white border rounded-lg shadow-xs border-default">
   {{ $slot }}
</div>



