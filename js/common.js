$(document).ready(function(){
	$(".increment").click(function(){
		var incr_col = $(this).attr("data_id");
		var col_value = $("#"+ incr_col).html();
		$("#"+ incr_col).html(parseInt(col_value) + 1);
	});

	$(".decrement").click(function(){
		var decr_col = $(this).attr("data_id");
		var col_value = $("#"+ decr_col).html();
		if(col_value != 0) {
			$("#"+ decr_col).html(parseInt(col_value) - 1);
		}                
	});
	$("#two-way-chk").click(function(){
		if($(this).attr("data_id") === "unchecked") {
			$(this).attr("data_id", "checked");
			$(this).attr("src", "images/cked_box.png");
			$("#return_date").show();
			$("#img_flight_selection").attr("src", "images/Flights-twoway.png");
		}
		else {
			$(this).attr("data_id", "unchecked");
			$(this).attr("src", "images/uncked_box.png");
			$("#return_date").hide();   
			$("#img_flight_selection").attr("src", "images/Flights-oneway.png");
			
		}
	});
	
	$('#flight_src').on('vclick', function() {
		$('#src_city').selectmenu('open');		
	});
	
	$('#src_city').bind('change', function(e,p) {
		$('#src_short').text($(this).val());
		$('#src_full').text($(this).find(":selected").text());
	});
	
	$('#flight_dest').on('vclick', function() {
		$('#dest_city').selectmenu('open');		
	});
	
	$('#dest_city').bind('change', function(e,p) {
		$('#dest_short').text($(this).val());
		$('#dest_full').text($(this).find(":selected").text());
	});
	
	$('#depart_date_selection').on('vclick', function() {
		$('#depart_calendar').datebox('open');
	});
	$('#depart_calendar').bind('change', function(e,p) {
		var arr_date = $(this).val().split("/");
		$('#depart_day').text(arr_date[0]);
		$('#depart_month').text(arr_date[1]);
		$('#depart_year').text(arr_date[2]);
	});
	
	$('#return_date_selection').on('vclick', function() {
		$('#return_calendar').datebox('open');
	});
	$('#return_calendar').bind('change', function(e,p) {
		var arr_date = $(this).val().split("/");
		$('#return_day').text(arr_date[0]);
		$('#return_month').text(arr_date[1]);
		$('#return_year').text(arr_date[2]);
	});
	
	/*var snapper = new Snap({
		element: document.getElementById('snap_content'),
		touchToDrag: false
	});
	
	
	$(".open-left").click(function(){
		//$( "#mypanel" ).panel( "open" , optionsHash );
		alert("asd");
		$( "#mypanel" ).panel( "toggle" );
		/*if(snapper.state().state=="left"){
			snapper.close();
		}
		else {
			snapper.open('left');
		}
		
	});*/
	
});