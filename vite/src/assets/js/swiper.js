// core version + navigation, pagination modules:
import Swiper, { Navigation, Autoplay } from 'swiper'
// import Swiper and modules styles
import 'swiper/css'
import 'swiper/css/navigation'

// init Swiper hero icon:
const hero = new Swiper('.heroSwiper', {
	modules: [Navigation, Autoplay],
	slidesPerView: 1,
	autoplay: true,
})
