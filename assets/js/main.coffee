require './_navigation.js'
require './_skip-link-focus-fix.js'

(($) ->

	# Featured image expansion
	addExpander = ->
		if $('.wp-post-image', this).height() > $(this).innerHeight()
			$(this).append('<div class="expand" />')

	expand = ->
		$el = $(this).parent()
		if $el.hasClass 'expanded'
			$el.animate 
				'padding-bottom': '50%'
				500
			.removeClass 'expanded'
		else
			$el.animate 
				'padding-bottom': $('img', $el).height()+'px'
				500
			.addClass 'expanded'

	# Smooth scrolling
	smoothScroll = ->
		$('html, body').animate
			scrollTop: $( $.attr(this, 'href') ).offset().top
			500

	# Hook everything in
	$ ->		
		$('a').click smoothScroll
		$('.featured-image').each addExpander
		$('.featured-image .expand').click expand

		return
) jQuery