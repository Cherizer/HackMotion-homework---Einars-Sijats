module.exports = {
  purge: ['./*.php', './**/*.php'],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
    colors: {
      'white': '#ffffff',
      'black': '#000000',
      'bubble-gum': '#ff77e9',
      'accent': {
        500: '#5773FF',
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
