<div>

 <div x-data="{
                        showPatientList: false,
                        patientQueue: [
                            // { id: 1, name: 'John Doe', time: '10:30 AM', status: 'waiting', priority: 'normal' },
                            // { id: 2, name: 'Jane Smith', time: '10:45 AM', status: 'in-progress', priority: 'urgent' },
                            // { id: 3, name: 'Robert Johnson', time: '11:00 AM', status: 'waiting', priority: 'normal' },
                            // { id: 4, name: 'Maria Garcia', time: '11:15 AM', status: 'waiting', priority: 'normal' },
                            // { id: 5, name: 'David Wilson', time: '11:30 AM', status: 'waiting', priority: 'normal' }

                            ]
                    }">
                        <!-- Floating Patient Queue Button -->
                        <button @click="showPatientList = true"
                            class="fixed z-50 right-6 bottom-6 md:right-8 md:bottom-8 group">
                            <!-- Main Button with Badge -->
                            <div class="relative z-20">
                                <!-- Ensure this has z-index set to avoid conflicts -->
                                <!-- Notification Badge -->
                                <div x-show="patientQueue.filter(p => p.status === 'waiting').length > 0"
                                    class="absolute z-30 flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-red-500 rounded-full -top-2 -right-2">
                                    <span x-text="patientQueue.filter(p => p.status === 'waiting').length"></span>
                                </div>

                                <!-- Main Button -->
                                <div
                                    class="z-10 flex items-center justify-center p-4 text-white transition-all duration-300 transform bg-blue-500 shadow-2xl hover:from-blue-600 hover:to-purple-700 rounded-2xl hover:shadow-3xl hover:-translate-y-1 group-hover:scale-105">
                                    <!-- Animated Pulse Effect -->
                                    <div x-show="patientQueue.filter(p => p.status === 'waiting').length > 0" class="absolute inset-0 bg-blue-400 opacity-75 rounded-2xl animate-ping">
                                    </div>

                                    <!-- Patient Icon Container -->
                                    <div class="relative p-3 rounded-full bg-white/20 backdrop-blur-sm">
                                        <i data-lucide="users" class="w-6 h-6"></i>
                                    </div>
                                </div>

                                <!-- Tooltip -->
                                <div
                                    class="absolute px-3 py-2 mr-3 text-sm text-white transition-opacity duration-300 transform -translate-y-1/2 bg-gray-900 rounded-lg opacity-0 right-full top-1/2 group-hover:opacity-100 whitespace-nowrap">
                                    Patient Queue
                                    <div class="absolute transform -translate-y-1/2 top-1/2 left-full">
                                        <div class="border-4 border-transparent border-l-gray-900"></div>
                                    </div>
                                </div>
                            </div>
                        </button>

                        <!-- Patient List Overlay -->
                        <div x-show="showPatientList" @click.away="showPatientList = false"
                            x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-200"
                            x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                            class="fixed inset-0 z-50 overflow-hidden">
                            <!-- Overlay Background -->
                            <div class="absolute inset-0 bg-black/50 backdrop-blur-sm"></div>

                            <!-- Patient List Panel -->
                            <div
                                class="absolute top-0 bottom-0 right-0 w-full max-w-md overflow-hidden text-sm bg-white shadow-2xl">
                                <!-- Header -->
                                <div class="p-6 text-white bg-blue-500 to-purple-600">
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <h2 class="text-lg font-bold">Patient Queue</h2>
                                            <p class="mt-1 text-blue-100 text-md">
                                                <span
                                                    x-text="patientQueue.filter(p => p.status === 'waiting').length">4</span>
                                                patients waiting
                                            </p>
                                        </div>
                                        <button @click="showPatientList = false"
                                            class="p-2 text-white transition-colors rounded-full hover:text-gray-200 hover:bg-white/20">
                                            <i data-lucide="x" class="w-6 h-6"></i>
                                        </button>
                                    </div>

                                    <!-- Stats -->
                                    <div class="grid grid-cols-3 gap-4 mt-6">
                                        <div class="text-center">
                                            <div class="font-bold text-md" x-text="patientQueue.length">
                                                5
                                            </div>
                                            <div class="text-sm text-blue-100">Total</div>
                                        </div>
                                        <div class="text-center">
                                            <div class="font-bold text-white text-md"
                                                x-text="patientQueue.filter(p => p.status === 'waiting').length">
                                                4
                                            </div>
                                            <div class="text-sm text-blue-100">Waiting</div>
                                        </div>
                                        <div class="text-center">
                                            <div class="font-bold text-white text-md"
                                                x-text="patientQueue.filter(p => p.status === 'in-progress').length">
                                                1
                                            </div>
                                            <div class="text-sm text-blue-100">In Progress</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Patient List -->
                                <div class="h-[calc(100vh-300px)] overflow-y-auto pb-24">
                                    <!-- Search -->
                                    <div class="p-4">
                                        <div class="relative">
                                            <input type="text" placeholder="Search patients..."
                                                class="w-full py-2 pl-10 pr-4 border border-gray-200 rounded-lg outline-none focus:ring-1 focus:ring-blue-100 focus:border-blue-100" />

                                            <div class="absolute transform -translate-y-1/2 left-3 top-1/2">
                                                <i data-lucide="search" class="w-5 h-5 text-gray-500"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Patient Items -->
                                    <template x-for="patient in patientQueue" :key="patient.id">
                                        <a href="#">
                                            <div class="transition-colors cursor-pointer hover:bg-gray-100">
                                                <div class="flex items-start p-4 space-x-3">
                                                    <!-- Avatar -->
                                                    <div class="flex-shrink-0">
                                                        <div
                                                            class="flex items-center justify-center w-10 h-10 font-semibold text-white bg-blue-400 rounded-full">
                                                            <span
                                                                x-text="patient.name.split(' ').map(n => n[0]).join('')"></span>
                                                        </div>
                                                    </div>

                                                    <!-- Patient Info -->
                                                    <div class="flex-1 min-w-0">
                                                        <div class="flex items-center justify-between">
                                                            <h3 class="text-sm font-medium text-gray-900 truncate"
                                                                x-text="patient.name"></h3>
                                                            <span class="px-2 py-1 text-xs font-medium rounded-full"
                                                                :class="{
                                                                    'bg-yellow-100 text-yellow-800': patient
                                                                        .status === 'waiting',
                                                                    'bg-green-100 text-green-800': patient
                                                                        .status === 'in-progress'
                                                                }"
                                                                x-text="patient.status.charAt(0).toUpperCase() + patient.status.slice(1)">
                                                            </span>
                                                        </div>

                                                        <div class="flex items-center mt-1 text-sm text-gray-500">
                                                            <i data-lucide="clock" class="w-4 h-4 mr-1"></i>

                                                            <span x-text="patient.time"></span>

                                                            <span class="mx-2">•</span>

                                                            <span class="flex items-center">
                                                                <i data-lucide="flag" class="w-4 h-4 mr-1"
                                                                    x-bind:class="{
                                                                        'text-red-400': patient
                                                                            .priority === 'urgent',

                                                                        'text-green-400': patient
                                                                            .priority === 'normal'
                                                                    }"></i>
                                                                <span x-text="patient.priority"
                                                                    class="capitalize"></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </template>

                                    <!-- Empty State -->
                                    <div x-show="patientQueue.length === 0" class="p-8 text-center">
                                        <div
                                            class="flex items-center justify-center w-24 h-24 mx-auto mb-4 bg-gray-100 rounded-full">
                                            <i data-lucide="users" class="w-10 h-10 text-gray-400"></i>
                                        </div>
                                        <h3 class="mb-2 text-lg font-medium text-gray-900">
                                            No patients in queue
                                        </h3>
                                        <p class="text-gray-500">
                                            Patients will appear here when added to the queue.
                                        </p>
                                    </div>
                                </div>

                                <!-- Footer Actions -->
                                <div class="absolute bottom-0 left-0 right-0 hidden p-4 bg-white">
                                    <div class="flex space-x-3">
                                        <button
                                            @click="patientQueue.push({
                        id: patientQueue.length + 1,
                        name: 'New Patient ' + (patientQueue.length + 1),
                        time: new Date().toLocaleTimeString([], {hour: '2-digit', minute:'2-digit'}),
                        status: 'waiting',
                        priority: 'normal'
                    })"
                                            class="flex-1 bg-blue-500 hover:from-blue-600 hover:to-blue-700 text-white font-medium py-3 px-4 rounded-lg transition-all duration-300 transform hover:-translate-y-0.5 active:translate-y-0 flex items-center justify-center">
                                            <i data-lucide="plus" class="w-4 h-4 mr-2"></i>
                                            Add Patient
                                        </button>
                                        <button @click="patientQueue = []"
                                            class="px-4 py-3 font-medium text-gray-700 transition-colors border border-gray-300 rounded-lg hover:bg-gray-100">
                                            Clear All
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



</div>
