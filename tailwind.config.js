module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      spacing: {
        '120': '30rem',
      },
      backgroundImage: theme => ({
        'big-house': "url('../images/big_house.jpg')",
       })
    },
    fontFamily: {
      rale: ['Raleway'],
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
