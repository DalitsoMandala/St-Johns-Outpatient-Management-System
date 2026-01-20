<div
    x-data="{
        active: {{ $active }},        // 0-based active index
        disabled: @js($disabled)      // disabled tabs are 1-based: [2, 3]
    }"
    class="w-full"
>
    <!-- Tabs Header -->
    <div class="text-sm font-medium border-b border-default">
        <ul class="flex flex-wrap -mb-px">
            @foreach ($tabs as $index => $tabTitle)
                @php
                    // Disabled is stored 1-based, so index+1
                    $isDisabled = in_array($index + 1, $disabled);
                @endphp

                <li class="me-2">
                    <button
                        type="button"
                        role="tab"
                        :aria-selected="active === {{ $index }}"
                        @click="if (!{{ $isDisabled ? 'true' : 'false' }}) active = {{ $index }}"
                        class="inline-block p-4 transition border-b-2 rounded-t-base"
                        :class="{
                            'border-blue-600 text-blue-600': active === {{ $index }},
                            'border-transparent hover:text-blue-600 hover:border-blue-600': active !== {{ $index }},
                            'text-gray-400 cursor-not-allowed': {{ $isDisabled ? 'true' : 'false' }}
                        }"
                        {{ $isDisabled ? 'disabled' : '' }}
                    >
                        {{ $tabTitle }}
                    </button>
                </li>
            @endforeach
        </ul>
    </div>

    <!-- Tabs Content -->
    <div class="mt-4">
        {{ $slot }}
    </div>
</div>
