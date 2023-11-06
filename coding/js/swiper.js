var mySwiper = new Swiper('.swiper-container', {
  navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
    el: '.swiper-pagination',
		type: 'bullets',
		clickable: true},
  	loop: true,
		slidesPerGroup: 1,
		slidesPerView: 2,
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev'
		},
	scrollbar: {
		el: '.swiper-scrollbar',
		hide: false,
		draggable: true
	},
	pagination: {
		el: '.swiper-pagination',
		type: 'bullets',
		clickable: true
	},
	breakpoints: {
		// ウィンドウサイズが320px以下
		767: {
		  slidesPerView: 1,
		}
	}
});
