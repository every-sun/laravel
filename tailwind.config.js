export default {
    content: [
        "./resources/Pages/*.vue",
        "./resources/Pages/**/*.vue",
        "./resources/Pages/**/**/*.vue",
        "./resources/Components/*.vue",
        "./resources/Components/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                'primary': '#000000',
                'secondary': '#282824',
                'third': '#43433A',
                'neutral': '#86866B',
            }
        },
    },
    plugins: [],
}
