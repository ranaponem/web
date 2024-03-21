import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{php,html,js}"],
  theme: {
    extend: {
        fontFamily: {
            sans: ['Figtree', ...defaultTheme.fontFamily.sans],
        },
        backgroundImage: {
          // url is relative to the CSS file loaded by the browser
          // In this case, the CSS will be located on the css folder          
          'logo-light': "url('../img/politecnico_h.svg')",
          'logo-dark': "url('../img/politecnico_h_white.svg')",
        }      
    },
  },
  plugins: [forms],
}