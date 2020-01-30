(function($){
$(document).ready(function(){
		var img_count = 4;

		$('.img-block').each(function(){
			for (i = 1; i <= img_count; i++) {
				$(this).find('img:last-child').clone().addClass("newImg"+i).prependTo(this);
			}					
		});

		function moveBtm(img_count, current){
			for (var i = 2; i <= img_count; i++) {	
				j = i+i;						
				$('.newImg'+i).css('transform','translate3d(0, '+current*j+'px, 0)');
			}
		}

		function moveTop(img_count, current){
			for (var i = 2; i <= img_count; i++) {		
				j = i+i;					
				$('.newImg'+i).css('transform','translate3d(0, -'+current*j+'px, 0)');
			}
		}

		function clear(img_count){
			for (var i = 2; i <= img_count; i++) {							
				$('.newImg'+i).css('transform','translate3d(0, 0, 0)');
			}
		}

		var Scrollbar = window.Scrollbar;
		 	CurrentScroll = 0;

		 	Scrollbar.use(window.OverscrollPlugin)

	  		const scrollbar = Scrollbar.init(document.querySelector('body'), {
			  damping: 0.08,
			  plugins: {
			      overscroll: {
			      	effect: 'bounce',
			      }			      
			    },
			});
				scrollbar.addListener(() => {
				  		
				  var offset = scrollbar.offset.y;
				  var NextScroll = offset;
					if ((NextScroll > CurrentScroll) && (offset != 0)){
						current = NextScroll - CurrentScroll;
						moveBtm(img_count, current);
					} else if (offset != 0) {
						current = CurrentScroll - NextScroll;
						moveTop(img_count, current);	
					}

					CurrentScroll = NextScroll;

					setTimeout(function(){
						clear(img_count);
					}, 400);
				});	
});

}(jQuery));