import Macy from 'macy'

const masonyContainer = document.querySelector('#macy-container')
const showMoreButton = document.querySelector('#showMoreButton')
const imgMasony = document.querySelectorAll('#macy-container img')

// Masony gallery
document.addEventListener('DOMContentLoaded', function () {
	const macy = Macy({
		container: masonyContainer,
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
	// Read more button
	imgMasony.forEach((img, index) => {
		if (index > 8) {
			img.classList.add('hidden')
		}
		if (imgMasony.length <= 8) {
			showMoreButton.classList.add('hidden')
		}
		let currentIndex = 9
		showMoreButton.addEventListener('click', function (e) {
			const imageToShow = 3 // number of images to shows
			for (let i = 0; i < imageToShow; i++) {
				if (currentIndex < imgMasony.length) {
					const img = imgMasony[currentIndex]
					img.classList.remove('hidden')
					currentIndex++
					if (currentIndex >= imgMasony.length) {
						showMoreButton.classList.add('hidden')
						masonyContainer.classList.remove('masonyOverlay')
						break
					}
				}
			}
			macy.recalculate()
		})
	})
})
