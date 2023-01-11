/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{php,html,js}",
  "./*/*.{php,html,js}",
  "./*/*/*.{php,html,js}"],

  theme: {
    extend: {
      fontFamily:{
        caviar: ["caviar_dreamsregular"],
      },
      minHeight: {
        '100': '83.7vh',
      },
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}
