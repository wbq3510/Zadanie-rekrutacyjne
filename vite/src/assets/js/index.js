import '../css/index.css'
import './navigation'
import './swiper'
import './masony'
import './glightbox'
// AOS animation
AOS.init({
	duration: 1000,
})

const searchIcon = document.querySelector('#search-icon')
const searchInput = document.querySelector('#search-input')
const megaMenu = document.querySelector('.mega-menu')
const body = document.querySelector('body')
const siteHeader = document.querySelector('#site-header')

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
