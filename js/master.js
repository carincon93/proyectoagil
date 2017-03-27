$(document).ready(function() {
	$('#myModal').on('shown.bs.modal', function () {
	  $('#myInput').focus();
	});

	$('.fa-comment-o').click(function(event) {
		$('.chat').toggleClass('toggle-chat');
	});
	$('.chat-header').click(function(event) {
		$('.chat').toggleClass('toggle-chat');
	});
	$('.fa-bars').click(function(event) {
		$('.navigation').toggleClass('toggle-nav');
	});

//----------------Chat---------------- 
	var btn  = document.getElementById('btnSend');
	var msgs = document.getElementById('msgs');
	var answ = new Array();
	answ[0] = 'Cómo va tu dia?'; 
	answ[1] = 'Mi nombre es sim-chat'; 
	answ[2] = 'Es un placer hablar contigo'; 
	answ[3] = 'Cuál es tu nombre?'; 
	answ[4] = 'Te puedo ayudar en algo?'; 

	$('#btnSend').click(function(event) {
		var msg = document.getElementById('msg').value;
	  	if(msg.length > 0) {
		    document.getElementById("msg").readOnly = true;
		    document.getElementById('msg').value = '';
		    setTimeout(function(){
			    msgs.innerHTML += "<li class='user'>"+msg+"</li>";
			},1200);
		    setTimeout(function(){
		      	var ransw = Math.round(Math.random()*4);
		      	msgs.innerHTML += "<li class='machine'>"+answ[ransw]+"</li>";
		      	document.getElementById("msg").readOnly = false;
		    },3400);
	  	}
	});

	$('.cart').click(function(event) {
		var cantidad = $(this).parent().prev().prev().html();

		parseInt(cantidad);
		$nveces = 0;
		$(this).parent().prev().prev().text(++$nveces);
	});

});