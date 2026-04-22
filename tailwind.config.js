import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', 'ui-sans-serif', 'system-ui', 'sans-serif', '"Apple Color Emoji"', '"Segoe UI Emoji"', '"Segoe UI Symbol"', '"Noto Color Emoji"'],
            },
            colors: {
                brand: {
                    darkblue: '#231e6f',
                    red: '#e03834',
                    yellow: '#f69d28',
                }
            }
        },
    },

    plugins: [forms],
    safelist: [
        'md:col-span-2',
        'lg:col-span-3',
        'grid-cols-2',
        'grid-cols-3',
        'grid-cols-4',
        'sm:grid-cols-5',
        'lg:grid-cols-6',
        'col-span-1'
    ]
};
