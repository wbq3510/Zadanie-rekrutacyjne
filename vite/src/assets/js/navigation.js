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
