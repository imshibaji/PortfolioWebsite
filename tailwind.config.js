module.exports = {
  purge: [
    './Modules/Payment/Resources/**/*.blade.php',
    './Modules/Payment/Resources/**/*.js',
    './Modules/Payment/Resources/**/*.vue',
    './Modules/User/Resources/**/*.blade.php',
    './Modules/User/Resources/**/*.js',
    './Modules/User/Resources/**/*.vue',
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
    // './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    // './storage/framework/views/*.php',
  ],
  darkMode: 'media', // or 'media' or 'class'
  corePlugins: {
    preflight: true,
  },
  theme: {
    extend: {
        fontFamily:{
            'dancing-script': ['Dancing Script', 'cursive'],
            'caveat': ['Caveat', 'cursive'],
            'indie-flower': ['Indie Flower', 'cursive'],
            'orbitron': ['Orbitron', 'sans-serif'],
            'satisfy': ['Satisfy', 'cursive'],
            'poppins': ['Poppins', 'sans-serif'],
        },
        height: {
            96: '24rem',
            screen: '100vh',
            '10v': '10vh',
            '20v': '20vh',
            '30v': '30vh',
            '40v': '40vh',
            '50v': '50vh',
            '60v': '60vh',
            '70v': '70vh',
            '80v': '80vh',
            '90v': '90vh',
            '100v': '100vh',
        },
    },

  },
  variants: {
    extend: {
        textOpacity: ['dark']
    },
  },
  daisyui:{
    themes: [
      {
        'shibaji':{
          // 'fontFamily': 'ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,Liberation Mono,Courier New,monospace',

          // 'fontFamily': 'orbitron',
          'fontFamily': 'poppins',
          'primary': '#088cd8',
          'primary-focus': '#03588a',
          'primary-content': '#ffffff',
          'secondary': '#ef9fbc',
          'secondary-focus': '#e8739e',
          'secondary-content': '#ffffff',
          'accent': '#eeaf3a',
          'accent-focus': '#e19914',
          'accent-content': '#ffffff',
          'neutral': '#291334',
          'neutral-focus': '#200f29',
          'neutral-content': '#ffffff',
          'base-100': '#faf7f5',
          'base-200': '#efeae6',
          'base-300': '#e7e2df',
          'base-content': '#291334',
          'info': '#2094f3',
          'success': '#009485',
          'warning': '#ff9900',
          'error': '#ff5724',
          // '--rounded-box': '1rem',
          // '--rounded-btn': '1.9rem',
          // '--rounded-badge': '1.9rem',
          // '--tab-border': '2px'
          '--rounded-box': '0rem',
          '--rounded-btn': '0rem',
          '--rounded-badge': '0rem',
          '--tab-border': '0px'
        },
        'dark': {
          'primary': '#088cd8',
          'primary-focus': '#03588a',
          'primary-content': '#ffffff',
          'secondary': '#f000b8',
          'secondary-focus': '#bd0091',
          'secondary-content': '#ffffff',
          'accent': '#37cdbe',
          'accent-focus': '#2aa79b',
          'accent-content': '#ffffff',
          'neutral': '#2a2e37',
          'neutral-focus': '#16181d',
          'neutral-content': '#ffffff',
          'base-100': '#3d4451',
          'base-200': '#2a2e37',
          'base-300': '#16181d',
          'base-content': '#ebecf0',
          'info': '#66c6ff',
          'success': '#87d039',
          'warning': '#e2d562',
          'error': '#ff6f6f'
        },
      },
    ],
  },
  plugins: [
    require('daisyui'),
    require('@tailwindcss/typography'),
    require('@tailwindcss/aspect-ratio'),
    require('@tailwindcss/forms'),
  ],
}
