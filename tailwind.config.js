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
      tcg_red: "var(--tcg_red)",
      tcg_radish: "var(--tcg_radish)",
      tcg_crimson: "var(--tcg_crimson)"
    },
    fontFamily: {
      display: ['Atkinson-Hyperlegible'/*, 'Helvetica', 'sans-serif'*/]
    },
    boxShadow: {
      'xl': '0 25px 100px -12px rgba(0, 0, 0, 0.6)'
    },
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [],
};
