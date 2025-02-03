/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],


  theme: {
    extend: {
      fontFamily: {
        'dudka': ['dudka'],
        'soledago': ['Soledago'],
        'grunt': ['grunt'],
        'skifer': ['skifer'],
        'naur': ['NAURYZREDKEDS'],
        'poster': ['Postertoaster'],
        'relic': ['relic'],
      },
      colors: {
        'potters-clay': '#935f36',
        'dawn-pink': '#f2ebe1',
        'accent': '#e9a624',
        'main': '#324933',
        'black': '#060505',
        'bitter': '#888b7f',
        'del-rio': '#b19d8d',
        'sorrell-brown': '#cebc95',
        'woodland': '#3c642c',
        'oxford-blue': '#3c485c',
        'invis': 'rgba(0, 0, 0, 0);'
      },
      fontSize: {
        'hat': '10.5rem',
        'phone': '6rem;'
      },
    },
  },
  plugins: [],
};

