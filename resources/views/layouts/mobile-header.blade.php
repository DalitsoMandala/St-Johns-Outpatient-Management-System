   <div x-show="sidebarOpen" @click="sidebarOpen = false"
                class="fixed inset-0 z-20 bg-black bg-opacity-50 md:hidden"
                x-transition:enter="transition-opacity duration-300" x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity duration-300"
                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"></div>

            <!-- Mobile Header -->
            <div
                class="fixed top-0 left-0 right-0 z-40 flex items-center justify-between h-16 p-4 bg-white shadow md:hidden">
              <x-application-logo  class="h-full w-25" />
                <button @click="sidebarOpen = !sidebarOpen; if(sidebarOpen) { sidebarCollapsed = false }"
                    class="p-2 text-gray-600 rounded-lg hover:text-blue-600 hover:bg-gray-100">
                    <i data-lucide="menu" class="w-6 h-6"></i>
                </button>
            </div>
