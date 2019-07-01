import Parallax from 'parallax-js'

export default function() {
	var scene = document.getElementById('scene');
	var parallaxInstance = new Parallax(scene, {
		relativeInput: true,
		onReady: function() {
			// Estrellas
			TweenMax.to('.stars-1', 3, {autoAlpha:0.2, repeat:-1, yoyo:true});
			TweenMax.to('.stars-2', 2.7, {autoAlpha:0.2, repeat:-1, yoyo:true, delay: 1});
			TweenMax.to('.stars-3', 3.4, {autoAlpha:0.2, repeat:-1, yoyo:true, delay: 2});

			// Mundo
			TweenMax.to('.world', 12, {rotation:15, repeat:-1, yoyo:true});

			// Nubes
			TweenMax.to('.clouds-1', 300, {left: '-50%', repeat:-1, yoyo:true});
			TweenMax.to('.clouds-2', 300, {left:' -50%', repeat:-1, yoyo:true});
			TweenMax.to('.clouds-3', 300, {left: '50%', repeat:-1, yoyo:true});
		}
	});
}