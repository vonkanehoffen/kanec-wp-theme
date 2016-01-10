$ = require 'jquery'
require './_navigation.js'
require './_skip-link-focus-fix.js'

$ ->
	# Smooth scrolling
	$('a').click ->
		$('html, body').animate
			scrollTop: $( $.attr(this, 'href') ).offset().top
			500
		false
