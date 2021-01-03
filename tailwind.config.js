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
        'list-1': "url('../images/listing/properties-list-03.jpg')",
        'list-2': "url('../images/listing/properties-list-04.jpg')",
        'list-3': "url('../images/listing/properties-list-11.jpg')",
        'list-4': "url('../images/listing/properties-list-12.jpg')",
        'list-5': "url('../images/listing/properties-list-13.jpg')",
        'list-6': "url('../images/listing/properties-list-14.jpg')",
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
