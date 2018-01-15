(function ( $ ) {
	loadTest = function(update)
	{
		loadTest.Criteria['mode'] = 'load_test';
			var ajax_config = {
				url: "func/loadTest.php",
				dataType: "json",
				type: "POST",
				data: loadTest.Criteria,
				beforeSend: function() {
					// travflex.popup('loading');
				}
			};
			var get_ajax = $.ajax(ajax_config);
			get_ajax.done(function(response) {
				loadTest.CompulsoryAE = response;
				console.log(response);
			});
	}
}( jQuery ));