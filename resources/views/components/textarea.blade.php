@props(['disabled' => false])

<textarea @disabled($disabled) rows="4"
    {{ $attributes->merge(['class' => 'dark:bg-dark-900 shadow-theme-xs focus:border-blue-300 focus:ring-blue-500/10 dark:focus:border-blue-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30']) }}></textarea>
