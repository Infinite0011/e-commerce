module.exports = {
    content: [
        './resources/**/*.blade.php',
        './resources/views/**/*.blade.php',
        './resources/**/*.js',
        './vendor/lunarphp/stripe-payments/resources/views/**/*.blade.php',
    ],
    theme: {
        extend: {
            backgroundImage: {
                'gradient-radial': 'radial-gradient(var(--tw-gradient-stops))',
            }
        }
    },
    plugins: [require('@tailwindcss/forms')],
};
