$(function() {
var click1=0;
var click2=0;
var click3=0;
var click4=0;
var click5=0;
$("#direction_up").click(function(){
	click1=click1+1;
	if(click1%2!=0){
	$.get('communication/front_start.php', function(data) {
                console.log("Server Returned: " + data);
				
            });
            return false;
	}
	else{
	$.get('communication/stop.php', function(data) {
                console.log("Server Returned: " + data);
            });
            return false;
	}
});
$("#direction_down").click(function(){
	click2=click2+1;
	if(click2%2!=0){
	$.get('communication/back_start.php', function(data) {
                console.log("Server Returned: " + data);
				
            });
            return false;
	}
	else{
	$.get('communication/stop.php', function(data) {
                console.log("Server Returned: " + data);
            });
            return false;
	}
});
$("#direction_right").click(function(){
	click3=click3+1;
	if(click3%2!=0){
	$.get('communication/right_start.php', function(data) {
                console.log("Server Returned: " + data);
				
            });
            return false;
	}
	else{
	$.get('communication/stop.php', function(data) {
                console.log("Server Returned: " + data);
            });
            return false;
	}
});
$("#direction_left").click(function(){
	click4=click4+1;
	if(click4%2!=0){
	$.get('communication/left_start.php', function(data) {
                console.log("Server Returned: " + data);
				
            });
            return false;
	}
	else{
	$.get('communication/stop.php', function(data) {
                console.log("Server Returned: " + data);
            });
            return false;
	}
});
$("#direction_stop").click(function(){
	$.get('communication/stop.php', function(data) {
                console.log("Server Returned: " + data);
            });
            return false;
});
$("#camera_right").click(function(){
	$.get('communication/right_camera.php', function(data) {
                console.log("Server Returned: " + data);
            });
            return false;
});
$("#camera_left").click(function(){
	$.get('communication/left_camera.php', function(data) {
                console.log("Server Returned: " + data);
            });
            return false;
});

});