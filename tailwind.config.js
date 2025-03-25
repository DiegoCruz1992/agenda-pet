import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                roboto: ["Roboto", sans-serif],
            },
            colors: {
                Primario: {
                    100: '#E3FAF4',
                    200: '#A8EEE1',
                    300: '#03BDBF',
                    400: '#162C51',
                    500: '#0B1F40',
                },
                Secundario: {
                    100: '#FFF5CE',
                    200: '#FFCC5F',
                    300: '#F8AB22',
                    400: '#DB8224',
                    500: '#70211F',
                },
                'dark-opacity': {
                    100: '#000, 5%',
                    200: '#000, 10%',
                    300: '#000, 20%',
                    400: '#000, 40%',
                    500: '#000, 80%',
                },
                'light-opacity': {
                    100: '#fff, 5%',
                    200: '#fff, 10%',
                    300: '#fff, 20%',
                    400: '#fff, 40%',
                    500: '#fff, 80%',
                },
            }
        },
    },

    plugins: [forms],
};
