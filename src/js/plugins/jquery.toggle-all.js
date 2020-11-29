;(function($) {
	$.fn.toggleAll = function (options) {
		// console.log(this);
		var uniqueNumber = 1;
		this.each(function(index, element) {
			var elem = $(element);
			// console.log(element);
			var string = options.uniqueString+uniqueNumber;
			elem.on('click', function(event) {
				event.preventDefault();
				$(this).addClass('active');
				if ($(this).hasClass('active')) {
					options.open($(this));
					close({
						this: $(this),
						notCloseClass:options.notCloseClass,
						uniqueString:string,
					});
				}
			});
			uniqueNumber++;

		});

		function close(params) {
	      var firstClick = true;
	      $(document).bind('click.'+params.uniqueString, function(e) {
	        console.log($(e.target).closest(params.notCloseClass).length);
	        if (!firstClick && $(e.target).closest(params.notCloseClass).length == 0) {
	        	params.this.removeClass('active');
	            options.close(params.this);
	            $(this).unbind('click.'+params.uniqueString);
	        }
	        firstClick = false;
	      });

	    }
	};
})(jQuery);