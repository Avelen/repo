(function($){$(document).ready(function(){var z=4;$('.img-block').each(function(){for(i=1;i<=z;i++){$(this).find('img:last-child').clone().addClass("newImg"+i).prependTo(this);}});function moveBtm(z,current){for(var i=2;i<=z;i++){j=i+i;$('.newImg'+i).css('transform','translate3d(0, '+current*j+'px, 0)');}}
function moveTop(z,current){for(var i=2;i<=z;i++){j=i+i;$('.newImg'+i).css('transform','translate3d(0, -'+current*j+'px, 0)');}}
function clear(z){for(var i=2;i<=z;i++){$('.newImg'+i).css('transform','translate3d(0, 0, 0)');}}
var Scrollbar=window.Scrollbar;CurrentScroll=0;Scrollbar.use(window.OverscrollPlugin)
const scrollbar=Scrollbar.init(document.querySelector('body'),{damping:0.08,plugins:{overscroll:{effect:'bounce',}},});scrollbar.addListener(()=>{var offset=scrollbar.offset.y;var NextScroll=offset;if((NextScroll>CurrentScroll)&&(offset!=0)){current=NextScroll-CurrentScroll;moveBtm(z,current);}else if(offset!=0){current=CurrentScroll-NextScroll;moveTop(z,current);}
CurrentScroll=NextScroll;setTimeout(function(){clear(z);},400);});});}(jQuery));