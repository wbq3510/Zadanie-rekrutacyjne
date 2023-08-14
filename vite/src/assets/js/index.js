import '../css/index.css'
import './navigation'
import './swiper'

const searchIcon = document.querySelector('#search-icon')
const searchInput = document.querySelector('#search-input')
searchIcon.addEventListener('click', function (e) {
	searchInput.classList.toggle('hidden')
})
