<aside
    :class="{
        'w-64': !sidebarCollapsed,
        'w-20': sidebarCollapsed,
        'translate-x-0': sidebarOpen,
        '-translate-x-full': !sidebarOpen,
        'md:w-64': sidebarHover && sidebarCollapsed
    }"
    @mouseenter="if(sidebarCollapsed) {sidebarHover = true}" @mouseleave="sidebarHover = false"
    class="fixed top-0 left-0 z-30 h-screen transition-all duration-300 transform bg-white shadow-md md:static md:translate-x-0 group">
    <div class="items-center justify-between hidden p-4 mt-16 border border-r-0 border-b-1 md:flex md:mt-0">
        <x-application-logo class="w-full " />
    </div>

    <nav class="px-2 mt-20 space-y-2 text-sm md:mt-2">
        <div class="px-3 mb-2 text-xs font-medium text-gray-500 uppercase transition-opacity duration-200"
            :class="{
                'opacity-0 pointer-events-none': sidebarCollapsed && !sidebarHover,
                'opacity-100': !sidebarCollapsed || sidebarHover
            }">
            Menu
        </div>

        <a href="#" x-bind:class="{ 'justify-center': sidebarCollapsed && !sidebarHover }"
            class="flex items-center gap-2 px-3 py-3 mt-5 font-medium text-blue-900 transition-colors bg-blue-100 rounded hover:bg-blue-50">
            <!-- ICON: never touched -->
            <i data-lucide="layout-dashboard" class="w-4 h-4"></i>

            <!-- LABEL: fades only -->
            <span class="transition-opacity duration-200" style="white-space: nowrap">
                Dashboard
            </span>
        </a>
        @hasanyrole('admin|receptionist')
            <div x-data="{ open: true }">
                <!-- Manage Link -->
                <a href="#" @click="open = !open"
                    class="flex items-center w-full px-3 py-3 transition-colors rounded hover:bg-gray-100 group">
                    <span class="flex items-center gap-2">
                        <!-- Icon visible always -->
                        <i data-lucide="home" class="w-4 h-4"></i>

                        <!-- Label: fades only -->
                        <span class="transition-opacity duration-200" style="white-space: nowrap">
                            Manage
                        </span>
                    </span>

                    <!-- Chevron icon: rotates when expanded -->
                    <i data-lucide="chevron-down" :class="{ 'rotate-180': open }"
                        class="w-4 transition-transform duration-200 chevron"></i>
                </a>

                <!-- Manage Links (Collapse by default) -->
                <div x-show="open" class="mt-1 ml-4 transition-opacity duration-200" x-transition>
                    <!-- Patient Registration Link -->
                    <a href="#" class="flex items-center gap-2 px-3 py-2 text-sm rounded hover:bg-gray-100">
                        <i data-lucide="user-plus" class="w-4 h-4"></i> Register Patient
                    </a>


                    <!-- Queue Management Link -->
                    <a href="#" class="flex items-center gap-2 px-3 py-2 text-sm rounded hover:bg-gray-100">
                        <i data-lucide="list-ordered" class="w-4 h-4 "></i> Queue Management
                    </a>


                    <!-- Patient Search Link -->
                    <a href="#" class="flex items-center gap-2 px-3 py-2 text-sm rounded hover:bg-gray-100">
                        <i data-lucide="history" class="w-4 h-4"></i> Patient History
                    </a>

                    <!-- Reports Link -->
                    <a href="#" class="flex items-center gap-2 px-3 py-2 text-sm rounded hover:bg-gray-100">
                        <i data-lucide="bar-chart-2" class="w-4 h-4"></i> Reports
                    </a>
                </div>
            </div>
        @endhasanyrole

    </nav>
</aside>
