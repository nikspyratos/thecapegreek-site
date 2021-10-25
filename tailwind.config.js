module.exports = {
    purge: {
        mode: 'all',
        content: [
            'source/**/*.blade.php',
            'source/**/*.md',
            'source/**/*.html',
        ],
        css: ['source/_assets/css/*.css'],
        options: {
            keyframes: true,
        },
    },
    theme: {
        container: {
            padding: '10%'
        },
        colors: {
            tcg_dark: "var(--tcg_dark)",
            tcg_grey: "var(--tcg_grey)",
            tcg_white: "var(--tcg_white)",
            tcg_cyan: "var(--tcg_cyan)",
            tcg_blue: "var(--tcg_blue)",
            tcg_light_blue: "var(--tcg_light_blue)",
            tcg_green: "var(--tcg_green)",
            tcg_pink: "var(--tcg_pink)",
            tcg_purple: "var(--tcg_purple)",
            tcg_darker_purple: "var(--tcg_darker_purple)",
            tcg_red: "var(--tcg_red)",
            tcg_radish: "var(--tcg_radish)",
            tcg_crimson: "var(--tcg_crimson)"
        },
        fontFamily: {
            display: ['Atkinson-Hyperlegible'/*, 'Helvetica', 'sans-serif'*/]
        },
        extend: {
            screens: {
                'xs': '640px'
            },
            boxShadow: {
                'bevel': "0 0px 0px 20px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 1)"
            }
        },
    },
    plugins: [],
};
