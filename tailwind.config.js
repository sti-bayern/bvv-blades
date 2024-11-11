import defaultTheme from 'tailwindcss/defaultTheme';

export default {
    content: [
        './resources/views/**/*.blade.php',
        './node_modules/flowbite/**/*.js',
        './vendor/sti-bayern/bvv-blades/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                'sti-blue-950': '#162f4e',
                'sti-blue-900': '#1c3c63',
                'sti-blue-800': '#244b7a',
                'sti-blue-700': '#2c5a93',
                'sti-blue-600': '#3e6aa1',
                'sti-blue-500': '#537aae',
                'sti-blue-400': '#698bbb',
                'sti-blue-300': '#829fc9',
                'sti-blue-200': '#afc3e0',
                'sti-blue-100': '#d2ddef',
                'sti-blue-50': '#e6ecf7',
                'sti-blue': '#2c5a93',
                'sti-blue-dark': '#1c3d66',
                'sti-blue-light': '#e8ecf3',
            },
            fontFamily: {
                sans: ['OpenSans', ...defaultTheme.fontFamily.sans],
            }
        },
    },

    plugins: [
        require('@tailwindcss/typography'),
    ],
};
