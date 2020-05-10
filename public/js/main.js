jQuery(document).ready(function ($) {
    $('label').on('click', function(e){
		e.preventDefault();
        var genreName = e.target.innerText;
        var id = e.target.querySelector('input').value;

		var api_url = 'https://api.themoviedb.org/3/discover/movie';
		var key = 'adb034dccc907acc9ca6ae36a72f2d6b';

		$.ajax({
		    url: api_url + "?api_key=" + key + "&with_genres=" + id,
		    contentType: "application/json",
		    dataType: 'json',
		    success: function(result){
		    	console.log(result);

		    	$('.popular-movies').html(
				'cxc'
		    	);
		    }
		})
	});

	$('.videocdn').hide();
	$('#play_movie').css('backgroundColor', 'blue');
	$('#play_movie').on('click', function(e){
		e.preventDefault();
		$('#play_movie').css('backgroundColor', '#ed8936');
		$('#play_trailer').css('backgroundColor', 'blue');
		$('.youtube').hide();
		$('.videocdn').show();
	});

	$('#play_trailer').on('click', function(e){
		e.preventDefault();
		$('#play_trailer').css('backgroundColor', '#ed8936');
		$('#play_movie').css('backgroundColor', 'blue');
		$('.videocdn').hide();
		$('.youtube').show();
	});



	$('.filter_show_button').on('click', function(){
		$('.filter_mobile_overlay').css('display', 'block');
		$('.mobile_sidebar_close_button').css('display', 'block');
		$('.filter_show_button').css('display', 'none');
	});

	$('.mobile_sidebar_close_button').on('click', function(){
		$('.filter_mobile_overlay').css('display', 'none');
		$('.mobile_sidebar_close_button').css('display', 'none');
		$('.filter_show_button').css('display', 'block');
	});

	
});
