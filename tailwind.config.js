/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["**/*.{html,.js,php}"],
  theme: {
    extend: {
      colors: {
        "dark-blue": "#123148",
      "dark-blue-grashish": "#37496d",
      "violet-soft": "#7a6ba0",
      "green-lime": "#9bce00",
      "yellow-lime":"#ece93f",
      "yellow-soft": "#ffff8a",
      },
      fontFamily:{
        "madimiOne": ["'Madimi One'", 'sans-serif'],
        "notoJP": ["'Noto Sans JP'", 'sans-serif'],
      },
      backgroundImage:{
        'tourism-header': "url('../images/turismo-header.jpg')",
        'constellation': "url('../images/illustration-constellation.svg')",
        'register-contact': "url('../images/contacto.jpg')",
      }
    },
  },
  plugins: [],
}

