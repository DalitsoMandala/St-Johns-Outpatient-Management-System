<div>
    <!--- Admin Dashboard -->

    <div class="min-h-screen p-8 bg-gray-100">
        <!-- Dashboard Summary Cards -->
        <div class="grid grid-cols-1 gap-8 mb-8 sm:grid-cols-2 lg:grid-cols-4">

            <!-- Total Visits Card -->
            <div class="flex-row p-6 space-y-10 text-white bg-blue-500 shadow-lg rounded-3xl">
                <div class="flex items-center justify-between ">
                    <div class="p-4 text-black bg-blue-100 rounded-full">
                        <i data-lucide="book-user" class="w-4 h-4"></i>
                    </div>
                    <div>
                        <div class=" sm:flex sm:items-center sm:ms-6">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button class="p-4 bg-blue-100 rounded-full text-blue-950">
                                        <i data-lucide="ellipsis" class="w-4 h-4"></i>
                                    </button>
                                </x-slot>

                                <x-slot name="content">

                                </x-slot>
                            </x-dropdown>
                        </div>

                    </div>
                </div>

                <div class="justify-between gap-2 lg:flex">
                      <div>
                        <h3 class="font-semibold text-md ">Total Visits Today
                        </h3> <span class="px-2 text-xs font-bold bg-blue-100 rounded-full text-blue-950"> +2%</span>
                        <p class="text-xs ">150+ more than yesterday</p>
                    </div>
                    <div>
                        <p class="text-3xl font-bold">500K</p>
                    </div>
                </div>

            </div>

            <!-- Total Patients Card -->
            <div class="flex-row p-6 space-y-10 bg-white border shadow-lg text-blue-950 rounded-3xl">
                <div class="flex items-center justify-between ">
                    <div class="p-4 text-black bg-blue-100 rounded-full">
                        <i data-lucide="circle-user" class="w-4 h-4"></i>
                    </div>
                    <div>
                        <div class=" sm:flex sm:items-center sm:ms-6">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button class="p-4 bg-blue-100 rounded-full text-blue-950">
                                        <i data-lucide="ellipsis" class="w-4 h-4"></i>
                                    </button>
                                </x-slot>

                                <x-slot name="content">

                                </x-slot>
                            </x-dropdown>
                        </div>

                    </div>
                </div>

                <div class="justify-between gap-2 lg:flex">
                    <div>
                        <h3 class="font-semibold text-md ">Total Doctors
                        </h3> <span class="px-2 text-xs font-bold bg-blue-100 rounded-full text-blue-950"> +2%</span>
                        <p class="text-xs ">150+ more than yesterday</p>
                    </div>
                    <div>
                        <p class="text-3xl font-bold">500K</p>
                    </div>
                </div>


            </div>


            <!-- Total Doctors Card -->
            <div class="flex-row p-6 space-y-10 bg-white border shadow-lg text-blue-950 rounded-3xl">
                <div class="flex items-center justify-between ">
                    <div class="p-4 text-black bg-blue-100 rounded-full">
                        <i data-lucide="user" class="w-4 h-4"></i>
                    </div>
                    <div>
                        <div class=" sm:flex sm:items-center sm:ms-6">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button class="p-4 bg-blue-100 rounded-full text-blue-950">
                                        <i data-lucide="ellipsis" class="w-4 h-4"></i>
                                    </button>
                                </x-slot>

                                <x-slot name="content">

                                </x-slot>
                            </x-dropdown>
                        </div>

                    </div>
                </div>
      <div class="justify-between gap-2 lg:flex">
                    <div>
                        <h3 class="font-semibold text-md ">Total Patients
                        </h3> <span class="px-2 text-xs font-bold bg-blue-100 rounded-full text-blue-950"> +2%</span>
                        <p class="text-xs ">150+ more than yesterday</p>
                    </div>
                    <div>
                        <p class="text-3xl font-bold">500K</p>
                    </div>
                </div>


            </div>

            <!-- Total Revenue Card -->
            <div class="flex-row p-6 space-y-10 bg-white border shadow-lg text-blue-950 rounded-3xl">
                <div class="flex items-center justify-between ">
                    <div class="p-4 text-black bg-blue-100 rounded-full">
                        <i data-lucide="coins" class="w-4 h-4"></i>
                    </div>
                    <div>
                        <div class=" sm:flex sm:items-center sm:ms-6">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button class="p-4 bg-blue-100 rounded-full text-blue-950">
                                        <i data-lucide="ellipsis" class="w-4 h-4"></i>
                                    </button>
                                </x-slot>

                                <x-slot name="content">

                                </x-slot>
                            </x-dropdown>
                        </div>

                    </div>
                </div>

                   <div class="justify-between gap-2 lg:flex">
                    <div>
                        <h3 class="font-semibold text-md ">Total Revenue (MWK)
                        </h3> <span class="px-2 text-xs font-bold bg-blue-100 rounded-full text-blue-950"> +2%</span>
                        <p class="text-xs ">150+ more than yesterday</p>
                    </div>
                    <div>
                        <p class="text-3xl font-bold">500K</p>
                    </div>
                </div>

            </div>
        </div>
    </div>


</div>
