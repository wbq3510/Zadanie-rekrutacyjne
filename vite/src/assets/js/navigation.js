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
// open sub menu mobile
const mobileMenuLink = document.querySelector('.mega-menu > a')
const mobileMenuLinkSub = document.querySelector('#site-navigation>ul li ul')
const menuList = document.querySelector('.mega-menu > ul')
const menuListSub = document.querySelector('#site-navigation>ul li ul li ul')
const submenuItemsMobile = document.querySelectorAll('.menu-item-has-children a')

submenuItemsMobile.forEach(item => {
	const arrowSpan = document.createElement('span')
	arrowSpan.className = 'arrow-sub-mobile'
	item.appendChild(arrowSpan)
	arrowSpan.addEventListener('click', function (event) {
		event.preventDefault()
		menuList.classList.toggle('active-mobile-mega-menu')
	})
})
