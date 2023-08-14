module.exports = {
	important: true,
	content: [
		'./src/**/*.vue',
		'./../*.php',
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
					100: '#FAB00F',
				},
			},
			spacing: {
				'10px': '0.625rem',
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
