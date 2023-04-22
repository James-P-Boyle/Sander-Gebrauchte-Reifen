/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      animation: {
        none: 'none',
        increaseWidth: 'increaseWidth 0.8s ease-in',
        fadeIn:'fadeIn 0.6s ease-in',
        fadeOut:'fadeOut 2.6s ease-in',
        translateInLeft: 'translateInLeft 1.5s ease'
      },
      keyframes: {
        increaseWidth: {
          '0%': {
            maxWidth: '0rem',
          },
          '100%': {
            maxWidth: '20rem',
          },
        },
        fadeIn: {
          '0%' : {
            opacity: '0',
          },
          '100%' : {
            opacity: '100',
          },
        },
        fadeOut: {
          '0%' : {
            opacity: '100',
          },
          '100%' : {
            opacity: '0',
          },
        },
        translateInLeft: {
          '0%' : {
            opacity: '0',
            transform: 'translateX(-100%)'
          },

          '100%' : {
            opacity: '100',
            transform: 'translateX(0)'
          }
        }
      },
      colors: {
        'ci-black': '#171717',
        'ci-black-muted': '#171717BE',
        'ci-white': '#F9F4F5',
        'ci-white-muted': '#E5E5E5',
        'ci-black': '#171717',
      }
    },
  },
  plugins: [],
}

