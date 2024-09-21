module.exports = {
  darkMode: 'class', // Enables dark mode via class
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  theme: {
    extend: {
      colors: {
        primary: '#1a73e8',
        secondary: '#ff6347',
        dark: '#333',
      },
      fontFamily: {
        sans: ['Inter', 'Sans-serif'],
        heading: ['Montserrat', 'Sans-serif'],
      },
      spacing: {
        128: '32rem',
        144: '36rem',
      },
    },
  },
  plugins: [],
}
