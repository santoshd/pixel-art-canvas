/* Author: Meher Ranjan  */

$(document).ready(function(){

	//INITIALISE
	$("#grid").append(function(){
		for(i=0;i<=23;i++){
			for(j=0;j<=23;j++){
				$(this).append('<div class="canvasTile _'+i+'_'+j+' "></div>')
			}	
		}
	})
	var oldBg, md; //retain the old block color/ md = mousedown flag
	var setColor = "#000000"; //default color picker & cursor color:black

	//USER MOUSE CLICK/MOVE ACTIVITY ON THE CANVAS
	$(".canvasTile").toggle(function(){
		oldBg = $(this).css("background-color")
		$(this).css("background-color",setColor)
	},
	function(){
		$(this).css("background-color",oldBg)
	})

	$(".canvasTile").mousedown(function(){md = true})
	$(".canvasTile").mouseup(function(){md = false})

	$(".canvasTile").mousemove(function(){
			if(md)
			$(this).css("background-color",setColor)	
	})

	$("#clearcanvas").click(function(){
		$(".canvasTile").css("background","#fff");
		$("#temp").attr("checked", false)
	})

	//PROCESS THE DATA N SAVE THE IMAGE
	$("#savetodesktop").click(function(){
		var x = 0;
		var colorarr = {};
		for(var i = 0; i <= 23; i++){
			for(var j = 0; j <= 23; j++){
				colorarr[x] = toHex($("._"+i+"_"+j).css("background-color"));
				x++;
			}
		}
		$.download('http://localhost/pixelart/download.php',colorarr);
	})	

	//CLICK OF A TEMPLATE
	$("#temp").click(function(){
		var $img = $(this).attr("data-img");
		$.get("loadTemplate.php",
			{img: $img},
			function(data){
				for(var i = 0; i <= 23; i++){
					for(var j = 0; j <= 23; j++){
					$("._"+i+"_"+j).css("background-color","rgb("+data[j][i]+")");
				}
			}
			},
			"json"
		);
	})

	//COLORPICKER INITIALISATION
	$('#colorinput').ColorPicker({color:'000000', flat: true,
	onChange: function (hsb, hex, rgb) {
		setColor = "#"+hex;
	}});
})

//RGB TO HEX CONVERTER
function toHex(c) {
	var m = /rgba?\((\d+), (\d+), (\d+)/.exec( c );
	return m? ( m[1] << 16 | m[2] << 8 | m[3] ).toString(16): c;
}


//PLUGIN TO DOWNLOAD THE IMAGE WITH AJAX
jQuery.download = function(url, data, method){
	//url and data options required
	if( url && data ){ 
		//data can be string of parameters or array/object
		data = typeof data == 'string' ? data : jQuery.param(data);
		//split params into form inputs
		var inputs = '';
		jQuery.each(data.split('&'), function(){ 
			var pair = this.split('=');
			inputs+='<input type="hidden" name="'+ pair[0] +'" value="'+ pair[1] +'" />'; 
		});
		//send request
		jQuery('<form action="'+ url +'" method="'+ (method||'post') +'">'+inputs+'</form>')
		.appendTo('body').submit().remove();
	};
};