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
        'large': '85.7vh',
        'mobile': '74.1vh',
      },
      spacing:{
        'nav': '10vh',
        'title': '5vh',
        'header-home': '20vh',
        'section-home': '50vh',
      } 
    },

  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}
