@props(['name'])

<div
    x-show="activeTab === '{{ $name }}'"
    x-cloak
    wire:key="content-{{ $name }}"
>
    {{ $slot }}
</div>
