// core version + navigation module:
import Swiper, { Navigation } from 'swiper'
// import Swiper and modules styles
import 'swiper/css'
import 'swiper/css/navigation'

// init Swiper hero:
const hero = new Swiper('.heroSwiper', {
	modules: [Navigation],
	slidesPerView: 1,
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
})
