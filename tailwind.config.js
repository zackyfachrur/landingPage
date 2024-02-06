/** @type {import('tailwindcss').Config} */

module.exports = {
  content: ["./base/**/*.{html,js}", "../db-native/**/*.{html,js}"],
  theme: {
    extend: {
      colors: {
        stone: {
          50: '#fafaf9',
          100: '#f5f5f4', 
          200: '#e7e5e4',
        },
      },
    },
  },
  plugins: [],
};
