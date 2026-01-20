

                <header class="flex items-center justify-between gap-1 p-4 bg-white shadow z-1">
                    <div class="flex-1 hidden max-w-2xl lg:block">
                        <form class="w-full">
                            <div class="relative">
                                <span class="absolute -translate-y-1/2 pointer-events-none top-1/2 left-4">
                                    <i data-lucide="search" class="w-5 text-gray-500"></i>
                                </span>
                                <input id="search-input" type="text" placeholder="Search..."
                                    class="shadow-theme-xs focus:border-blue-300 focus:ring-blue-500/10 h-11 w-full rounded-lg border border-gray-200 bg-transparent py-2.5 pr-14 pl-12 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-2 focus:outline-hidden lg:w-full" />
                            </div>
                        </form>
                    </div>
                    <!-- Mobile search button - Simple Version -->
                    <div class="relative lg:hidden" x-data="{
                        showSearch: false,
                        searchQuery: ''
                    }">
                        <!-- Search toggle button -->
                        <button @click="showSearch = !showSearch"
                            class="p-2 text-gray-400 rounded-lg hover:bg-gray-100">
                            <i data-lucide="search" class="w-5 text-gray-500"></i>
                        </button>

                        <!-- Search dropdown -->
                        <div x-show="showSearch" @click.away="showSearch = false"
                            class="absolute left-0 z-50 mt-2 top-full w-72">
                            <div class="bg-white border border-gray-300 rounded-lg shadow-xl">
                                <div class="p-3">
                                    <div class="relative">
                                        <div class="absolute transform -translate-y-1/2 left-3 top-1/2">
                                            <i data-lucide="search" class="w-5 text-gray-500"></i>
                                        </div>

                                        <input x-model="searchQuery" type="text" placeholder="Search..."
                                            class="w-full py-2 pl-10 pr-4 text-gray-600 placeholder-gray-500 bg-gray-100 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-200 focus:border-transparent" />

                                        <!-- Clear button -->
                                        <button x-show="searchQuery.length > 0" @click="searchQuery = ''"
                                            class="absolute transform -translate-y-1/2 right-3 top-1/2">
                                            <i data-lucide="x" class="w-5 text-gray-500"></i>
                                        </button>
                                    </div>

                                    <!-- Search button -->
                                    <button
                                        @click="if(searchQuery.trim()) { alert('Searching: ' + searchQuery); showSearch = false; }"
                                        x-bind:disabled="searchQuery.length === 0"
                                        :class="searchQuery.length > 0 ? 'bg-blue-600 hover:bg-blue-700' :
                                            'bg-blue-300 cursor-not-allowed'"
                                        class="w-full px-4 py-2 mt-2 font-medium text-white transition-colors rounded-lg">
                                        Search
                                    </button>
                                </div>

                                <!-- Quick tips -->
                                <div class="px-3 pb-3 text-xs text-center text-gray-500">
                                    Press Enter to search
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center space-x-2 md:space-x-4">
                        <div class="flex items-center gap-1 2xsm:gap-3 md:gap-2">
                            <!-- Notification Menu Area -->
                            <div class="relative" x-data="{ dropdownOpen: false, notifying: true }" @click.outside="dropdownOpen = false">
                                <button
                                    class="relative flex items-center justify-center w-10 h-10 text-gray-500 transition-colors bg-white border border-gray-200 rounded-full hover:text-dark-900 md:h-11 md:w-11 hover:bg-gray-100 hover:text-gray-700"
                                    @click.prevent="dropdownOpen = ! dropdownOpen; notifying = false">
                                    <span :class="!notifying ? 'hidden' : 'flex'"
                                        class="absolute top-0.5 right-0 z-1 h-2 w-2 rounded-full bg-orange-400">
                                        <span
                                            class="absolute inline-flex w-full h-full bg-orange-400 rounded-full opacity-75 -z-1 animate-ping"></span>
                                    </span>
                                    <i data-lucide="bell" class="w-5 text-gray-500"></i>
                                </button>

                                <!-- Dropdown Start -->
                                <div x-show="dropdownOpen"
                                    class="shadow-theme-lg absolute right-0 mt-2 w-[calc(100vw-2rem)] max-w-[350px] md:w-[350px] flex flex-col rounded-2xl border border-gray-200 bg-white p-3 z-50"
                                    style="max-height: calc(100vh - 120px); overflow-y: auto">
                                    <div class="flex items-center justify-between pb-3 mb-3 border-b border-gray-100">
                                        <h5 class="text-lg font-semibold text-gray-800">
                                            Notification
                                        </h5>

                                        <button @click="dropdownOpen = false" class="text-gray-500">
                                            <i data-lucide="x" class="w-5 h-5"></i>
                                        </button>
                                    </div>

                                    <ul class="flex flex-col gap-2">
                                        <!-- Simplified notification items for mobile -->
                                        <li class="pb-2 border-b border-gray-100 last:border-0">
                                            <a class="flex gap-3 text-sm rounded-lg border-b border-gray-100 p-3 px-4.5 py-3 hover:bg-gray-100 dark:border-gray-800 dark:hover:bg-white/5"
                                                href="#">
                                                <span class="relative block w-full h-10 rounded-full z-1 max-w-10">
                                                    <img src="src/images/user/user-02.jpg" alt="User"
                                                        class="overflow-hidden rounded-full" />
                                                    <span
                                                        class="bg-success-500 absolute right-0 bottom-0 z-10 h-2.5 w-full max-w-2.5 rounded-full border-[1.5px] border-white dark:border-gray-900"></span>
                                                </span>

                                                <span class="block">
                                                    <span
                                                        class="text-theme-sm mb-1.5 block text-gray-500 dark:text-gray-400">
                                                        <span
                                                            class="font-medium text-gray-800 dark:text-white/90">Terry
                                                            Franci</span>
                                                        requests permission to change
                                                        <span
                                                            class="font-medium text-gray-800 dark:text-white/90">Project
                                                            -
                                                            Nganter App</span>
                                                    </span>

                                                    <span
                                                        class="flex items-center gap-2 text-gray-500 text-theme-xs dark:text-gray-400">
                                                        <span>Project</span>
                                                        <span class="w-1 h-1 bg-gray-400 rounded-full"></span>
                                                        <span>5 min ago</span>
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                        <!-- Add more simplified notifications -->
                                    </ul>

                                    <a href="#"
                                        class="flex justify-center p-3 mt-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-100">
                                        View All Notifications
                                    </a>
                                </div>
                                <!-- Dropdown End -->
                            </div>
                            <!-- Notification Menu Area -->
                        </div>



                        <!-- User Area -->
                        <div class="relative" x-data="{ dropdownOpen: false }" @click.outside="dropdownOpen = false">
                            <button class="flex items-center gap-2 text-gray-700"
                                @click.prevent="dropdownOpen = ! dropdownOpen">
                                <span
                                    class="flex items-center justify-center w-8 h-8 overflow-hidden bg-gray-200 rounded-full md:h-10 md:w-10">
                                    <span
                                        class="text-sm font-medium text-gray-600">{{ substr(Auth::user()->name, 0, 1) }}</span>
                                </span>
                                <span class="hidden text-sm font-medium md:block">{{ Auth::user()->name }}</span>
                                <i data-lucide="chevron-down" x-bind:class="{ 'rotate-180': dropdownOpen }"
                                    class="hidden w-3 md:block"></i>
                            </button>

                            <!-- Dropdown Start -->
                            <div x-show="dropdownOpen"
                                class="absolute right-0 z-50 flex flex-col w-48 p-3 mt-2 bg-white border border-gray-200 shadow-theme-lg md:w-56 rounded-xl">
                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <div class="pb-3 border-b border-gray-100">
                                        <span class="block text-sm font-medium text-gray-700">
                                            {{ Auth::user()->name }}
                                            <span class="text-xs mt-0.5 block text-gray-500">
                                                {{ Auth::user()->email }}
                                            </span>
                                    </div>

                                    <ul class="flex flex-col gap-1 pt-3">
                                        <li>
                                            <a href="/profile"
                                                class="flex items-center gap-2 px-3 py-2 text-sm font-medium text-gray-700 rounded-lg hover:bg-gray-100">
                                                <i data-lucide="user" class="w-4 h-4"></i>
                                                Edit Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/settings"
                                                class="flex items-center gap-2 px-3 py-2 text-sm font-medium text-gray-700 rounded-lg hover:bg-gray-100">
                                                <i data-lucide="settings" class="w-4 h-4"></i>
                                                Settings
                                            </a>
                                        </li>
                                    </ul>
                                    <a x-data href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                this.closest('form').submit();"
                                        class="flex items-center gap-2 px-3 py-2 mt-3 text-sm font-medium text-red-600 rounded-lg hover:bg-red-50">
                                        <i data-lucide="toggle-right" class="w-4 h-4"></i>
                                        {{ __('Log Out') }}
                                    </a>
                                </form>
                            </div>

                            <!-- Dropdown End -->
                        </div>
                        <!-- User Area -->
                    </div>
                </header>
