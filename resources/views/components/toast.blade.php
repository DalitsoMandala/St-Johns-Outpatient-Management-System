<div x-data="toastManager"
     x-on:toast-show.window="add($event.detail)"
     class="fixed z-[9999] p-6 w-full max-w-sm pointer-events-none flex flex-col gap-3"
     :class="positions[position]">

    <template x-for="(toast, index) in toasts" :key="toast.id">
        <div
            x-data="{ show: false }"
            x-init="$nextTick(() => show = true)"
            x-show="show"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-x-8"
            x-transition:enter-end="opacity-100 translate-x-0"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-90"
            class="flex items-center justify-between w-full overflow-hidden bg-white border shadow-lg pointer-events-auto rounded-xl"
            :class="typeClasses[toast.type]">

            <div class="flex items-center flex-1 p-4">
                <div class="mr-3 shrink-0" x-show="toast.type !== 'default'">
               <template x-if="toast.type === 'success'">

                        <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">

                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>

                        </svg>

                    </template>

                    <template x-if="toast.type === 'danger'">

                        <svg class="w-5 h-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">

                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>

                        </svg>

                    </template>

                    <template x-if="toast.type === 'info'">

                        <svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20">

                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>

                        </svg>

                    </template>

                    <template x-if="toast.type === 'warning'">

                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">

                            <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>

                        </svg>

                    </template>
                </div>

                <div>
                    <p class="text-sm font-semibold text-gray-900" x-text="toast.message"></p>
                    <p x-show="toast.description" class="mt-0.5 text-xs text-gray-500" x-text="toast.description"></p>
                </div>
            </div>

            <button type="button" @click="show = false; setTimeout(() => remove(toast.id), 200)" class="p-4 group">
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M18 18L6 6"/>
                </svg>
            </button>
        </div>
    </template>
</div>

<script>
document.addEventListener('alpine:init', () => {
    Alpine.data('toastManager', () => ({
        toasts: [],
        position: 'top-right',
        positions: {
            'top-right': 'top-0 right-0',
            'top-left': 'top-0 left-0',
            'bottom-right': 'bottom-0 right-0',
            'bottom-left': 'bottom-0 left-0',
            'top-center': 'top-0 left-1/2 -translate-x-1/2',
        },
        typeClasses: {
            default: 'border-gray-200 bg-white',
            success: 'border-green-100 bg-green-50',
            danger: 'border-red-100 bg-red-50',
            info: 'border-blue-100 bg-blue-50',
            warning: 'border-yellow-100 bg-yellow-50',
        },
        iconClasses: {
            success: 'text-green-500',
            danger: 'text-red-500',
        },

        add(data) {
            const id = Date.now();
            const newToast = {
                id,
                message: data.message,
                description: data.description,
                type: data.type || 'default',
            };

            this.toasts.push(newToast);

            // Auto-remove logic
            if (data.timeout !== 0) {
                setTimeout(() => {
                    // Find the specific toast and trigger its local 'show' to false
                    // This is handled by the x-data scope inside the template
                    this.remove(id);
                }, data.timeout || 3000);
            }
        },

        remove(id) {
            this.toasts = this.toasts.filter(t => t.id !== id);
        }
    }));
});
</script>
