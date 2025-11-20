@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-theme_color-100 dark:border-indigo-600 text-sm 
              font-medium leading-5 text-gray-900 dark:text-gray-100 focus:outline-none focus:border-theme_color-200 
              transition duration-150 ease-in-out'
              
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 
               text-gray-500 dark:text-gray-400 dark:hover:text-gray-300 hover:border-theme_color-100 
               dark:hover:border-gray-700 focus:outline-none focus:text-gray-700 dark:focus:text-gray-300 focus:border-theme_color-200
               dark:focus:border-gray-700 transition duration-300 ease-in-out ';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }} 
  aria-label="{{ $slot }}">
    {{ $slot }}
</a>
