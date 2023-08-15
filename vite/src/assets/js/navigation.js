;(function () {
	const siteNavigation = document.getElementById('site-navigation')
	const button = siteNavigation.getElementsByTagName('button')[0]
	button.addEventListener('click', function () {
		siteNavigation.classList.toggle('toggled')

		if (button.getAttribute('aria-expanded') === 'true') {
			button.setAttribute('aria-expanded', 'false')
		} else {
			button.setAttribute('aria-expanded', 'true')
		}
	})

	document.addEventListener('click', function (event) {
		const isClickInside = siteNavigation.contains(event.target)
		if (!isClickInside) {
			siteNavigation.classList.remove('toggled')
			button.setAttribute('aria-expanded', 'false')
		}
	})
})()

// Close mobile menu
let close_menu = document.querySelector('.close-menu')
let nav = document.querySelector('#site-navigation')
let button_toggle = document.querySelector('.menu-toggle')

close_menu.onclick = function () {
	nav.classList.toggle('toggled')
	if (button_toggle.getAttribute('aria-expanded') === 'true') {
		button_toggle.setAttribute('aria-expanded', 'false')
	} else {
		button_toggle.setAttribute('aria-expanded', 'true')
	}
}
