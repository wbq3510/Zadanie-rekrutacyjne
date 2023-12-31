module.exports = {
	important: true,
	content: [
		'./src/**/*.vue',
		'./../*.php',
		'../404.php',
		'./src/assets/js/index.js',
		'./src/**/*.php',
		'./../srcwp/**/*.php',
		'./../templates/*.php',
		'./../woocommerce/**/*.php',
	],
	media: false, // or 'media' or 'class'

	theme: {
		extend: {
			screens: {
				'xl:': '1358px',
				'2xl': '1576px',
			},
			fontSize: {
				'28px': ['1.75rem', '2.0125rem'],
				'40px': ['2.5rem', '3rem'],
			},

			colors: {
				primary: {
					100: '#DCC1AB',
					200: '#1B5B31',
					300: '#F5F0EC',
					white: '#F5F0EC',
					black: '#111',
				},
			},
			spacing: {
				'10px': '0.625rem',
				'72px': '4.5rem',
				'6px': '0.375rem',
				'42px': '2.625rem',
				'18px': '1.125rem',
				'120px': '7.5rem',
				'34px': '2.125rem',
				'110px': '6.875rem',
				'60px': '3.75rem',
			},
			lineHeight: {},
			boxShadow: {},
		},
		letterSpacing: {
			'-13px': '-0.0081rem',
			'-1.44px': '-0.09rem',
		},
	},
	variants: {
		extend: {},
	},
	plugins: [],
}
