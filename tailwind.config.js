/** @type {import('tailwindcss').Config} */
module.exports = {
	content: ['./**/*.{html,php}'],
	darkMode: 'media', // or 'class'
	theme: {
		extend: {
			colors: {
				'cyan': '#00ffff',
			},
			borderRadius: {
				'4xl': '2rem',
				'5xl': '2.5rem',
				'6xl': '3rem',
				'7xl': '3.5rem',
				'8xl': '4rem',
			},
			backgroundImage: {
				none: 'none',
				'radial-gradient-to-t': 'radial-gradient(at top, var(--tw-gradient-stops))',
				'radial-gradient-to-tr': 'radial-gradient(at top right, var(--tw-gradient-stops))',
				'radial-gradient-to-r': 'radial-gradient(at right, var(--tw-gradient-stops))',
				'radial-gradient-to-br': 'radial-gradient(to bottom right, var(--tw-gradient-stops))',
				'radial-gradient-to-b': 'radial-gradient(at bottom, var(--tw-gradient-stops))',
				'radial-gradient-to-bl': 'radial-gradient(at bottom left, var(--tw-gradient-stops))',
				'radial-gradient-to-l': 'radial-gradient(at left, var(--tw-gradient-stops))',
				'radial-gradient-to-tl': 'radial-gradient(at top left, var(--tw-gradient-stops))',
			},
		},
	},
	plugins: [
		function ({ addVariant }) {
			addVariant('child', '& > *');
			addVariant('child-hover', '& > *:hover');
		}
	],
}