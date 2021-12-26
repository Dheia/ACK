const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
	content: [
		'./pages/**/*.htm',
		'./partials/**/*.htm',
		'./layouts/**/*.htm',
		'./src/assets/js/**/*.js',
	],
	theme: {
		screens: {
			'xs': '440px',
			'-xs': {'max': '440px'},
			'sm': '640px',
			'-sm': {'max': '640px'},
			'md': '768px',
			'-md': {'max': '768px'},
			'lg': '1036px',
			'-lg': {'max': '1036px'},
		},
		fontFamily: {
			'sans': 'Roboto',
			'mont': 'Montserrat',
		},
    extend: {
			colors: {
				blue: {
					DEFAULT: 'rgba(97, 140, 199, 1)',
					
					'primary-50': 'rgba(27, 39, 61, 1)',
					'primary-100': 'rgba(27, 39, 61, 1)',

					'dark-light': 'rgba(30, 55, 98, 1)',
					
					'gr-60': 'rgba(29, 55, 103, 0.60)',
					'gr-70': 'rgba(29, 55, 103, 0.70)',

					'light-20': 'rgba(72, 106, 152, 0.20)',
					'light-40': 'rgba(72, 106, 152, 0.40)',
					'light-100': 'rgba(72, 106, 152, 1)',

					'dark-60': 'rgba(15, 35, 70, 0.60)',
					'dark-100': 'rgba(15, 35, 70, 1)',
				},
				pink: {
					'light': 'rgba(234, 85, 111, 0.41)',
				},
				black: {
					DEFAULT: '#4E565A'
				}
			},
			boxShadow: {
				'black': '2px 2px 4px rgba(0, 0, 0, 0.25)',
				'light-blue': '2px 2px 4px rgba(72, 106, 152, 0.42)',
			},
			container: {
				center: true,
			},
			spacing: {
				'05': '0.125rem'  
			},
		},
  },
  plugins: [],
}