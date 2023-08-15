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
				'2xl': '1480px',
			},
			fontSize: {},

			colors: {
				gray: {},
				primary: {
					100: '#DCC1AB',
					200: '#1B5B31',
				},
			},
			spacing: {
				'10px': '0.625rem',
				'72px': '4.5rem',
				'6px': '0.375rem',
				'42px': '2.625rem',
				'18px': '1.125rem',
			},
			lineHeight: {},
			boxShadow: {},
		},
	},
	variants: {
		extend: {},
	},
	plugins: [],
}
