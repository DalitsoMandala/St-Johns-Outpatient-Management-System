@props(['tabs', 'default' => null])

@php
    $active = $default ?? $tabs[0];
@endphp

<div x-data="{ activeTab: '{{ $active }}' }" class="w-full">
    <div class="flex mb-4 border-b border-gray-200">
        @foreach($tabs as $tab)
            <button
                type="button"
                @click="activeTab = '{{ $tab }}'"
                :class="activeTab === '{{ $tab }}' ? 'border-blue-600 text-blue-600' : 'border-transparent text-gray-500'"
                class="px-4 py-2 text-sm font-medium capitalize transition-colors border-b-2"
            >
                {{ str_replace('_', ' ', $tab) }}
            </button>
        @endforeach
    </div>

    <div>
        @foreach($tabs as $tab)
            <div
                wire:key="tab-{{ $tab }}"
                x-show="activeTab === '{{ $tab }}'"
                x-cloak
                x-transition
                >
                {{-- FIX: Access the slot via the $__env variable which handles slots more reliably --}}
                @if(isset($__laravel_slots[$tab]))
                    {!! $__laravel_slots[$tab] !!}

                @endif
            </div>
        @endforeach
    </div>
</div>
