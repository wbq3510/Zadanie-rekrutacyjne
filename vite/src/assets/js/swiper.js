// core version + navigation, pagination modules:
import Swiper, { Navigation } from 'swiper'
// import Swiper and modules styles
import 'swiper/css'
import 'swiper/css/navigation'

// init Swiper hero icon:
const hero = new Swiper('.heroSwiper', {
	modules: [Navigation],
	slidesPerView: 1,
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
})
