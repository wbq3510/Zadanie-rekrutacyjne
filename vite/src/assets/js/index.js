import '../css/index.css'
import './navigation'
import './swiper'

// AOS animation
AOS.init()
import Macy from 'macy'
const searchIcon = document.querySelector('#search-icon')
const searchInput = document.querySelector('#search-input')
const megaMenu = document.querySelector('.mega-menu')
const body = document.querySelector('body')
const siteHeader = document.querySelector('#site-header')
const container = document.getElementById('macy-container')
const boxHovers = document.querySelectorAll('.box-hover')

// Show search
searchIcon.addEventListener('click', function (e) {
	searchInput.classList.toggle('hidden')
})
// overlay menu
megaMenu.addEventListener('mouseover', function (e) {
	body.classList.add('overlay')
})
megaMenu.addEventListener('mouseleave', function (e) {
	body.classList.remove('overlay')
})
// overlay box
// boxHovers.forEach(boxHover => {
// 	boxHover.addEventListener('mouseover', () => {
// 		body.classList.add('overlay')
// 		boxHover.classList.add('z-50')
// 	})

// 	boxHover.addEventListener('mouseout', () => {
// 		body.classList.remove('overlay')
// 		boxHover.classList.remove('z-10')
// 	})
// })

// sticky menu
window.addEventListener('scroll', function (e) {
	if (window.scrollY >= 200) {
		body.classList.add('stickyBody')
		siteHeader.classList.add('stickyHeader')
	} else {
		siteHeader.classList.remove('stickyHeader')
		body.classList.remove('stickyBody')
	}
})

// Masony gallery
document.addEventListener('DOMContentLoaded', function () {
	const macy = Macy({
		container: container,
		trueOrder: true,
		waitForImages: false,
		margin: 42,
		columns: 3,
		breakAt: {
			460: {
				margin: 10,
				columns: 2,
			},
			1024: {
				margin: 10,
				columns: 3,
			},
		},
	})
})
