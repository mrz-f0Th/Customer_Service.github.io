module.exports = {
    purge: [
        './resources/views/welcome.blade.php',
        './resources/js/app.js',
        './resources/js/*.vue',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            boxShadow: {
                'white': '0 20px 25px -5px rgba(255, 255, 255, 0.1), 0 10px 10px -5px rgba(255, 255, 255, 0.04)',
                '3xl': '0 35px 60px -15px rgba(0, 0, 0, 0.3)',
                '3-xl': '0 -35px -60px 15px rgba(0, 0, 0, 0.3)',
            }
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
}
