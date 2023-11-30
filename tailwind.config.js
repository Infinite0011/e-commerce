module.exports = {
    content: [
        './resources/**/*.blade.php',
        './resources/views/**/*.blade.php',
        './resources/**/*.js',
        './vendor/lunarphp/stripe-payments/resources/views/**/*.blade.php',
    ],
    theme: {
        extend: {
            colors: {
                'sg-base': '#212121',
                'sg-gray': '#707070',
                'sg-gray-1': '#555252',
                'sg-base-blue': '#2A62FE',
                'sg-product-green': '#32908B',
                'sg-product-green-1': '#32908B19'
            },
            backgroundImage: {
                'gradient-radial': 'radial-gradient(var(--tw-gradient-stops))',
            }
        }
    },
    plugins: [require('@tailwindcss/forms')],
};
