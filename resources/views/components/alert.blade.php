@props([
    'type' => 'success',
    'bg' => [
        'success' => 'bg-green-100 text-green-800',
        'danger' => 'bg-red-100 text-red-800',
        'info' => 'bg-red-100 text-red-800',
        'warning' => 'bg-yellow-100 text-yellow-800',
    ],
])

<div class="p-4 mb-4 text-sm  rounded {{ $bg[$type] }}" role="alert">
    {{ $slot }}
</div>
