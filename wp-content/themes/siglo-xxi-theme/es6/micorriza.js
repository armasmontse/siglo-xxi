import './bootstrap'
import './swiper-slider'
import initializeForms from './forms'
import backgroundParallax from './parallax'
import posicionarMenu from './menus'
import wow from './wow'
import popHandler from './notification'
import worldParallax from './worldParallax'
import scrollit from './scrollit'
import fixMenu from './fixMenu'

const w = $(window);
$( document ).ready(function() {
	wow.init();
	w.scroll(function() {
		backgroundParallax();
		posicionarMenu();
	});
});
$( window ).load(function() {

	initializeForms();
	popHandler();
	// wow.init();
	worldParallax();
	scrollit();
	fixMenu();

	

});